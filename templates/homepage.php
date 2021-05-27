<?php
require('../templates/header.php');
require('../templates/menu.php');
?>


    <body ng-app="app">
    <div style="position: relative; min-height: 100vh;">
        <div ng-controller="ctrl1" class="container" style="height: 100%; overflow: auto; padding-bottom: 10%;"><br>
            <div class=".col-md-6 .col-md-offset-3"><input type="text" id="barra-ricerca" onkeyup="ricerca()" placeholder="Cerca" class="form-control"></div><br>
            <div class="overflow-auto">
                <ul id="elenco" type="none">
                    <li ng-repeat="bar in bars">
                        <div class="d-flex">
                            <div class="col-4" style="margin-top: 1%; margin-right: -15%">{{bar.name}}</div>
                            <div class="col-2" style="margin-top: 1%">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{bar.percent}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{bar.used}}</div>
                                    </div>
                            </div>
                            <div class="col-4" style="padding-left: 9%"><button ng-click="apriPagina(bar.id)" class="btn btn-primary">More Info</button></div>
                        </div>
                        <hr>
                    </li>
                </ul>
            </div>
        </div>



    <script src="../src/scripts/angularApp.js">
    </script>
<?php
require('../templates/footer.php');
?>