<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="<% asset('/css/app.css') %>" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body ng-app="app" layout="column" ng-controller="UserController as ul">
    <md-toolbar layout="row">
      <md-button class="menu" hide-gt-sm ng-click="ul.toggleList()" aria-label="Browse Users">
        <md-icon md-svg-icon="menu" ></md-icon>
      </md-button>
      <h3>Angular Material - Starter App</h3>
    </md-toolbar>

    <div flex layout="row">

        <md-sidenav md-component-id="left" md-is-locked-open="$mdMedia('gt-sm')" ng-click="ul.toggleList()" class="md-whiteframe-4dp" >
          <md-list>
            <md-list-item ng-repeat="u in ul.users">
                <md-button ng-click="ul.selectUser(u)" ng-class="{'selected' : u === ul.selected }" >
                  <md-icon md-svg-icon="{{u.avatar}}" class="avatar"></md-icon>
                  {{u.name}}
                </md-button>
            </md-list-item>
          </md-list>
        </md-sidenav>

        <md-content flex id="content">
          <md-icon md-svg-icon="{{ul.selected.avatar}}" class="avatar"></md-icon>
          <h2>{{ul.selected.name}}</h2>
          <p>{{ul.selected.content}}</p>

          <md-button class="share" md-no-ink ng-click="ul.makeContact(ul.selected)" aria-label="Share with {{ ul.selected.name }}">
            <md-icon md-svg-icon="share"></md-icon>
          </md-button>
        </md-content>

    </div>
	<!-- Scripts -->
	<script src="<% asset('/js/all.js') %>"></script>
</body>
</html>
