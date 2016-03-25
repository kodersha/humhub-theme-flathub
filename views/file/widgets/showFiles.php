<?php

use yii\helpers\Html;
use humhub\libs\Helpers;

$object = $this->context->object;
?>

<?php if (count($files) != 0) : ?>

    <!-- Show Images as Thumbnails -->
    <div class="post-files" data-layout="<?php echo $object->getUniqueId(); ?>" data-id="photoset-<?php echo $object->getUniqueId(); ?>">
        <?php foreach ($files as $file) : ?>
            <?php if ($file->getMimeBaseType() == "image") : ?>
                <a class="image-grid <?php if (count($files) < 3) { echo "half"; } ?> <?php if (count($files) < 2) { echo "full"; } ?>" data-lightbox="<?php if (count($files) > 0) { echo "image-" . $object->getUniqueId(); } ?>" href="<?php echo $file->getUrl(); ?>#.jpeg">
                    <img src="<?php echo $file->getUrl(); ?>#.jpeg" data-highres="<?php echo $file->getUrl(); ?>#.jpeg">
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <!-- Show List of all files -->
    <ul class="files" style="list-style: none; margin: 0;" id="files-<?php echo $object->getPrimaryKey(); ?>">
        <?php foreach ($files as $file) : ?>
            <?php
            if ($file->getMimeBaseType() == "image" && $hideImageFileInfo)
                continue;
            ?>
            <li class="mime <?php echo \humhub\libs\MimeHelper::getMimeIconClassByExtension($file->getExtension()); ?>"><a
                    href="<?php echo $file->getUrl(); ?>" target="_blank"><span
                        class="filename"><?php echo Html::encode(Helpers::trimText($file->file_name, 40)); ?></span></a>
                <span class="time" style="padding-right: 20px;"> - <?php echo Yii::$app->formatter->asSize($file->size); ?></span>

                <?php if ($file->getExtension() == "mp3") : ?>
                    <!-- Integrate jPlayer -->
                    <?php
                    echo xj\jplayer\AudioWidget::widget(array(
                        'id' => $file->id,
                        'mediaOptions' => [
                            'mp3' => $file->getUrl(),
                        ],
                        'jsOptions' => [
                            'smoothPlayBar' => true,
                        ]
                    ));
                    ?>
                <?php endif; ?>

            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

