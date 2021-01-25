<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Изменение документа  </title> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato&family=Lobster&display=swap');

            body {
                background-image: url("https://cdn.pixabay.com/photo/2016/09/01/19/13/confetti-1637197_960_720.jpg");
            }
            h2 {
                text-align: center;
                background-color: white;
                margin: 15px;
                font-size: 38px;
                text-transform: uppercase;
                text-decoration: underline;
                font-family: 'Lobster', cursive;
                word-spacing: 4pt;
            }
            .flex-container {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                padding: 10px;
            }
            .card {

                border: 1px solid silver;
                height: 200px;
                width: 300px;

            }
            p {
                margin: 10px;
                text-align: center;
            }

            input {
                background-color: green;
                padding: 5px;
                color: white;
                border-radius: 5px;
                margin: 15px; 
            }
            div>h2 {
                margin-left: 27%; 
                text-align: center;
                width: 50%;
            }



        </style>
    </head>
    <body>
        <div>  
            
            <h2>выбери картинку и начни игру! </h2>
        </div>

        <div class="flex-container">

        </div>
        <script>
            let imagePath = "/EDUCATION/testDiplom/images/";
            let catalogs = ["dino","muppets", "bemby"];
            createRows(imagePath, catalogs);
            function createRows(imagePath, catalogs) {

                let div = document.querySelector(".flex-container");
                for (let elem of catalogs) {
                    let row = document.createElement("p");
                    row.innerHTML = `
                  <div class="picture">
                    <p><img class="card" src="${imagePath}${elem}/full.jpg" alt=""></p>
                    <input type="button" onclick="window.location.href = '/EDUCATION/testDiplom/indexTest.php?catalog=${elem}';" value="Собери пазл!"> 
                 </div>    
                `;
                    div.append(row);
                  
                }
                
            }

        </script>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>


