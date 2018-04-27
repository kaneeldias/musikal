<div ng-controller="searchController" layout="column">

    <link rel='stylesheet' type='text/css' href="<?php echo base_url("assets/css/search.css")?>">


    <div id="searchFrom" layout="row" layout-align="center center">
        <input ng-model="artist" name="artist" type="text" placeholder="Artist"/>
        <input ng-model="title" name="title" type="text" placeholder="Title"/>
        <input class="btn" type="submit" ng-click="submit()" value="Search"/>
    </div>

    <div id="results" layout="row" layout-align="stretch stretch" ng-show="searched">

        <div class="imp_text" ng-show="results.length == 0 && !loading" layout="column" layout-align="center center" flex>
            NO RESULTS
        </div>

        <div ng-show="loading" class="imp_text" layout="column" layout-align="center center" flex>
            LOADING...
        </div>

        <div layout="row" layout-align="stretch stretch" ng-hide="results.length == 0 || loading" layout-wrap flex>
            <!--<div ng-click="open_panel(result.id)" class="result" ng-repeat="result in results" layout="column">
                <div class="result_title result_info">{{result.title}}</div>
                <div class="result_artist result_info">{{result.artists.join(", ");}}</div>
                <div class="result_album result_info">{{result.album}}</div>
                <div class="result_album result_info">{{result.date}}</div>
            </div>-->

            <table cellspacing="0" id="result_table" flex>
                <tr class="table_header">
                    <td>Title</td>
                    <td>Artists</td>
                    <td>Album</td>
                    <td style="width:50px;">Released</td>
                    <td style="width:50px;">Length</td>
                </tr>
                <tr ng-repeat="result in results | orderBy: 'date'" class="table_info" ng-click="open_panel(result.title, result.artists[0] ,result.id)">
                    <td>{{ result.title }}</td>
                    <td>{{ result.artists.join(", ") }}</td>
                    <td>{{ result.album }}</td>
                    <td>{{ result.date }}</td>
                    <td>{{ result.length }}</td>
                </tr>
            </table>

        </div>

    </div>

</div>
