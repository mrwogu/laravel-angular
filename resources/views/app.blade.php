<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zrób APP</title>

    <link href="<% elixir('css/app.css') %>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-app="app" layout="column" ng-controller="mainCtrl">

<md-toolbar layout="row" layout-align="center">
    <md-button class="menu" hide-gt-sm ng-click="toggleTodo()" aria-label="Show todo groups">
        <md-icon md-svg-icon="menu"></md-icon>
    </md-button>
    <h3>Zrób APP</h3>
</md-toolbar>

<div layout="row" flex>
    <md-sidenav class="site-sidenav md-sidenav-left md-whiteframe-z2"
                md-component-id="left"
                ng-click="toggleTodo()" aria-label="Show User List"
                md-is-locked-open="$mdMedia('gt-sm')">

        <md-toolbar>
            <div class="md-toolbar-tools">
                <h2>
                    <span>Menu główne</span>
                </h2>
                <span flex></span>
            </div>
        </md-toolbar>

        <md-list flex>
            <md-list-item class="md-3-line" ng-click="showAlert($event)">
                <div class="md-list-item-text" layout="column">
                    <h3>Zaloguj się</h3>
                </div>
            </md-list-item>
            <md-list-item class="md-3-line" ng-click="showAlert($event)">
                <div class="md-list-item-text" layout="column">
                    <h3>Opcje</h3>
                </div>
            </md-list-item>
            <md-subheader class="md-no-sticky">Kategorie</md-subheader>
            <md-list-item class="md-3-line" ng-click="showAlert($event)">
                <div class="md-list-item-text" layout="column">
                    <h3>Inspiracje</h3>
                </div>
            </md-list-item>
            <md-list-item class="md-3-line" ng-click="showAlert($event)">
                <div class="md-list-item-text" layout="column">
                    <h3>Osobiste</h3>
                </div>
            </md-list-item>
        </md-list>

    </md-sidenav>

    <ng-view flex class="md-padding"></ng-view>
</div>
<!-- Scripts -->
<script src="<% elixir('js/all.js') %>"></script>
</body>
</html>
