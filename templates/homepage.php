<?php
require('../templates/header.php');
require('../templates/menu.php');
?>


<body ng-app="app">
    <div ng-controller="ctrl1">
        <div class=".col-md-6 .col-md-offset-3"><input type="text" id="barra-ricerca" onkeyup="ricerca()" placeholder="Cerca" class="form-control"></div>
        <div>
            <ul id="elenco" type="none">
                <li ng-repeat="bar in bars"><div class=".col-md-6">{{bar.Name}}</div><div class=".col-md-6"><button ng-click="apriPagina(bar.id)" class="btn btn-secondary">More Info</button></div><hr></li>
            </ul>
        </div>
    </div>
</body>

<script src="../src/scripts/script.js"></script>
<?php
require('../templates/footer.php');
?>