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

function displayRendezs(Rendezs) {
    let outputBuffer = '';
    if (Rendezs.length > 0) {
        Rendezs.forEach(rendez => {
            outputBuffer+=`
            <tr>
                <td>${rendez['id_demande']}</td>
                <td>${rendez['type_immobilier']}</td>
                <td>${rendez['nom_prenom']}</td>
                <td>${rendez['date_visite']}${rendez['temps_visite']}</td>
                <td class="d-flex justify-content-center">
                <a href="http://localhost/mvcstage/Rendezs/deleteRendez/${rendez['id_rendezvous']}" class="btn  btn-outline-danger mr-2">Sup</a>
                    <a class="btn btn-success" href="http://localhost/mvcstage/Rendezs/addRendez"
                        >Valider<i class="fa fa-arrow-alt-circle-right"></i>
                    </a>
                </td

              
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
        </tr>`;
    }
    tableBody.innerHTML = outputBuffer;
}

/** Event listeners */
// Window load
window.onload = getData('http://localhost/mvcstage/Rendezs/getAllRendez',displayRendezs);

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
