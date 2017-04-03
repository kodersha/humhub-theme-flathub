<?php
$user = $this->context->getUser();
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?= \humhub\modules\user\widgets\ProfileHeader::widget(['user' => $user]); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 panel-light no-icons">
			<?= \humhub\modules\user\widgets\ProfileMenu::widget(['user' => $this->context->user]); ?>
            <?= \humhub\modules\user\widgets\AccountMenu::widget(); ?>
        </div> 
        <div class="col-md-9 panel-hidden">
            <div class="panel panel-default">
                <?= $content; ?>
            </div>
        </div>
    </div>
</div>
