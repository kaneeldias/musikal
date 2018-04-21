<div id="viewSong" ng-controller="viewSongController">

    <link rel='stylesheet' type='text/css' href="<?php echo base_url("assets/css/viewSong.css")?>">

    <div id="info" layout="row">
        <div id="album_art" style="width:250px; height:250px; background-color:#577be7; border-radius:5px; background-size:cover;">

        </div>
        <div layout="column" layout-align="center start">
            <div class="info_c imp">{{info.title}}</div>
            <div class="info_c">{{info.artists.join(", ");}}</div>
            <div class="info_c linked" ng-click="view_album(info.album, info.album_id)">{{info.album}}</div>
            <div class="info_c">{{info.date}}</div>
        </div>
    </div>
</div>
