let jobSeekerApp = angular.module('jobSeekerApp', ['ui.router']);

jobSeekerApp.config(function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/');

    let loginState = {
        name: 'login',
        url: '/login',
        templateUrl: 'app/views/login.html'
    };

    let registerState = {
        name: 'register',
        url: '/register',
        controller: 'registerController',
        templateUrl: 'app/views/register.html'
    };

    let taskListState = {
        name: 'taskList',
        url: '/',
        templateUrl: 'app/views/taskList.html'
    };

    $stateProvider.state(loginState);
    $stateProvider.state(registerState);
    $stateProvider.state(taskListState);


});

jobSeekerApp.factory('factoryname', function () {
    return {
        insertData: function ($scope, $http) {
            var json_data = JSON.stringify($scope.formData);


            $http.post($scope.formSubmitUrl, json_data, {
                withCredentials: true,
                headers: {'Content-Type': 'application/json'},
                transformRequest: angular.identity
            }).then(function (success) {
                console.log(success);
            });
        }
    }
});

jobSeekerApp.controller('authController', ['$scope', '$http', '$rootScope', 'factoryname', function ($scope, $http, $rootScope, factoryname) {

    $scope.registerNewUser = function () {
        $scope.formSubmitUrl = "app/actions/register.php"
        $scope.formFactory = factoryname.insertData($scope, $http);

    };
    $scope.login = function () {
        $scope.formSubmitUrl = "app/actions/login.php"
        $scope.formFactory = factoryname.insertData($scope, $http);

    }
}]);