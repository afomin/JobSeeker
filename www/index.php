<!doctype html>
<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="app/assets/styles/style.css"/>
</head>

<body data-ng-app="jobSeekerApp" data-ng-controller="DemoController">

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Job Seeker</h3>
                    <nav class="nav nav-masthead">

                        <!-- NAVIGATION -->
                        <a class="nav-link" ui-sref="login" ui-sref-active="active">Login/Register</a>
                        <a class="nav-link" ui-sref="taskList" ui-sref-active="active">Active tasks</a>
                        <!--						<a class="nav-link" ui-sref="myTasksCustomer" ui-sref-active="active">My Tasks</a>-->
                        <!--						<a class="nav-link" ui-sref="myTasksExecutor" ui-sref-active="active">My Tasks</a>-->


                    </nav>
                </div>
            </div>

            <div class="inner cover">

                <!-- UI_VIEW -->
                <ui-view>
                    <div ui-view></div>
                </ui-view>


            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Just a simple test task. No rights reserved.</p>
                </div>
            </div>

        </div>

    </div>

</div>

<ul>


</ul>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
<script src="https://unpkg.com/@uirouter/angularjs/release/angular-ui-router.js"></script>
<script src="app/app.js"></script>

</body>

</html>