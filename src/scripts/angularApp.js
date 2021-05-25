var arrayBar = new Array();
var app = angular.module('app', []);

app.controller('ctrl1', function ($scope){
    $.get(
        '../src/controller/getBarAngular.php',
        function( data ) {
            arrayBar = JSON.parse(data);
            $scope.$apply(function() {
                $scope.bars = arrayBar;
                console.log($scope.bars);
                for (i=0; i<$scope.bars.length; i++){
                    $scope.bars[i].percent = $scope.bars[i].used/$scope.bars[i].seats*100;
                }
                $scope.filterCondition = {
                    nome: 'Name',
                    seats: 'Seats'
                }
            });
        });

    ricerca = function () {
        var input;
        var filtro;
        var lista;
        var voci;
        var x;
        var i;
        var testo;
        input = document.getElementById("barra-ricerca");
        filtro = input.value.toUpperCase();
        lista = document.getElementById("elenco");
        voci = lista.getElementsByTagName("li");
        for (i = 0; i < voci.length; i++) {
            x = lista.getElementsByTagName("li")[i];
            testo = x.textContent || x.innerText;
            if (testo.toUpperCase().indexOf(filtro) > -1) {
                voci[i].style.display = "";
            } else {
                voci[i].style.display = "none";
            }
        }
    }

    $scope.apriPagina = function (item) {
        console.log('index.php?action=bar'+item);
        location.href = 'index.php?action=bar'+item;
    }

    function percentuale(item1, item2){
        return ciao;
    }

});var arrayBar = new Array();
var app = angular.module('app', []);

app.controller('ctrl1', function ($scope){
    $.get(
        '../src/controller/getBarAngular.php',
        function( data ) {
            arrayBar = JSON.parse(data);
            $scope.$apply(function() {
                $scope.bars = arrayBar;
                console.log($scope.bars);
                for (i=0; i<$scope.bars.length; i++){
                    $scope.bars[i].percent = $scope.bars[i].used/$scope.bars[i].seats*100;
                }
                $scope.filterCondition = {
                    nome: 'Name',
                    seats: 'Seats'
                }
            });
        });

    ricerca = function () {
        var input;
        var filtro;
        var lista;
        var voci;
        var x;
        var i;
        var testo;
        input = document.getElementById("barra-ricerca");
        filtro = input.value.toUpperCase();
        lista = document.getElementById("elenco");
        voci = lista.getElementsByTagName("li");
        for (i = 0; i < voci.length; i++) {
            x = lista.getElementsByTagName("li")[i];
            testo = x.textContent || x.innerText;
            if (testo.toUpperCase().indexOf(filtro) > -1) {
                voci[i].style.display = "";
            } else {
                voci[i].style.display = "none";
            }
        }
    }

    $scope.apriPagina = function (item) {
        console.log('index.php?action=bar'+item);
        location.href = 'index.php?action=bar'+item;
    }

    function percentuale(item1, item2){
        return ciao;
    }

});