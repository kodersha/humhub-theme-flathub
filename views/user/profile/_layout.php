<?php
$user = $this->context->getUser();
?>
<div class="container profile-layout-container">
    <div class="row"> 
        <div class="col-md-12">
            <?php echo \humhub\modules\user\widgets\ProfileHeader::widget(['user' => $user]); ?>
        </div>
    </div>
    <div class="row">
        <?php if (isset($this->context->hideSidebar) && $this->context->hideSidebar) : ?>
            <div class="col-md-12 layout-content-container">
                <?php echo $content; ?>
            </div>
        <?php else {
    : ?>
			<div class="col-md-4 layout-sidebar-container">
				<div class="panel-light">
					<?php echo \humhub\modules\user\widgets\ProfileMenu::widget(['user' => $this->context->user]);
}
?>
                </div>
				<?php
                echo \humhub\modules\user\widgets\ProfileSidebar::widget([
                    'user' => $this->context->user,
                    'widgets' => [
                        [\humhub\modules\user\widgets\UserTags::className(), ['user' => $this->context->user], ['sortOrder' => 10]],
                        [\humhub\modules\user\widgets\UserSpaces::className(), ['user' => $this->context->user], ['sortOrder' => 20]],
                        [\humhub\modules\user\widgets\UserFollower::className(), ['user' => $this->context->user], ['sortOrder' => 30]],
                    ]
                ]);
                ?>
            </div>
            <div class="col-md-8 panel-hidden layout-content-container">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
