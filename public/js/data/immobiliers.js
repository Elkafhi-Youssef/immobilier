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

function displayImmo(immos) {
    let outputBuffer = '';
    if (immos.length > 0) {
        immos.forEach(immo => {
            outputBuffer+=`
            <tr>
                <td>${immo['type_immobilier']}</td>
                <td>${immo['type_operation']}</td>
                <td>${immo['adresse']}</td>
                <td>${immo['prix']}DH </td>
                <td>${immo['surface']}m</td>
                <td><a href="http://localhost/mvcstage/immobiliers/delete/${immo['id_immobilier']}" class="btn  btn-outline-danger mr-2">Sup</a><a href="http://localhost/mvcstage/immobiliers/editImmobilier/${immo['id_immobilier']}" class="btn  btn-outline-success">Modifier</a></td>
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
window.onload = getData('http://localhost/mvcstage/immobiliers/getAllImmobilier',displayImmo);

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
