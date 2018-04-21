<div id="panel" ng-controller="panelController">

    <script type="text/javascript" src="<?php echo base_url("assets/scripts/ng-controllers/viewSongController.js")?>"></script>
    <link rel='stylesheet' type='text/css' href="<?php echo base_url("assets/css/panel.css")?>">

    <div id="panel_close" ng-click="close()">
        X
    </div>

    <div id="panel_info" layout="row">
        <div id="panel_album_art" style="width:250px; height:250px; background-color:#999999;">

        </div>
        <div layout="column" layout-align="center start">
            <div class="panel_info_c" style="font-size:40px; font-weight:bold;">{{info.title}}</div>
            <div class="panel_info_c">{{info.artists.join(", ");}}</div>
            <div class="panel_info_c">{{info.album}}</div>
            <div class="panel_info_c">{{info.date}}</div>
        </div>
    </div>
</div>
