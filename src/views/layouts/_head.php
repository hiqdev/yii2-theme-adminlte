<?php

/**
 * Head layout.
 */
use yii\helpers\Html;
use yii\helpers\Url;

Yii::$app->themeManager->registerAssets();

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

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta rel="canonical" href="<?= Url::canonical() ?>"/>
<?php $this->head() ?>
