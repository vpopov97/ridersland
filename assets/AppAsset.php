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
      //   'css/bootstrap.min.css',
  'css/font-awesome.min.css',
  'css/font-awesome.css',
  'js/fancybox/jquery.fancybox.css',
  'css/isotope.css',
  'css/style.css',
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
  
  //'js/bootstrap.min.js',
 'js/jquery.isotope.min.js',
  'js/fancybox/jquery.fancybox.pack.js',
  
  'js/functions.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
