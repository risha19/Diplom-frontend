<?php
// include_once 'main.php';

$catalogs = ['dino', 'muppets', 'bemby'];

$catalog = 'dino';

if (!empty($_GET['catalog']) && in_array($_GET['catalog'], $catalogs, true)) {
    $catalog = $_GET['catalog'];
}
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Игра "Пазлы"</title>
        <style>
            body {
                background-image: url("https://cdn.pixabay.com/photo/2016/09/01/19/13/confetti-1637197_960_720.jpg");
                opacity: 1;

            }
            h1 {
                text-align: center;
                background-color: white;

            }
            .card {
                width: 130px;
                height: 100px;
                display: inline-block;
                cursor: pointer;
                opacity: none;
                /*position:absolute*/
            }
            .cards {
                width: 400px;
            }
            .box {
                width: 660px;
                height: 405px;
                border: 2px solid grey;

                background-color: white;

            }
            div {
                display: inline-block;

            }
            div[class*="col"] {
                height: 100px;
                width: 130px;
                /*background-color: darkseagreen;*/
                border-left: 0.1px solid lavender;
                border-bottom: 0.1px solid lavender;
                /*box-sizing: border-box;*/
                color: green;
                text-align: center;
                padding: 0;
            }

            .flex-container {
                display: flex;
            }
            img.dino {
                height: 200px;
                width: 310px;

            }
            div.dino {
                width: 100%;
                padding-left:20%;
            }

            div.lpart {
                width: 40%;
                min-width: 135px;
                float:left;
            }

            div.rpart {
                padding-top: 10px;
                padding-left: 50px;
                width: 60%;
            }
            .header {
                padding-left: 15%;

            }

            .btn {
                width: 180px;

            }


        </style>
        <script>
            let catalog = '<?= $catalog; ?>';
        </script>
    </head>
    <body>

        <div class="lpart flex-container">  
            <div class="cards mt-2">
            </div>

            <div>
                <button type="button" class="btn one btn-success mt-2">Начать заново</button>

                <p><a href="main.php" class="btn btn2 btn-info mt-2">Выбрать другую картинку </a></p>

            </div>



        </div>
        <div class="rpart">
            <div class="header">
                <h1>Собери пазл-картинку</h1>
            </div>
            <div class="box container">
                <div class="row ">
                    <div class="col a1"></div>
                    <div class="col a2"></div>
                    <div class="col a3"></div>
                    <div class="col a4"></div>
                    <div class="col a5"></div>
                </div>
                <div class="row two">
                    <div class="col a6"></div>
                    <div class="col a7"></div>
                    <div class="col a8"></div>
                    <div class="col a9"></div>
                    <div class="col a10"></div>
                </div>
                <div class="row three">
                    <div class="col a11"></div>
                    <div class="col a12"></div>
                    <div class="col a13"></div>
                    <div class="col a14"></div>
                    <div class="col a15"></div>
                </div>
                <div class="row four">
                    <div class="col a16"></div>
                    <div class="col a17"></div>
                    <div class="col a18"></div>
                    <div class="col a19"></div>
                    <div class="col a20"></div>
                </div>


            </div>
            <div class="dino">
                <img class="dino mt-5"  src="/EDUCATION/testDiplom/images/<?= $catalog; ?>/full.jpg">
            </div>

        </div>


        <!--<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="indexTest.js"></script>
    </body>
</html>













