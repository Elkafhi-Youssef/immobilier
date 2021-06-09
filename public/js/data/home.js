import { getData } from "./request.js";

/**
 * Elements
 */

const tableBody = document.querySelector(".table_body");



const title = document.querySelector('#title');
const filterInput = document.querySelector('.filter-input');
const selectOption = document.querySelector('.filter-option');


/**
 * 
 * Display books to give (ordred books)
 * @param {array} data books to be displayed
 * @return {void}
 * 
 */
function toGive(data) {
  title.innerHTML = "Liste de demande";  
  data.forEach((elm) => {
    output += `
            <tr>
                <td>${elm["id"]}</td>
                <td>${elm["title"]}</td>
                <td>${elm["fullname"]}</td>
                <td>${elm["lname"]} ${elm["fname"]}</td>
                <td>${elm["date"]}</td>
                <td class="d-flex justify-content-center">
                    <a class="btn btn-success" href="#"
                        >Valider <i class="fa fa-arrow-alt-circle-right"></i>
                    </a>
                </td>
            </tr>
        `;
  });
  tableBody.innerHTML = output;
}

/**
 * 
 * Display books should be given back
 * @param {array} data 
 * 
 */

function toGiveBack(data) {
  title.innerHTML = "A rendre";  
  let output = `
      <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Id D'emprunteur</th>
            <th>Nom et prénom</th>
            <th>Date de reteur</th>
            <th>Duree</th>
            <th  class="d-flex justify-content-center">Decesion</th>
        </tr>
      </thead>
    `;

  data.forEach((elm) => {
    output += `
            <tr>
                <td>${elm["id"]}</td>
                <td>${elm["title"]}</td>
                <td>${elm["user_id"]}</td>
                <td>${elm["user_name"]}</td>
                <td>${elm["termination_date"]}</td>
                <td>${elm["left_time"]}</td>
                <td class="d-flex justify-content-center"><a class="btn btn-success" href="#"><i class="fa fa-arrow-circle-left"></i> Valider</a></td>
            </tr>
        `;
  });
  tableBody.innerHTML = output;
}

/**
 * 
 * Display books should be given back and late
 * @param {array} data 
 * 
 */

function booksLate(data) {
  title.innerHTML = "En retard";  
  let output = `
      <thead>
          <tr>
              <th>Id</th>
              <th>Titre</th>
              <th>Id D'emprunteur</th>
              <th>Nom et prénom</th>
              <th>Date de reteur</th>
              <th>Duree</th>
              <th  class="d-flex justify-content-center">Decesion</th>
          </tr>
      </thead>
    `;

  data.forEach((elm) => {
    output += `
            <tr>
                <td>${elm["id"]}</td>
                <td>${elm["title"]}</td>
                <td>${elm["user_id"]}</td>
                <td>${elm["user_name"]}</td>
                <td>${elm["termination_date"]}</td>
                <td>${elm["duration_late"]}</td>
                <td class="d-flex justify-content-center"><a class="btn" href="#"><i class="fa fa-envelope mx-2"></i></a>  <a href="#" class="btn"> <i class="fa fa-phone-alt mx-2"></i></a></td>           
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

window.onload = getData("http://127.0.0.1/gbests/books/togive", toGive);





// Click event
document.querySelector('.search-submit').addEventListener('click',()=>{
    
  // Get input values
  let filterValue = filterInput.value;
  let selectValue = selectOption.value;

  // Check if input is empty or all optios is selected
  if(filterValue === '' || selectValue == 'all'){
      getData('http://localhost/gbests/books/toGive',toGive);
  }else{
      let urlParams = `${selectValue}/${filterValue}`;
      // Load and display data
      getData('http://localhost/gbests/books/toGive/'+urlParams,toGive);
  }
});
