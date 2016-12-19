<?php

use yii\bootstrap\Html;
use app\assets\AppAsset;

$bundle = AppAsset::register($this);

?>

<!-- START HEADER -->
<header class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">                      
                  <li>
                      <h1 class="logo-wrapper">
                          <a href="/" class="brand-logo darken-1"><?= Html::img($bundle->baseUrl.'/img/logo.png', ['alt' => \Yii::$app->name]) ?></a> 
                          <span class="logo-text"><?= \Yii::$app->name?></span>
                      </h1>
                  </li>
                </ul>

                <ul class="right hide-on-med-and-down"> 
                    <?php if (method_exists($this->context->module, 'getTopItems')): ?>
                        <?php foreach ($this->context->module->getTopItems($this->context) as $topMenu): ?>
                            <li>
                                <a href="<?= $topMenu['url'][0] ?>" class="waves-effect waves-block waves-light">
                                    <?= $topMenu['label'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <li><a href="/user/logout" class="waves-effect waves-block waves-light">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->