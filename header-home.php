<!DOCTYPE html>
<html class="frontpage" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

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
      </div><!--/.nav-collapse -->
    </div>
  </div>

    <div class="jumbotron">
      <section class="bg-1 text-center">
        <div class="container">
          <h2>lingreference.org</h2>
          <h2></h2>
        <!-- Search box -->
          <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-md-4">
              <?php do_shortcode('[mld_search_form_home /]');?>
            
              <?php /*<input type="text" class="form-control" placeholder="enter search text"> */ ?>
            </div>
          </div><!-- /.row -->
<?php /*
          <h2></h2>
          <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-md-2">
              <select class="form-control">
                <option selected="selected" disabled="disabled">Source language</option>
                <option>English</option>
                <option>Spanish</option>
                <option>French</option>
                <option>Catalan</option>
                <option>Portuguese</option>
                <option>Italian</option>
              </select>
            </div>
            <div class="col-md-2">
              <select class="form-control">
                <option selected="selected" disabled="disabled">Target language</option>
                <option>English</option>
                <option>Spanish</option>
                <option>French</option>
                <option>Catalan</option>
                <option>Portuguese</option>
                <option>Italian</option>
              </select>
            </div>
          </div>
          <p></p>
          <div class="col-sm-5">
          </div>
          <div class="col-sm-2">
            <div class="btn-group">
              <button type="button" class="btn btn-info">Search</button>
            </div>
            </hr>
          </div>
*/ ?>		  
        </div>
      </section>
    </div>