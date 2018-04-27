<div id="viewSong" ng-controller="viewAlbumController">

    <link rel='stylesheet' type='text/css' href="<?php echo base_url("assets/css/viewSong.css")?>">

    <div id="info" layout="row">
        <div id="album_art" style="width:250px; height:250px; background-color:#577be7; border-radius:5px; background-size:cover;">

        </div>
        <div layout="column" layout-align="center start">
            <div class="info_c imp" ng-click="view_album(info.album, info.album_id)">{{info.album}}</div>
            <div class="info_c">{{info.artists.join(", ");}}</div>
            <div class="info_c">{{info.date}}</div>
        </div>
    </div>

    <div id="second" layout-align="stretch stretch" layout="column" style="margin:20px;">

        <div class="imp_text" ng-show="songs.length == 0" layout="column" layout-align="center center" flex>
            Loading songs list...
        </div>

        <table cellspacing="0" id="result_table" ng-hide="songs.length == 0" flex>
            <tr class="table_header">
                <td style="width:25px;"></td>
                <td>Title</td>
                <td>Artists</td>
                <td style="width:50px;">Length</td>
            </tr>
            <tr ng-repeat="song in songs" class="table_info" ng-click="viewSong(song.artists[0], song.title, song.id)">
                <td style="width:25px;">{{ song.track_no }}</td>
                <td>{{ song.title }}</td>
                <td>{{ song.artists.join(", ") }}</td>
                <td style="width:50px;">{{ song.length }}</td>
            </tr>
        </table>
    </div>

</div>
