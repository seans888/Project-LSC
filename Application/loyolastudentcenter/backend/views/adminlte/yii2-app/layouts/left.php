<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Student', 'icon' => 'fa fa-circle-o', 'url' => ['/user']],
                    ['label' => 'Student Transaction', 'icon' => 'fa fa-circle-o', 'url' => ['/transaction']],
                    ['label' => 'Payment', 'icon' => 'fa fa-circle-o', 'url' => ['/payment']],
                    
                   
                   

                    [
                        'label' => 'LSC Record',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                        ['label' => 'Authorized Account', 'icon' => 'fa fa-circle-o', 'url' => ['/admin']],
                        ['label' => 'Class List', 'icon' => 'fa fa-circle-o', 'url' => ['/class-list']],
                        ['label' => 'Schedule', 'icon' => 'fa fa-circle-o', 'url' => ['/schedule']],
                        ['label' => 'Review Class', 'icon' => 'fa fa-circle-o', 'url' => ['/review-class']],
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
