app.controller("searchController", function($scope, $http, $rootScope, $location) {

    $scope.title = "sucks";
    $scope.artist = "dinithi";

    $scope.searched = false;
    $scope.loading = false;

    $scope.results = [];

    $scope.search = function(){
        $scope.loading = true;
        $scope.results = [];
        $scope.searched = true;
        $http({
            method: 'POST',
            url: '/Musikal/search',
            data:{
                artist:$scope.artist,
                title:$scope.title
            }
        }).then(function successCallback(response) {
            $scope.results = response.data;
            $scope.loading = false;
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
    };

    $scope.init = function(){
        var artist = $location.search().artist;
        var title = $location.search().title;
        if(artist != null && title != null){
            $scope.title = title;
            $scope.artist = artist;
            $scope.search();
            return;
        }

        if(artist != null){
            $scope.artist = artist;
            $scope.search();
            return;
        }

        if(title != null){
            $scope.title = title;
            $scope.search();
            return;
        }
    };

    $scope.init();

    $scope.submit = function(){
        $location.path('/search').search({artist: $scope.artist, title: $scope.title});
        $scope.search();
    };

    $scope.open_panel = function(artist, title, id){
        //$location.url($location.path());
        $location.path('/song/'+artist.replace(/\ /g, '_')+'-'+title.replace(/\ /g, '_')).search({id:id});
    };


});