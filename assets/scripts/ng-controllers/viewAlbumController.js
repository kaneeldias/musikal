app.controller("viewAlbumController", function($scope, $http, $location) {

    $scope.loading = false;

    $scope.info = {
        artists: [],
        album: "",
        album_id: "",
        date: ""
    };

    $scope.songs = [];

    /*$scope.view_album = function(album, album_id){
        $location.path('/album/'+album.replace(/\ /g, '_')).search({album_id:album_id});
    };*/

    var init = function () {
        $scope.info.album_id = $location.search().id;
        $scope.loadAlbumArt();
        $scope.getSongs();
        $http({
            method: 'POST',
            url: '/Musikal/search/album',
            data:{
                id:$scope.info.album_id
            }
        }).then(function successCallback(response) {
            var results = response.data;
            $scope.info.artists = results.artists;
            $scope.info.album = results.album;
            $scope.info.date = results.date;
        }, function errorCallback(response) {
        });
    };

    $scope.getSongs = function(){
        console.log("Fuck");
        $http({
            method: 'POST',
            url: '/Musikal/Search/songsInAlbum',
            data:{
                id:$scope.info.album_id
            }
        }).then(function successCallback(response) {
            var results = response.data;
            $scope.songs = results;
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
    };

    $scope.viewSong = function(artist, title, id){
        //$location.url($location.path());
        $location.path('/song/'+artist.replace(/\ /g, '_')+'-'+title.replace(/\ /g, '_')).search({id:id});
    };

    $scope.view_artist = function(artist, artist_id){
        $location.path('/artist/'+artist.replace(/\ /g, '_')).search({id:artist_id});
    };

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
