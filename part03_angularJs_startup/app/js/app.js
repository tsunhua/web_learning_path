/**
 * Created by Lshare on 2017/2/7.
 */
angular.module("phonecat", ['phonecatFilters']).config([
    '$routeProvider', function ($routeProvider) {
        $routeProvider
            .when('/phones', {
                templateUrl: 'partials/phone-list.html', controller: PhoneListCtroller
            })
            //注意这里的:
            .when('/phones/:phoneId', {
                templateUrl: 'partials/phone-detail.html', controller: /*PhoneDetailCtroller*/PhoneDetailsCtrl
            })
            .otherwise({redirectTo: '/phones'});
    }
]);