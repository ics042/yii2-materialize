<?php

use yii\bootstrap\Nav;
use yii\bootstrap\Html;

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
                          <a href="index.html" class="brand-logo darken-1"><?= Html::img('/img/logo.png', ['alt' => \Yii::$app->name]) ?></a> 
                          <span class="logo-text"><?= \Yii::$app->name?></span>
                      </h1>
                  </li>
                </ul>

                <ul class="right hide-on-med-and-down"> 
                    <?php if (method_exists($this->context->module, 'getTopItems')): ?>
                        <?php foreach ($this->context->module->getTopItems($this->context) as $topMenu): ?>
                            <li>
                                <a href="<?= $topMenu['url'] ?>" class="waves-effect waves-block waves-light">
                                    <?= $topMenu['label'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <li><a href="#" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-action-lock-open"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->


<header id="header" class="page-topbar">
    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><?= Html::img('/img/logo-alt.png', ['alt' => \Yii::$app->name]) ?></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><?= Html::img('/img/logo.png', ['alt' => \Yii::$app->name]) ?></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <?= Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => $this->theme->topMenuItems
            ]); ?>
        </div>

    </nav>
</header>