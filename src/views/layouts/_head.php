<?php

/**
 * Head layout.
 */
use hiqdev\themes\adminlte\MainAsset;
use yii\helpers\Html;
use yii\helpers\Url;

Yii::$app->themeManager->registerAssets();
MainAsset::register($this);

// Collapse Side bar
$this->registerJs(<<<'JS'
$(".sidebar-toggle").on("click", function() {
    var collapsed_sidebar = $('body').hasClass('sidebar-collapse') ? 0 : 1;
    $.post( "/thememanager/settings/collapsed-sidebar", {collapsed_sidebar: collapsed_sidebar});
});
$(document).on('click', 'a[data-toggle="control-sidebar"]', function(event) {
    $.get( "/thememanager/settings", function( data ) {
        $( ".control-sidebar-content" ).html( data );
    });
    $( this ).off( event );
});
JS
);
?>
<title><?= Html::encode($this->title) ?></title>
<?= Html::csrfMetaTags() ?>

<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta rel="canonical" href="<?= Url::canonical() ?>"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?= $this->theme->favicon() ?>
<?php $this->head() ?>
