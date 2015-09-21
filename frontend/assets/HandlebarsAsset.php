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
class HandlebarsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/components';
    public $css = [
    ];
    public $js = [
        'handlebars.js/handlebars.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
