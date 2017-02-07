/**
 * Created by Lshare on 2017/2/7.
 */
//变量前带"$"前缀的是AngularJS内建服务
function PhoneListCtrl($scope) {
    $scope.phones = [
        {"name": "Nuxus S", "snippet": "Fast just got faster with Nexus S."},
        {"name": "MI", "snippet": "Good phone."},
        {"name": "HUAWEI", "snippet": "so so"}
    ];
}

function PhoneListCtrl2($scope) {
    $scope.phones = [
        {"name": "Nuxus S", "snippet": "Fast just got faster with Nexus S.", "age": 0},
        {"name": "MI", "snippet": "Good phone.", "age": 300},
        {"name": "HUAWEI", "snippet": "so so", "age": 3}
    ];
    $scope.orderProp = 'age';
}

function PhoneListCtrl3($scope, $http) {
    $http.get('phones/phones.json').success(function (data) {
        // $scope.phones = data;
        $scope.phones = data.splice(0, 5);
    });
    $scope.orderProp = 'age';
}
/*AngularJS是通过控制器构造函数的参数名字来推断依赖服务名称的,
 进行JS压缩的时候要避免一些全局性的参数被压缩。*/
//解决压缩问题的方式一
PhoneListCtrl3.$inject = ['$scope', '$http'];

//解决压缩问题的方式二
// var PhoneListCtrl3 = [
//     '$scope', '$http', function ($scope, $http) {
//         $http.get('phones/phones.json').success(function (data) {
//             $scope.phones = data;
//         });
//         $scope.orderProp = 'age';
//     }
// ];

function PhoneListCtroller($scope, $http) {
    $http.get('phones/phones.json').success(function (data) {
        // $scope.phones = data;
        $scope.phones = data.splice(0, 5);
    });
    $scope.orderProp = 'age';
}
//RESTFull版本
// function PhoneListCtroller($scope, $http) {
//     $scope.phones = Phone.query();
//     $scope.orderProp = 'age';
// }

function PhoneDetailCtroller($scope, $routeParams) {
    $scope.phoneId = $routeParams.phoneId;
}

//用于更多模板以后的部分
function PhoneDetailsCtrl($scope, $routeParams, $http) {
    $http.get('phones/' + $routeParams.phoneId + '.json').success(function (data) {
        $scope.phone = data;
        $scope.mainImageUrl = data.images[0];
    });
    //RESTFull版本
    // $scope.phone = Phone.get({phoneId: $routeParams.phoneId}, function (phone) {
    //     $scope.mainImageUrl = phone.images[0];
    // });

    $scope.setImage = function (imageUrl) {
        $scope.mainImageUrl = imageUrl;
    };
    $scope.hello = function (name) {
        alert("Hello " + (name || 'world') + "!");
    }
}