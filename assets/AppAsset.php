<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'vendor/bootstrap/css/bootstrap.min.css?v=3.3.7',
        'vendor/calendar/css/calendar.css',
    ];
    public $js = [
        'vendor/jQuery/js/jquery.min.js?v=1.12.4',
        'vendor/bootstrap/js/bootstrap.min.js?v=3.3.7',
        'vendor/calendar/js/calendar.js',
        'js/command.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
