<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class NavSearchAsset extends AssetBundle
{
    public $basePath = '@webroot/';
    public $baseUrl = '@web/';
    public $css = [
    	'css/navSearch.css',
    ];
    public $js = [
        'js/navSearch.js',
    ];
    public $depends = [
    	// 'yii\web\JqueryAsset',
        'frontend\assets\JqueryAsset',
        'frontend\assets\HandlebarsAsset',
        'frontend\assets\TypeaheadAsset',
    ];
}