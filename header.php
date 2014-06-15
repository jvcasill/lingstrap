<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>www.lingreference.org</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- add favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon_ipa.ico" />

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>


  </head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">         
            <li><a href="/about">about</a></li>
            <li><a href="/forum">forum</a></li>
            <li><a href="/questions">ask questions</a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">more<b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><a href="<?php echo get_bloginfo('url'); ?>/dictionary/add-translation/">submit a term</a></li>
                <li><a href="#">vote</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">projects</li>
                <li><a href="#">language revitalization</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!--         <div class="collapse navbar-collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 
                                          'items_wrap' => '<ul class="nav navbar-nav"><li id=""></li>%3$s</ul>' ) ); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 
                                          'items_wrap' => '<a href="" class="dropdown-toggle" data-toggle="dropdown">more<b class="caret"></b></a><ul class="dropdown-menu"><li id=""></li>%3$s</ul>' ) ); ?>
            </div>
          </div>
        </div> -->

    <div class="small-jumbo">
      <div class="container">
        <h2>lingreference.org</h2>
        <p></p>
        <!-- Search box -->
        <div class="row">
          <div class="col-md-5">
            <?php do_shortcode('[mld_search_form_header /]');?>
            <?php /*<input type="text" class="form-control" placeholder="enter search text">*/ ?>
          </div>
<?php /*
          <div class="visible-xs col-xs-11">
            <input type="text" class="form-control" placeholder="enter search text">
          </div>
*/ ?>
        </div>
<?php /*
        <p></p>
        <div class="row">
          <div class="hidden-xs col-md-2">
            <select class="form-control">
              <option selected="selected" disabled="disabled">SL</option>
              <option>English</option>
              <option>Spanish</option>
              <option>French</option>
              <option>Catalan</option>
              <option>Portuguese</option>
              <option>Italian</option>
            </select>
          </div>
          <div class="visible-xs col-xs-4">
            <select class="form-control">
              <option selected="selected" disabled="disabled">SL</option>
              <option>English</option>
              <option>Spanish</option>
              <option>French</option>
              <option>Catalan</option>
              <option>Portuguese</option>
              <option>Italian</option>
            </select>
          </div>
          <div class="hidden-xs col-md-2">
            <select class="form-control">
              <option selected="selected" disabled="disabled">TL</option>
              <option>English</option>
              <option>Spanish</option>
              <option>French</option>
              <option>Catalan</option>
              <option>Portuguese</option>
              <option>Italian</option>
            </select>
          </div>
          <div class="visible-xs col-xs-4">
            <select class="form-control">
              <option selected="selected" disabled="disabled">TL</option>
              <option>English</option>
              <option>Spanish</option>
              <option>French</option>
              <option>Catalan</option>
              <option>Portuguese</option>
              <option>Italian</option>
            </select>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-info">Search</button>
          </div>
        </div>
*/ ?>		
      </div>
    </div>

    <!-- Begin page content -->
    <div class="forum-container">
      <div class="container"> 