/**
 * Created by Lshare on 2017/2/7.
 */
angular.module('phonecatServices', ['ngResource'])
    .factory('Phone', function ($resource) {
        return $resource('phones/:phoneId.json', {}, {
            query: {method: 'GET', params: {phoneId: 'phones'}, isArray: true}
        });
    });