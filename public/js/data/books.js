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
                <td>${book['ISBN']}</td>
                <td>${book['title']}</td>
                <td>Auteur</td>
                <td>Categorie</td>
                <td>12</td>
                <td>05</td>
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
window.onload = getData('http://localhost/gbests/books/getBooksList',displayBooks);

// Click event
document.querySelector('.search-submit').addEventListener('click',()=>{
    
    // Get input values
    let filterValue = filterInput.value;
    let selectValue = selectOption.value;

    // Check if input is empty or all optios is selected
    if(filterValue === '' || selectValue == 'all'){
        getData('http://localhost/gbests/books/getBooksList',displayBooks);
    }else{
        let urlParams = `${selectValue}/${filterValue}`;
        // Load and display data
        getData('http://localhost/gbests/books/getBooksList/'+urlParams,displayBooks);
    }
});
