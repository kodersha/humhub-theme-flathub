<div class="container">
    <div class="row">
        <div class="col-md-4">
			<div class="panel-light">
				<?= humhub\modules\directory\widgets\Menu::widget(); ?>
			</div>
            <?php echo \humhub\modules\directory\widgets\Sidebar::widget(); ?>
        </div>	
        <div class="col-md-8 panel-hidden">
            <?php echo $content; ?>
        </div>
    </div>
</div>
