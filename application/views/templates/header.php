<!doctype html>
<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Musikal</title>
</head>
<body ng-app="BlankApp" ng-cloak>


<script type="text/javascript">
    var app =  angular.module('BlankApp', ['ngMaterial', 'ngRoute']);
</script>

<style>
    body{
        background-color: #4867c0;
    }

    #content{
        background-color: #4867c0;
    }
</style>
<div layout="column" style="min-height:100%;">

    <div id="header">
        <a style="color:#FFFFFF; text-decoration:none;" href="<?php echo base_url("/#/")?>">Musi<span style="color:#F4D03F">k</span>al</a>

        <style>
            #header{
                font-size:40px;
                color:white;
                background-color:#3A539B;
                padding:15px;
                font-weight:bold;
                letter-spacing:5px;
            }


            .imp_text{
                color:#F4D03F;
                font-size:30px
            }

        </style>

    </div>

    <div ng-view id="content" layout="column" layout-align="stretch stretch" flex="100"></div>

    <script type="text/javascript" src="<?php echo base_url("assets/scripts/ng-controllers/searchController.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/scripts/ng-controllers/viewSongController.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/scripts/ng-controllers/viewAlbumController.js")?>"></script>

    <link rel='stylesheet' type='text/css' href="<?php echo base_url("assets/css/tables.css")?>">


    <script>
        app.config(function($routeProvider) {
            $routeProvider
                .when("/", {
                    templateUrl : "<?php echo base_url("search/index")?>"
                })
                .when("/search", {
                    templateUrl: '<?php echo base_url("search/index")?>'
                })
                .when("/song/:song_id", {
                    templateUrl: '<?php echo base_url("view/song")?>'
                })
                .when("/album/:album", {
                    templateUrl: '<?php echo base_url("view/album")?>'
                });

        });
    </script>


