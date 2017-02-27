      
</header>
<div class=" demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">








    <aside id="sidebar" class="sidebar sidebar-default open" role="navigation">
        <!-- Sidebar header -->
        <div class="sidebar-header header-cover" style="background-image: url(http://2.bp.blogspot.com/-2RewSLZUzRg/U-9o6SD4M6I/AAAAAAAADIE/voax99AbRx0/s1600/14%2B-%2B1%2B%281%29.jpg);">
            <!-- Top bar -->
            <div class="top-bar"></div>
            <!-- Sidebar toggle button -->
            <button type="button" class="sidebar-toggle">
                <i class="icon-material-sidebar-arrow"></i>
            </button>
            <!-- Sidebar brand image -->
            <div class="sidebar-image">
                <img src="<?php echo base_url() . NAV_ASSETS; ?>images/user.jpg" class="demo-avatar">
            </div>
            <!-- Sidebar brand name -->
            <a data-toggle="dropdown" class="sidebar-brand" href="#settings-dropdown">
                <?php echo $this->session->userdata('email'); ?>
                <b class="caret"></b>
            </a>

        </div>

        <!-- Sidebar navigation -->
        <ul class="nav sidebar-nav">
            <li class="dropdown">
                <ul id="settings-dropdown" class="dropdown-menu">
                    <li>
                        <a href="#" tabindex="-1">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . NAV_LOGOUT ?>" tabindex="-1">
                            Log Out
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url() . NAV_ADMIN; ?>">
                    <i class="sidebar-icon md-inbox"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . NAV_USERS; ?>">
                    <i class="sidebar-icon md-star"></i>
                    User
                </a>
            </li>


            <!--<li class="divider"></li>-->
            <li class="dropdown">

                <a href="<?php echo base_url() . 'market/1'?>" class="ripple-effect dropdown-toggle"  data-toggle="dropdown">
                    <i class="sidebar-icon md-inbox"></i>
                    Market
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">

                    <?php
                    foreach ($markets->result_array() as $mar) {
                        ?>

                        <li>
                            <a href="<?php echo base_url() . 'marketview/' . $mar['id']; ?>" tabindex="-1">
                                &nbsp;&nbsp;<i class="material-icons">trending_up</i>
                                &nbsp;&nbsp;<?php echo $mar['name'];
                        ?>

                                <span class="sidebar-badge">
                                    
                                    <?php
                                    $coun = 0;
                                    foreach ($count->result_array() as $cnt) {
                                        if ($mar['id'] == $cnt['market_id']) {
                                            $coun = $cnt['COUNT(*)'];
                                        }
                                    }
                                    echo $coun;
                                    ?>
                                    
                                </span>
                            </a>
                        </li>

                        <?php
                    }
                    ?>
                    <li>
                        <a data-toggle="modal" data-target="#addMarket" tabindex="-1">
                            &nbsp;&nbsp;<i class="material-icons">add</i>
                            &nbsp;&nbsp;Add Market
                        </a>
                    </li>
                </ul>

            </li>

        </ul>
        <!-- Sidebar divider -->
        <!-- <div class="sidebar-divider"></div> -->

        <!-- Sidebar text -->
        <!--  <div class="sidebar-text">Text</div> -->
    </aside>





    <!--    <header class="demo-drawer-header">
            <img src="<?php echo base_url() . NAV_ASSETS; ?>images/user.jpg" class="demo-avatar">
            <div class="demo-avatar-dropdown">
                <span>Welcome Admin</span>
                <div class="mdl-layout-spacer"></div>
                <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">arrow_drop_down</i>
                    <span class="visuallyhidden">Accounts</span>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                                <a href="<?php echo base_url() . NAV_LOGOUT ?>"><li class="mdl-menu__item">Logout</li></a>
                            </ul>
            </div>
        </header>
                        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                        <ul style="list-style-type: none; padding-left: 0px;">
                            <li><a class="mdl-navigation__link" href="<?php echo base_url() . NAV_ADMIN; ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people_outline</i>Dashboard</a></li>
                            <li><a class="mdl-navigation__link" href="<?php echo base_url() . NAV_USERS; ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people_outline</i>User</a></li>
                            <li><a class="mdl-navigation__link" href="<?php echo base_url() . NAV_MARKETS; ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Market</a></li>
                        </ul>
                            <div class="mdl-layout-spacer"></div>
                            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>Help</a>
                        
                        </nav>-->

</div>


<!-- Square card -->




