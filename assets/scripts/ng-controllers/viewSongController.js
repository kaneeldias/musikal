app.controller("viewSongController", function($scope, $http, $location) {

    $scope.view_id = "";
    $scope.loading = false;

    $scope.info = {
        title: "",
        artists: [],
        album: "",
        album_id: "",
        date: ""
    };

    $scope.view_artist = function(artist, artist_id){
        $location.path('/artist/'+artist.replace(/\ /g, '_')).search({id:artist_id});
    };

    $scope.view_album = function(album, album_id){
        $location.path('/album/'+album.replace(/\ /g, '_')).search({id:album_id});
    };

    var init = function () {
        $scope.view_id = $location.search().id;
        $http({
            method: 'POST',
            url: '/Musikal/search/recording',
            data:{
                id:$scope.view_id
            }
        }).then(function successCallback(response) {
            var results = response.data;
            $scope.info.title = results.title;
            $scope.info.artists = results.artists;
            $scope.info.album = results.album;
            $scope.info.album_id = results.album_id;
            $scope.info.date = results.date;
            $scope.loadAlbumArt();
        }, function errorCallback(response) {
        });

    };

    $scope.loadAlbumArt = function(){
        $http({
            method: 'POST',
            url: '/Musikal/AlbumArt',
            data:{
                id:$scope.info.album_id
            }
        }).then(function successCallback(response) {
            var results = response.data;
            $('#album_art').css('background-image','url('+results.url+')');
        }, function errorCallback(response) {
        });
    }

    init();

    /*$scope.$on('open_panel', function(event, id) {
        $scope.loading = true;
        $scope.view_id = id;
        console.log(id);

        $http({
            method: 'POST',
            url: '/Musikal/search/recording',
            data:{
                id:$scope.view_id
            }
        }).then(function successCallback(response) {
            var results = response.data;
            $scope.info.title = results.title;
            $scope.info.artists = results.artists;
            $scope.info.album = results.album;
            $scope.info.date = results.date;
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

        $scope.open();

    });*/


});
