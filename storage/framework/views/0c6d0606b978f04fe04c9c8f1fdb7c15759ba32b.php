<nav class="navbar navbar-expand-lg navbar-dark bg-dark no-lr-p">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span onclick="openNav()" class="navbar-toggler-icon"></span>
    </button>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?php echo e(site_url()); ?>">Posts</a>
        <a href="<?php echo e(site_url().'predictions'); ?>">Predictions</a>
        <a href="#">Guidelines</a>
        <a href="#">Help</a>
        <?php if($user && $user->clearance == 1): ?>
            <hr style="border-color:#818181">
            <a href="<?php echo e(site_url().'admin/pending'); ?>">Unapproved Posts</a>
            <a href="<?php echo e(site_url().'admin/pending'); ?>">All predictions</a>
        <?php endif; ?>
    </div>
    <script>

        //for sidebar on mobile
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <a class="navbar-brand" href="<?php echo e(site_url()); ?>" style="width:30%">
        <img src="<?php echo e(base_url().'img/logo-full.png'); ?>" class="logo"/>
        
        
    </a>
    <div class="desktop-remove small-r-p">
        <?php if(isset($user->email)): ?>
            <div class="navbar-wagon-item">
                <div class="dropdown">
                    <a href="<?php echo e(site_url().'create/post'); ?>" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-plus"></i> Make a Post</a>
                    <img class="profile-dp-s no-border avatar dropdown-toggle" id="navbar-wagon-menu" data-toggle="dropdown" src="<?php echo e('https://steemitimages.com/u/'.$user->steem_username.'/avatar/small'); ?>" onerror="this.src='<?php echo e(base_url().'img/user.png'); ?>'"/>
                    <ul class="dropdown-menu dropdown-menu-right navbar-wagon-dropdown-menu">
                        <li class="small-margin">
                            <a href="<?php echo e(site_url().'profile/@'.$user->steem_username); ?>">
                                <i class="pe-7s-user" style="font-size:18px"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(site_url().'user/pending'); ?>">
                                <i class="pe-7s-pen" style="font-size:18px"></i> Pending posts
                            </a>
                            <hr class="small-margin">
                        </li>
                        <li class="small-margin">
                            <a href="<?php echo e(site_url().'user/logout'); ?>">
                                <i class="pe-7s-power" style="font-size:18px"></i> Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        <?php else: ?>
            <a style="display:inline-block !important;padding-right:0!important;" class="nav-link text-success" href="<?php echo e(site_url().'signup'); ?>">Sign up  |</a>
            <a style="display:inline-block !important;padding-left:0!important;" class="nav-link text-white" href="<?php echo e(site_url().'login'); ?>">Login</a>
        <?php endif; ?>
    </div>
    <div class="collapse navbar-collapse" id="">
        
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <?php if(isset($user->email)): ?>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <a href="<?php echo e(site_url().'create/post'); ?>" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-plus"></i> Make a Post</a>
                    </form>
                </li>
                <li class="nav-item" style="padding-left:10px;">
                    <div class="navbar-wagon-item">
                        <div class="dropdown">
                            <img class="profile-dp-s no-border avatar dropdown-toggle" id="navbar-wagon-menu" data-toggle="dropdown" src="<?php echo e('https://steemitimages.com/u/'.$user->steem_username.'/avatar/small'); ?>" onerror="this.src='<?php echo e(base_url().'img/user.png'); ?>'"/>
                            <ul class="dropdown-menu dropdown-menu-right navbar-wagon-dropdown-menu">
                                <li class="small-margin">
                                    <a href="<?php echo e(site_url().'profile/@'.$user->steem_username); ?>">
                                        <i class="pe-7s-user" style="font-size:18px"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(site_url().'user/pending'); ?>">
                                        <i class="pe-7s-pen" style="font-size:18px"></i> Pending posts
                                    </a>
                                    <hr class="small-margin">
                                </li>
                                <li class="small-margin">
                                    <a href="<?php echo e(site_url().'user/logout'); ?>">
                                        <i class="pe-7s-power" style="font-size:18px"></i> Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <a href="<?php echo e(site_url().'signup'); ?>" class="btn btn-success my-2 my-sm-0" type="submit">Sign up</a>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(site_url().'login'); ?>">Log in</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>