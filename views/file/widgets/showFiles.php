<?php

use humhub\modules\file\libs\FileHelper;
use yii\helpers\Html;

$object = $this->context->object;
?>

<?php if (count($files) > 0) : ?>
<!-- hideOnEdit mandatory since 1.2 -->
<div class="hideOnEdit">
    <!-- Show Images as Thumbnails -->
    <div class="post-files" id="post-files-<?php echo $object->getUniqueId(); ?>">
        <?php foreach ($files as $file): ?>
            <?php if ($previewImage->applyFile($file)): ?>
                <a data-ui-gallery="<?= "gallery-" . $object->getUniqueId(); ?>" href="<?= $file->getUrl(); ?>#.jpeg" title="<?= Html::encode($file->file_name) ?>">
                    <?= $previewImage->render(); ?>
                </a>
            <?php elseif(FileHelper::getExtension($file->file_name) == 'mp4'): ?>
                <a data-ui-gallery="<?= "gallery-" . $object->getUniqueId(); ?>" type="video/mp4" href="<?= $file->getUrl(); ?>#.mp4" title="<?= Html::encode($file->file_name) ?>">
                    <video src="<?= $file->getUrl() ?>" height="130" />
                </a>
            <?php elseif(FileHelper::getExtension($file->file_name) == 'ogv'): ?>
                <a data-ui-gallery="<?= "gallery-" . $object->getUniqueId(); ?>" type="video/ogg" href="<?= $file->getUrl(); ?>#.ogv" title="<?= Html::encode($file->file_name) ?>">
                    <video src="<?= $file->getUrl() ?>" height="130" />
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
        
        <?php $playlist = [] ?>
        
        <?php foreach ($files as $file): ?>
            <?php if (FileHelper::getExtension($file->file_name) == "mp3") : ?>
                <?php $playlist[] = $file ?>
            <?php endif; ?>
        <?php endforeach; ?>
        
        <?= \humhub\widgets\JPlayerPlaylistWidget::widget([
            'playlist' => $playlist
        ]); ?>
        
    </div>

    <!-- Show List of all files -->
    <hr>
    <?= \humhub\modules\file\widgets\FilePreview::widget([
        'hideImageFileInfo' => $hideImageFileInfo,
        'model' => $object,
    ]);?>
    
</div>
<?php endif; ?>
