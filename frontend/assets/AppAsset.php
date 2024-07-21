<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap',
        'frontend/img/favicon.ico',
        'https://fonts.googleapis.com',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        'frontend/lib/animate/animate.min.css',
        'frontend/lib/owlcarousel/assets/owl.carousel.min.css',
        'frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css',
        'frontend/css/bootstrap.min.css',
        'frontend/css/style.css',
        'css/site.css',
    ];
    public $js = [
        'https://code.jquery.com/jquery-3.4.1.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
        'frontend/lib/wow/wow.min.js',
        'frontend/lib/easing/easing.min.js',
        'frontend/lib/waypoints/waypoints.min.js',
        'frontend/lib/counterup/counterup.min.js',
        'frontend/lib/owlcarousel/owl.carousel.min.js',
        'frontend/lib/tempusdominus/js/moment.min.js',
        'frontend/lib/tempusdominus/js/moment-timezone.min.js',
        'frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js',
        'frontend/js/main.js',
        'https://kit.fontawesome.com/59ba3b5196.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
