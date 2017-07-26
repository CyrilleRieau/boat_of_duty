<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Bataille Navale</title>
    <script src="ajax.js"></script>
    <style>
        table {
            border: 1px solid black;
            height: 400px;
            width: 400px;
            margin: 0;
            padding: 0;
        }
        
        tr {
            border: 1px solid black;
            margin: 0;
            padding: 0;
        }
        
        td {
            margin: 0;
            padding: 0;
            height: 40px;
            width: 40px;
            text-align: center;
            size: 0.8em;
            border: 1px solid black;
        }
    </style>
</head>

<body class="container-fluid">
    <div class="row">
        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1 col-xl-5 col-xl-offset-1  grille1 ">
            <h1>Joueur 1</h1>
            <table class="table table-bordered" id="table1">
            </table>
        </div>
        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1 col-xl-5 col-xl-offset-1  grille2 ">
            <h1>Joueur 2</h1>
            <table class="table table-bordered" id="table2">
            </table>
        </div>
    </div>
    <script>
        makeTable({
            callback: function() {

                let table = document.querySelector('#table1');
                for (let i = 0; i < 10; i++) {
                    let row = document.createElement('tr');
                    table.appendChild(row);
                    for (let v = 0; v < 10; v++) {
                        let line = document.createElement('td');
                        row.appendChild(line);
                        line.innerHTML = i * 10 + (v + 1);
                        line.id = 'td'+(i * 10 + (v + 1));
                        /*if (line.innerHTML > 0 && line.innerHTML <= 10) {
                            line.style.backgroundColor = '#FFE3DD';
                        } else if (line.innerHTML > 10 && line.innerHTML <= 20) {
                            line.style.backgroundColor = '#F3BEB2';
                        } else if (line.innerHTML > 20 && line.innerHTML <= 30) {
                            line.style.backgroundColor = '#E8AA9C';
                        } else if (line.innerHTML > 30 && line.innerHTML <= 40) {
                            line.style.backgroundColor = '#E8E29C';
                        } else if (line.innerHTML > 40 && line.innerHTML <= 50) {
                            line.style.backgroundColor = '#EEE57C';
                        } else if (line.innerHTML > 50 && line.innerHTML <= 60) {
                            line.style.backgroundColor = '#BDF797';
                        } else if (line.innerHTML > 60 && line.innerHTML <= 70) {
                            line.style.backgroundColor = '#AFF8D7';
                        } else if (line.innerHTML > 70 && line.innerHTML <= 80) {
                            line.style.backgroundColor = '#AFD3F8';
                        } else if (line.innerHTML > 80 && line.innerHTML <= 90) {
                            line.style.backgroundColor = '#BBAFF8';
                        } else if (line.innerHTML > 90 && line.innerHTML <= 100) {
                            line.style.backgroundColor = '#F8AFF6';
                        }
*/
                    }
                }
            }
        });

        makeTable({
            callback: function() {

                let table = document.querySelector('#table2');
                for (let i = 0; i < 10; i++) {
                    let row = document.createElement('tr');
                    table.appendChild(row);
                    for (let v = 0; v < 10; v++) {
                        let line = document.createElement('td');
                        row.appendChild(line);
                        line.innerHTML = i * 10 + (v + 1);
  /*                      if (line.innerHTML > 0 && line.innerHTML <= 10) {
                            line.style.backgroundColor = '#FFE3DD';
                        } else if (line.innerHTML > 10 && line.innerHTML <= 20) {
                            line.style.backgroundColor = '#F3BEB2';
                        } else if (line.innerHTML > 20 && line.innerHTML <= 30) {
                            line.style.backgroundColor = '#E8AA9C';
                        } else if (line.innerHTML > 30 && line.innerHTML <= 40) {
                            line.style.backgroundColor = '#E8E29C';
                        } else if (line.innerHTML > 40 && line.innerHTML <= 50) {
                            line.style.backgroundColor = '#EEE57C';
                        } else if (line.innerHTML > 50 && line.innerHTML <= 60) {
                            line.style.backgroundColor = '#BDF797';
                        } else if (line.innerHTML > 60 && line.innerHTML <= 70) {
                            line.style.backgroundColor = '#AFF8D7';
                        } else if (line.innerHTML > 70 && line.innerHTML <= 80) {
                            line.style.backgroundColor = '#AFD3F8';
                        } else if (line.innerHTML > 80 && line.innerHTML <= 90) {
                            line.style.backgroundColor = '#BBAFF8';
                        } else if (line.innerHTML > 90 && line.innerHTML <= 100) {
                            line.style.backgroundColor = '#F8AFF6';
                        }
                    */}
                }
            }
        });

        //makeTable({
        //callback: function(){ 
         for (let i = 1; i<=100; i++) {
document.querySelector("#table1[tr[td"+i+"]]").addEventListener('click', function(){
    if (document.querySelector("tr> #td"+i).style.backgroundColor == 'red'){
        document.querySelector("tr> #td"+i).style.backgroundColor = null;
    } else {
        document.querySelector("tr> #td"+i).style.backgroundColor = 'red';
    }
});}
document.querySelector('#table2 tr>td').addEventListener('click', function(){
    if (document.querySelector('#table2 tr>td').style.backgroundColor == 'blue'){
        document.querySelector('#table2 tr>td').style.backgroundColor = null;
    } else {
        document.querySelector('#table2 tr>td').style.backgroundColor = 'blue';
    }
});
         //       }        })
    </script>
</body>

</html>