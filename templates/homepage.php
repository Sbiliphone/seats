<?php
require('../templates/header.php');
require('../templates/menu.php');
?>


    <body ng-app="app">
    <div ng-controller="ctrl1" class="container"><br>
        <div class=".col-md-6 .col-md-offset-3"><input type="text" id="barra-ricerca" onkeyup="ricerca()" placeholder="Cerca" class="form-control"></div><br>
        <div>
            <ul id="elenco" type="none">
                <li ng-repeat="bar in bars"><div class="d-flex"><div class="col-4" style="margin-top: 1%">{{bar.name}}</div><div class="col-4"><button ng-click="apriPagina(bar.id)" class="btn btn-secondary">More Info</button></div></div><hr></li>
            </ul>
        </div>
    </div>
    </body>

    <script src="../src/scripts/script.js"></script>
<?php
require('../templates/footer.php');
?>