angular.module('searchResult', [])

.factory('$qStr', function() {
    return function(name){
    	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
	        results = regex.exec(location.search);
	    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));   
	}
})

.controller('searchResultCtrl', function ($scope, $http, $qStr) {
	$http.get('http://api.themoviedb.org/3/search/movie?api_key=3d197569c7f13f60d61a7d61d5c83427&language=th&query='+$qStr('query'))
	.success(function(data) {
		$scope.movies = data.results;
	});
});


