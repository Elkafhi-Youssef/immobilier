// import getData
import { getData } from "./request.js";

// Elements
const tableBody = document.querySelector('.table_body');
const filterInput = document.querySelector('.filter-input');
const selectOption = document.querySelector('.filter-option');
const alert = document.querySelector('.alert-no-data');
/**
 * Display books
 *
 * @param {array} books
 * @returns {void}
 *
 */

function displayBooks(clients) {
    let outputBuffer = '';
    if (clients.length > 0) {
        clients.forEach(client => {
            outputBuffer+=`
            <tr>
                <td>${client['CIN_client']}</td>
                <td>${client['nom_prenom']}</td>
                <td>${client['email']}</td>
                <td>${client['telephone']}</td>
                <td>${client['adresse']} </td>

                <td>img</td>
            </tr>`;
        });

    }else{
        outputBuffer+=`
        <tr>
        <td>---------</td>
        <td>---------</td>
        <td>---------</td>
        <td>---------</td>
        <td>---------</td>
        <td>---------</td>
        </tr>`;
    }
    tableBody.innerHTML = outputBuffer;
}

/** Event listeners */
// Window load
window.onload = getData('http://localhost/mvcstage/Clients/loadUsers',displayBooks);

// Click event
// document.querySelector('.search-submit').addEventListener('click',()=>{

//     // Get input values
//     let filterValue = filterInput.value;
//     let selectValue = selectOption.value;

//     // Check if input is empty or all optios is selected
//     if(filterValue === '' || selectValue == 'all'){
//         getData('http://localhost/gbests/books/getBooksList',displayBooks);
//     }else{
//         let urlParams = `${selectValue}/${filterValue}`;
//         // Load and display data
//         getData('http://localhost/gbests/books/getBooksList/'+urlParams,displayBooks);
//     }
// });
