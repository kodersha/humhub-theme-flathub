<?php
use yii\helpers\Html;
?>
<?php if ($place == "topMenu") : ?>
    <?php if ($logo->hasImage()) : ?>
        <a class="navbar-brand image hidden-xs" href="<?php echo Yii::$app->homeUrl; ?>">
            <img src="<?php echo $logo->getUrl(); ?>" id="img-logo"/>
        </a>
    <?php endif; ?>
    <a class="navbar-brand" style="<?php if ($logo->hasImage()) : ?>display:none;<?php endif; ?> "
       href="<?php echo Yii::$app->homeUrl; ?>" id="text-logo">
			<!-- <img src="<?php echo $this->theme->getBaseUrl() . '/img/logo.png'; ?>"></img> -->
			<?php echo Html::encode(Yii::$app->name); ?>
    </a>
<?php endif; ?>

<?php if ($place == "login") : ?>
    <?php if ($logo->hasImage()) : ?>
        <a class="login-logo" href="<?php echo Yii::$app->homeUrl; ?>">
            <img src="<?php echo $logo->getUrl(); ?>" id="img-logo"/>
        </a>
        <br>
    <?php else: ?>
        <h1 id="app-title" class="animated fadeIn"><a href="<?php echo Yii::$app->homeUrl; ?>"><?php echo Html::encode(Yii::$app->name); ?></a></h1>
    <?php endif; ?>
<?php endif; ?>
