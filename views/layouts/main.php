<?php

use yii\helpers\Html;
use humhub\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head> 
        <!-- start: Meta -->
        <meta charset="utf-8">
        <title><?= $this->pageTitle; ?></title>
        <meta name="description" content="SITENAME - SITE_DESCRIPTION.">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- end: Mobile Specific -->
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="<?= Yii::getAlias(" @web"); ?>/js/html5shiv.js"></script>
        <link id = "ie-style" href = "<?= Yii::getAlias("@web"); ?>/css/ie.css rel = "stylesheet" >
        <![endif]-->

        <!--[if IE 9]>
        <link id="ie9style" href="<?= Yii::getAlias(" @web"); ?>/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: render additional head (css and js files) -->
        <?= $this->render('head'); ?>
        <!-- end: render additional head -->

    </head>

    <body>
	
	<script src="<?= $this->theme->getBaseUrl().'/js/lightbox-plus-jquery.min.js'; ?>"></script>
	
    <?php $this->beginBody() ?>
	
    <!-- start: first top navigation bar -->
    <div id="topbar-first" class="topbar">
        <div class="container">

            <div class="topbar-brand hidden-xs">
                <?= \humhub\widgets\SiteLogo::widget(); ?>
            </div>

            <div class="topbar-actions pull-right">
				<div class="no-icons">
					<?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
				</div>
				<form id="switchform">
					<a href="javascript:chooseStyle('none', 60)" checked="checked"><i class="fa fa-sun-o"></i></a>
					<a href="javascript:chooseStyle('dark-theme', 60)"<i class="fa fa-moon-o"></i></a>
				</form>
            </div>

            <div class="notifications pull-right">
                <?=
	\humhub\widgets\NotificationArea::widget(['widgets' => [
                    [\humhub\modules\notification\widgets\Overview::className(), [], ['sortOrder' => 10]],
                ]]);
                ?>
            </div>
        </div>
    </div>
    <!-- end: first top navigation bar -->

    <?= \humhub\modules\tour\widgets\Tour::widget(); ?>

    <!-- start: show content (and check, if exists a sublayout -->
    <?php if (isset($this->context->subLayout) && $this->context->subLayout != "") : ?>
        <?= $this->render($this->context->subLayout, array('content' => $content)); ?>
    <?php else { : ?>

        <?= $content; } ?>

    <?php endif; ?>
    <!-- end: show content -->

    <!-- start: Modal (every lightbox will/should use this construct to show content)-->
    <div class="modal" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <?= \humhub\widgets\LoaderWidget::widget(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Modal -->

    <?= \humhub\models\Setting::GetText('trackingHtmlCode'); ?>
    <?php $this->endBody() ?>
	
	<div class="container">
		<div class="col-md-12 layout-content-container">
			<footer>
				<div class="copyright">
					<span>Powered by <a target="_blank" href="http://humhub.com">HumHub</a></span>
					<span>Theme <a target="_blank" href="http://thrashed.ru">developer</a></span>
				</div>
			</footer>
		</div>
	</div>

	<script>
	$(document).ready(function() {
		try {
			$.browserSelector();
			if($("html").hasClass("chrome")) {
				$.smoothScroll();
			}
		} catch(err) {
		};
	});
	</script>

    </body>
</html>
<?php $this->endPage() ?>
