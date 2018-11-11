let jobSeekerApp = angular.module('jobSeekerApp', ['ui.router']);

jobSeekerApp.config(function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/');

    let loginState = {
        name: 'login',
        url: '/login',
        templateUrl: 'app/views/login.php'
    };

    let taskListState = {
        name: 'taskList',
        url: '/',
        templateUrl: 'app/views/taskList.php'
    };

    $stateProvider.state(loginState);
    $stateProvider.state(taskListState);


});

// .state('portfolio', {
//     url: '/portfolio',
//     component: 'portfolio',
//     resolve: {
//         projects: function (PortfolioService) {
//             return PortfolioService.findAll();
//         }
//     }
// })
//
// .component('portfolio', {
//     bindings: {},
//
//     controller: function (PROJECTS) {
//
//         //define component's behavior here by linking methods and variables to this.
//         // this.projects = PROJECTS;
//         this.projects = [
//
//             {name: "Project 1", description: "Project 1 description"},
//             {name: "Project 2", description: "Project 2 description"},
//
//         ];
//
//         console.log(this.projects);
//     },
//     template: `
//     <h1>Portfolio</h1>
//
// `
// });