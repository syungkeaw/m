<?php 

$this->title = 'Search';
$this->params['breadcrumbs'][] = 'ค้นหา : "'.$query.'"';
$this->registerJsFile('@web/js/searchResult.js', ['depends' => [frontend\assets\AngularJsAsset::className()]]);
$this->registercssFile('@web/css/searchResult.css');
?>
<div ng-app="searchResult" ng-controller="searchResultCtrl">
    <div class="row">
        <div class="col-xs-12" style="padding-bottom: 20px;">
            <h4 ng-cloak>ผลลัพธ์ {{currentResult}}/{{totalResult}}</h4>
            Filter: <input ng-model="moreFilter">
        </div> 
    	<div class="col-xs-6 col-md-2 col-sm-3" ng-repeat="movie in movies | filter : moreFilter" ng-cloak>
            <a href="<?= Yii::$app->homeUrl.'movie/{{movie.id}}/{{movie.title_url}}' ?>">
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
    <div class="row" ng-show="$root.initializing.status" ng-cloak>
        <div class="col-xs-12 text-center">
            <button type="button" class="btn btn-default" ng-click="loadMore($event)" ng-hide="toggle">แสดงเพิ่ม</button>
        </div>
    </div>
</div>

