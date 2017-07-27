/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function makeTable(num) {
    let table = document.querySelector('#table' + num);
    for (let i = 0; i < 10; i++) {
        let row = document.createElement('tr');
        table.appendChild(row);
        for (let v = 0; v < 10; v++) {
            let line = document.createElement('td');
            row.appendChild(line);
            line.innerHTML = i * 10 + (v + 1);
            line.id = 'td' + num + "_" + (i * 10 + (v + 1));
        }
    }
    ;
}
;

function position(num) {
    let td = document.querySelectorAll("#table" + num + " td");
    let tablepos = [];
//console.log(td);
    for (let i = 0; i < td.length; i++) {
        td[i].addEventListener('click', function (event) {
            event.preventDefault();
            if (td[i].style.backgroundColor == 'red') {
                td[i].style.backgroundColor = null;
            } else {
                td[i].style.backgroundColor = 'red';
                tablepos.push(td[i].id);
                console.log(tablepos);
            }
        });
    }
    ;
}
;


