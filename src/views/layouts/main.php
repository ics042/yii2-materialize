<?php
/**
 * @var $this \yii\web\View
 * @var $content string
 */

use ics042\Materialize\ThemeAsset;

ThemeAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<?= $this->render('//layouts/head') ?>

<body>

    <!-- Header Begin -->
    <?= $this->render('//layouts/header') ?>
    <!-- Header Begin -->

    <?php $this->beginBody() ?>
    <!-- START WRAPPER -->
    <div id="main-div-content">
        <div class="wrapper">
            <!-- Sidebar Begin -->
            <?= $this->render('//layouts/sidebar') ?>
            <!-- Sidebar End -->
            <!-- Content Header Begin -->
            <?= $this->render('//layouts/content-header') ?>
            <!-- Content Header End -->
            <!-- Content Begin -->
            <?= $this->render('//layouts/content', ['content' => $content]) ?>
            <!-- Content End -->
        </div>
    </div>
    <!-- END WRAPPER -->
    <?php $this->endBody() ?>

    <!-- Footer Begin -->
    <?= $this->render('//layouts/footer') ?>
    <!-- Footer End -->
</body>
</html>
<?php $this->endPage() ?>
