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

function displayBooks(books) {
    let outputBuffer = '';
    if (books.length > 0) {
        books.forEach(book => {
            outputBuffer+=`
            <tr>
                <td>${book['type_immobilier']}</td>
                <td>${book['type_operation']}</td>
                <td>${book['adresse']}</td>
                
                <td>${book['prix']}DH </td>
                <td>${book['surface']}m</td>
                <td><a href="http://localhost/mvcstage/immobiliers/delete/${book['id_immobilier']}" class="btn  btn-outline-danger mr-2">Sup</a><a href="http://localhost/mvcstage/immobiliers/editImmobilier/${book['id_immobilier']}" class="btn  btn-outline-success">Modifier</a></td>
               
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
window.onload = getData('http://localhost/mvcstage/immobiliers/getAllImmobilier',displayBooks);

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
