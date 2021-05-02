<?php
require('../templates/header.php');
?>

<?php
require('../templates/menu.php');
?>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body ng-app="app">
    <div ng-controller="ctrl1">
        <input type="text" id="barra-ricerca" onkeyup="ricerca()" placeholder="Cerca">
        <div class="contenitor">
            <ul id="elenco" type="none">
                <li ng-repeat="bar in bars"><div class="smallContenitor">{{bar.Name}}</div><div><button onclick="apriPagina()">More Info</button></div></li>
            </ul>
        </div>
    </div>
    </body>
    <script src="../script.js"></script>
<?php
require('../templates/footer.php');
?>