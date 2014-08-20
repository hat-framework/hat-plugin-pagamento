
angular.module("pag", ["ngRoute"]).config(['$routeProvider',
    function ($routeProvider) {
        
         var url = window.location.host;
         
        $routeProvider.
            when('/gerenciadordeinvestimentos', {
                templateUrl: 'http://' +  url + '/plugins/pagamento/produto/views/app/gerenciadordeinvestimentos.phtml'
            }).
            when('/analisedeinvestimentos', {
                templateUrl: 'http://' +  url + '/plugins/pagamento/produto/views/app/analisedeinvestimentos.phtml'
            }).
            otherwise({
                redirectTo: '/gerenciadordeinvestimentos'
            });
    }])