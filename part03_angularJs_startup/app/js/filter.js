/**
 * Created by Lshare on 2017/2/7.
 */
angular.module('phonecatFilters', []).filter('checkmark', function () {
    return function (input) {
        return input ? '\u2713' : '\u2718';
    };
});