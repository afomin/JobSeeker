let jobSeekerApp = angular.module('jobSeekerApp', ['ui.router']);

jobSeekerApp.config(function ($stateProvider, $urlRouterProvider) {

    let loginState = {
        name: 'login',
        url: '/login',
        component: 'login'
    };

    var taskListState = {
        name: 'taskList',
        url: '/',
        component: 'taskList'
    }

    $stateProvider.state(loginState);
    $stateProvider.state(taskListState);
    $urlRouterProvider.otherwise('/');

});

jobSeekerApp.state('portfolio', {
    url: '/portfolio',
    component: 'portfolio',
    resolve: {
        projects: function (PortfolioService) {
            return PortfolioService.findAll();
        }
    }
});

jobSeekerApp.component('portfolio', {
    bindings: {},

    controller: function (PROJECTS) {

        //define component's behavior here by linking methods and variables to this.
        // this.projects = PROJECTS;
        this.projects = [

            {name: "Project 1", description: "Project 1 description"},
            {name: "Project 2", description: "Project 2 description"},

        ];

        console.log(this.projects);
    },
    template: `
        <h1>Portfolio</h1>
        <div ng-repeat="project in $ctrl.projects"> 
            <h2 >

            </h2>
            <p>

            </p>
        </div>

    `
});

jobSeekerApp.constant('PROJECTS', [

    {name: "Project 1", description: "Project 1 description"},
    {name: "Project 2", description: "Project 2 description"},

]);
