<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="panel panel-default panel-light">
	<div class="panel-heading"><?php echo Yii::t('base', "Menu"); ?></div>
	<div class="list-group dashboard-menu-item">
		<?php foreach ($this->context->getItems() as $item) : ?>
			<?php echo Html::a("<span>".$item['label']."</span>", $item['url'], $item['htmlOptions']); ?>
		<?php endforeach; ?>
	</div>
</div>