<?php 

$this->title = 'Search';
$this->params['breadcrumbs'][] = $this->title. ': "'.$query.'"';
$this->registerJsFile('@web/js/searchResult.js', ['depends' => [frontend\assets\AngularJsAsset::className()]]);
$this->registercssFile('@web/css/searchResult.css');
?>
<div class="row" ng-app="searchResult" ng-controller="searchResultCtrl">
    <div class="col-xs-12" style="padding-bottom: 20px;">
        Filter: <input ng-model="moreFilter">
    </div> 
	<div class="col-xs-6 col-md-2 col-sm-3" ng-repeat="movie in movies | filter : moreFilter" ng-cloak>
        <a href="#">
            <div class="thumbnail">
                <div>                
                    <img class="img-responsive" ng-src="http://image.tmdb.org/t/p/w342{{movie.poster_path}}" onerror="this.src='http://biz.maxell.com/images_products/4/5067/en/No_images.jpg'" alt="poster-{{movie.originan_title}}">
                </div>
                 <div class="caption truncate">                                                
                    <p>{{movie.title}}</p>
                </div>
            </div>
        </a>
	</div>
    <div ng-hide="$root.initializing.status">Loading...</div>
</div>

