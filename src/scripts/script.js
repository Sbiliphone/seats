var arrayBar = new Array();
var app = angular.module('app', []);
console.log("ciao");

app.controller('ctrl1', function ($scope){
    $.get(
        '../src/controller/updateBar.php',
        function( data ) {
            arrayBar = JSON.parse(data);
            $scope.$apply(function() {
                $scope.bars = arrayBar;
                console.log(arrayBar);
                $scope.filterCondition = {
                    nome: 'Name'
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
        console.log(item);
        location.href = 'index.php?bar='+item;
    }

});