<?php

use yii\helper\Html;

humhub\modules\like\assets\LikeAsset::register($this);
?>

<span class="likeLinkContainer pull-left" id="likeLinkContainer_<?= $id ?>">

    <?php if (Yii::$app->user->isGuest): ?>
        <?= Html::a(Yii::t('LikeModule.widgets_views_likeLink', '<i class="fa fa-heart-o"></i>'), Yii::$app->user->loginUrl, array('data-target' => '#globalModal')); ?>
    <?php else {
    : ?>
        <?= Html::a(Yii::t('LikeModule.widgets_views_likeLink', '<i class="fa fa-thumbs-o-up"></i>'), $likeUrl, ['style' => 'display:'.((!$currentUserLiked) ? 'inline' : 'none'), 'class' => 'like likeAnchor', 'data-objectId' => $id]);
}
?>
        <?= Html::a(Yii::t('LikeModule.widgets_views_likeLink', '<i class="fa fa-thumbs-o-up"></i>'), $unlikeUrl, ['style' => 'display:'.(($currentUserLiked) ? 'inline' : 'none'), 'class' => 'unlike likeAnchor', 'data-objectId' => $id]); ?>
    <?php endif; ?>

<?php if (count($likes) > 0) { ?>
        <!-- Create link to show all users, who liked this -->
        <a href="<?= $userListUrl; ?>" data-target="#globalModal"><span class="likeCount tt" data-placement="top" data-toggle="tooltip"
                                                    title="<?= $title ?>"></span></a>
    <?php } else { ?>
        <span class="likeCount"></span>
<?php } ?>

</span>

<script>
    $(function () {
        updateLikeCounters($("#likeLinkContainer_<?= $id ?>"), <?= count($likes); ?>);
        initLikeModule();

        // show Tooltips on elements inside the views, which have the class 'tt'
        $('.tt').tooltip({
            html: false,
            container: 'body'
        });

    });
</script>
