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
 function getAllDemandes(Demandes) {
  let outputBuffer = '';
  if (Demandes.length > 0) {
    Demandes.forEach(Demande => {
          outputBuffer+=`
          <tr>
              <td>${Demande['nom_prenom']} </td>
              <td>${Demande['type_immobilier']}
                    <a class="btn-outline-success" href="http://localhost/mvcstage/Rendezs/addRendez/${Demande['id_demande']}"
                        >${Demande['id_immobilier']}<i class="fa fa-arrow-alt-circle-right"></i>
                    </a>
                </td>
              <td>${Demande['date_visite']} ${Demande['temps_visite']}</td>
              <td>........</td>
              <td class="d-flex justify-content-center">
                    <a class=" btn btn-success"  href="http://localhost/mvcstage/Rendezs/addRendez/${Demande['id_demande']}"
                        >Valider<i class="fa fa-arrow-alt-circle-right"></i>
                    </a>
                </td> 
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

/**
 * 
 * Display books should be given back
 * @param {array} data 
 * 
 */



/**
 *
 * Event listeners
 *
 */

window.onload = getData("http://127.0.0.1/mvcstage/Demandes/getAllDemandes", getAllDemandes);





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
