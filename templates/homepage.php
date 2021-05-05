<?php
require('../templates/header.php');
?>

<?php
require('../templates/menu.php');
?>


<body ng-app="app">
    <div ng-controller="ctrl1">
        <div class=".col-md-6 .col-md-offset-3"><input type="text" id="barra-ricerca" onkeyup="ricerca()" placeholder="Cerca"></div>
        <div>
            <ul id="elenco" type="none">
                <li ng-repeat="bar in bars"><div class=".col-md-6">{{bar.Name}}</div><div class=".col-md-6"><button onclick="apriPagina()" class="btn btn-secondary">More Info</button></div><hr></li>
            </ul>
        </div>
    </div>
    </body>
    <script src="../scripts/script.js"></script>
<?php
require('../templates/footer.php');
?>