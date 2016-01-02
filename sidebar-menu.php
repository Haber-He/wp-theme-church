    <section class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="topbar-date">
              <span class="hidden-xs">2015年12月1日</span>
              将临期
            </div>
            <div class="topbar-social">
              <span><a href="" title="我们需要你的支持">捐助我们</a></span>
              <a class="s_weixin" title="官方微信">官方微信</a>
              <div class="weixin" style="display: none;">
                <a href="img/qrcode.jpg">
                <img class="qrcode img-responsive" src="<?php bloginfo('template_url'); ?>/img/qrcode.jpg" alt="微信公众号"></a>
              </div>
              <a class="s_tsina" title="新浪微博" href="http://weibo.com/szsadn" target="_blank">新浪微博</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- navbar begin
    =========================================================-->
    <nav class="navbar navbar-default">
      <div class="navbar-inner">
        <div class="container">
          
<!--           <div class="navbar-search-header">
            <i class="icon-search" data-toggle="collapse" data-target="#navbar-search-collapse-1"></i>
          </div> -->

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="img-responsive" alt="天主教深圳圣安多尼堂"/>
            </a>
          </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="bs-navbar-collapse-1">
            <?php
              wp_nav_menu( array(
              'theme_location' => 'header-menu',
              'container' => '',
              'menu_class' => 'nav navbar-nav',
              'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
              'before' => '',
              'after' => '',
              'walker' => new wp_bootstrap_navwalker())
              );
            ?>
            <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="搜索" name="s" id="s" >
              </div>
            </form>

          </div>
        </div>

<!--         <div class="container">
          <div class="navbar-search" id="navbar-search-collapse-1">
            <form class="navbar-form navbar-right" role="search">
              <div class="input-group">
                <input type="text" class="form-control search-input" placeholder="输入关键字" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2">
                    <i class="icon-search"></i>
                </span>
              </div>
            </form>
          </div>
        </div> -->

      </div>
    </nav>