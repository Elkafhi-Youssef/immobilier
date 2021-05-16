import { getData } from "./request.js";

/**
 * Elements
 */

const tableBody = document.querySelector(".table_body");
const giveBtn = document.getElementById("to_give");
const giveBackBtn = document.getElementById("to_give_back");
const lateBtn = document.getElementById("late");

/**
 * 
 * Class data
 * 
 */
class Data{
    
}
// display to give books
function toGive(data) {
  document.querySelector('#title').innerHTML = "A donner";  
  let output = `
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Authuer</th>
                <th>Commande par</th>
                <th>Date</th>
                <th  class="d-flex justify-content-center">Decesion</th>
            </tr>
        </thead>
    `;
  data.forEach((elm) => {
    output += `
            <tr>
                <td>${elm["id"]}</td>
                <td>${elm["title"]}</td>
                <td>${elm["author"]}</td>
                <td>${elm["orderedby"]}</td>
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
 * Event listeners
 *
 */

window.onload = getData("http://127.0.0.1/gbests/books/togive", toGive);
giveBtn.addEventListener("click", () => {
  getData("http://127.0.0.1/gbests/books/togive", toGive);
});
