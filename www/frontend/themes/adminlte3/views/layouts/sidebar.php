<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- TODO(SaTangTheValue): add app name -->
        <span class="brand-text font-weight-light"><?= Yii::$app->name ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            // TODO(SaTangTheValue): add menu
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'เข้าสู่ระบบ',
                        'url' => ['site/login'],
                        'icon' => 'id-badge',
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'ภาพรวม', '
                    url' => ['site/login'],
                        'icon' => 'tachometer-alt'
                    ],
                    [
                        'label' => 'ผู้จัดทำ',
                        'url' => ['site/login'],
                        'icon' => 'user-graduate'
                    ],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>