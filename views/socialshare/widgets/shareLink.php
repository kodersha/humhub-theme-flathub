<?php
use yii\helpers\Html;
?>

<div class="share dropup">
  <a class="shareLink dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bullhorn"></i></a>
  <div class="dropdown-menu">
	<div class="shareContainer">
		<?php
        $option = "
			var width = 575,
				height = 400,
				left = ($(window).width() - width) / 2,
				top = ($(window).height() - height) / 2,
				url = this.href;
				opts = 'status=1' +
					',width=' + width +
					',height=' + height +
					',top=' + top +
					',left=' + left;

				window.open(url, 'share', opts);

				return false;

			";
        ?>
		<?php echo Html::a('<i class="fa fa-facebook" style="font-size:16px;color:#3a5795">&nbsp;</i>', 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($permalink) . '&description=' . urlencode($object->getContentDescription()),['onclick'=> $option]);?>
		<?php echo Html::a('<i class="fa fa-twitter" style="font-size:16px;color:#55acee">&nbsp;</i>&nbsp;</i>', 'https://twitter.com/intent/tweet?text=' . urlencode($object->getContentDescription()) . '&url=' . urlencode($permalink),['onclick'=> $option]);?>
		<?php echo Html::a('<i class="fa fa-linkedin-square" style="font-size:16px;color:#0177b5"></i>', 'https://www.linkedin.com/shareArticle?summary=&mini=true&source=&title=' . urlencode($object->getContentDescription()) . '&url=' . urlencode($permalink) . '&ro=false', ['onclick'=> $option]);?>
	</div>
  </div>
</div>
