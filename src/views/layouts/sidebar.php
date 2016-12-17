<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <?php if (method_exists($this->context->module, 'getMenuItems')): ?>
            <?php foreach ($this->context->module->getMenuItems($this->context) as $menu): ?>
                <?php if (isset($menu['items'])): ?>
                    <li class="no-padding <?= $menu['active'] ? 'active' : ''  ?>">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold">
                                <a class="collapsible-header waves-effect waves-cyan"><?= $menu['label']?></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <?php foreach($menu['items'] as $subMenu):?>
                                            <li class="<?= (isset($subMenu['active']) && $subMenu['active']) ? 'active' : ''  ?>">
                                                <a href="<?=$subMenu['url']?>"><?=$subMenu['label']?></a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="bold active">
                        <a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                <?php endif ?>
            <?php endforeach; ?>
        <?php endif ?>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>
<!-- END LEFT SIDEBAR NAV-->