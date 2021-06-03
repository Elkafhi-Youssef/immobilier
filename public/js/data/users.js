import { getData } from "./request.js";

/**
 * Elements
 */

// Table elements
const tableBody = document.querySelector(".table_body");
const tableHead = document.querySelector(".table_head");
// Student button
const stdBtn = document.querySelector(".std_btn");
// Teacher button
const teaBtn = document.querySelector(".tea_btn");
// Employe button
const empBtn = document.querySelector(".emp_btn");
// Title 
const title = document.querySelector('#title');
// search input
const filterInput = document.querySelector('.filter-input');
// select tag
const selectOption = document.querySelector('.filter-option');
// option id 
const optionId = document.querySelector('.option_id');

// Variables
let searchIn = 1; // 1 : for students , 2 : for employs ...


/**
 * 
 * Display students
 * @param {array} data studenrs to be displayed
 * @return {void}
 * 
 */
function displayStudents(data) {
  title.innerHTML = "List des clients";
  optionId.value = 'student_id';
  let output = '';  
  tableHead.innerHTML = `<tr>
                            <th>ID</th>
                            <th>Non</th>
                            <th>Prénom</th>
                            <th>Filière</th>
                            <th>Semester</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Image</th>  
                        </tr>`;

  data.forEach((elm) => {
    output += `
            <tr>
                <td>${elm['student_id']}</td>
                <td>${elm['first_name']}</td>
                <td>${elm['last_name']}</td>
                <td>${elm['branch']}</td>
                <td>${elm['semester']}</td>
                <td>${elm['phone']}</td>
                <td>${elm['email']}</td>
                <td><img src="public/images/avatar.png" alt="" style="width: 40px;"></td>    
            </tr>
        `;
  });
  tableBody.innerHTML = output;
}


/**
 * 
 * Display Employs
 * @param {array} data employs to be displayed
 * @return {void}
 * 
 */

function displaEmploys(data) {
  title.innerHTML = "Employés";
  optionId.value = 'empl_id';
  let output = '';  
  tableHead.innerHTML = `<tr>
                            <th>ID</th>
                            <th>Non</th>
                            <th>Prénom</th>
                            <th>Service</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Image</th>  
                        </tr>`;

  data.forEach((elm) => {
    output += `
            <tr>
                <td>${elm['empl_id']}</td>
                <td>${elm['first_name']}</td>
                <td>${elm['last_name']}</td>
                <td>${elm['service']}</td>
                <td>${elm['phone']}</td>
                <td>${elm['email']}</td>
                <td><img src="public/images/avatar.png" alt="" style="width: 40px;"></td>    
            </tr>
        `;
  });
  tableBody.innerHTML = output;
}
/**
 * 
 * Display teachers
 * @param {array} data teschers to be displayed
 * @return {void}
 * 
 */
function displayTeachers(data) {
  title.innerHTML = "Enseignants";
  optionId.value = 'teacher_id';
  let output = '';  
  tableHead.innerHTML = `<tr>
                            <th>ID</th>
                            <th>Non</th>
                            <th>Prénom</th>
                            <th>Departement</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Image</th>  
                        </tr>`;

  data.forEach((elm) => {
    output += `
            <tr>
                <td>${elm['teacher_id']}</td>
                <td>${elm['first_name']}</td>
                <td>${elm['last_name']}</td>
                <td>${elm['departement']}</td>
                <td>${elm['phone']}</td>
                <td>${elm['email']}</td>
                <td><img src="public/images/avatar.png" alt="" style="width: 40px;"></td>    
            </tr>
        `;
  });
  tableBody.innerHTML = output;
}


/**
 *
 * Event listeners
 *
 */

window.onload = getData("http://127.0.0.1/gbests/users/loadUsers", displayStudents);

stdBtn.addEventListener("click", () => {
  getData("http://127.0.0.1/gbests/users/loadUsers/student", displayStudents);
  searchIn = 1;
});

empBtn.addEventListener("click", () => {
  getData("http://127.0.0.1/gbests/users/loadUsers/employe", displaEmploys);
  searchIn = 2;
});

teaBtn.addEventListener("click", () => {
  getData("http://127.0.0.1/gbests/users/loadUsers/teacher", displayTeachers);
  searchIn = 3;
});

// filter request
document.querySelector('.search-submit').addEventListener('click',()=>{
    
    // Get input values
    let inputValue = filterInput.value;
    let selectValue = selectOption.value;
    
    // tables 
    let tables = {
        1:'student',
        2:'employe',
        3:'teacher'
    };

    let table = tables[searchIn];

    let urlParams = `${table}/${selectValue}/${inputValue}`;

    // Load and display data
    switch (searchIn) {
        case 2:
            getData('http://localhost/gbests/users/loadFiltredUsers/'+urlParams,displaEmploys);
            break;
        case 3:
            getData('http://localhost/gbests/users/loadFiltredUsers/'+urlParams,displayTeachers);
            break;
        default:
            getData('http://localhost/gbests/users/loadFiltredUsers/'+urlParams,displayStudents);
            break;
    }

});

