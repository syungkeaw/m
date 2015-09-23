<?php 

$this->title = 'Search';
$this->params['breadcrumbs'][] = $this->title. ': "'.$query.'"';
$this->registerJsFile('@web/js/searchResult.js', ['depends' => [frontend\assets\AngularJsAsset::className()]]);
?>
<div class="row" ng-app="searchResult" ng-controller="searchResultCtrl">

	<div class="col-xs-12" style="padding-bottom: 20px;">
		Search: <input ng-model="moreFilter">
	</div>	

	<div class="grid-item col-xs-6 col-md-2 col-sm-3" ng-repeat="movie in movies | filter : moreFilter">
		<div class="thumbnail" style="height:100px">
			<img src="http://image.tmdb.org/t/p/w342/{{movie.poster_path}}" alt="poster-{{movie.originan_title}}">
			<div class="caption">
				<h3>{{movie.title}}</h3>
				<p>{{movie.snippet}}</p>
			</div>
		</div>
	</div>

    <!--div class="grid-item col-xs-6 col-md-2 col-sm-3" data-movie-id="3912"
    data-type="movie" data-url="/movies/xxx-2002">
        <a href="/movies/xxx-2002">
        <div class="poster">
            <img alt="Poster" class="base" src=
            "/assets/placeholders/thumb/poster-2d5709c1b640929ca1ab60137044b152.png">

            <img alt="Poster"
            class="real" data-original=
            "https://walter.trakt.us/images/movies/000/003/912/posters/thumb/1a245a838d.jpg"
            src=
            "https://walter.trakt.us/images/movies/000/003/912/posters/thumb/1a245a838d.jpg"
            style="display: block;">

            <div class="loading">
                <div class="icon">
                    <div class="fa fa-refresh fa-spin"></div>
                </div>
            </div>
        </div></a>

        <div class="quick-icons smaller">
            <div class="actions">
                <a class="watch">
                <div class="base"></div>

                <div class="trakt-icon-check-thick"></div></a><a class=
                "collect">
                <div class="base"></div>

                <div class="trakt-icon-collection-thick"></div></a><a class=
                "list">
                <div class="base"></div>

                <div class="trakt-icon-list-thick"></div></a>
            </div>

            <div class="metadata">
                <div class="percentage">
                    <div class="fa fa-heart rating-6"></div>65%
                </div>
            </div>
        </div><a class="titles-link" href="/movies/xxx-2002">
        <div class="titles">
            <h3>xXx</h3>

            <h4>Movie / 2002</h4>
        </div></a>
    </div-->
</div>

