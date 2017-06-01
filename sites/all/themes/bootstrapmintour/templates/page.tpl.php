<?php
global $language;
$ln = $language->language;
$path = drupal_get_path('theme', 'bootstrapmintour');
global $base_url;
global $user;

$is_front = false ; //GSE je force pour avoir toujours le meme affichage

?>
<header id="page-header">
  <div class="<?php print $container_class; ?>">
    <div class="row">
    	<div class="col-md-8">
      	<?php print render($page['header']); ?>
      	</div>
      <div class="col-md-4">
      <?php print render($page['userlogout']); ?>
      </div>
    </div>
  </div>
</header>
<header id="page-connection">
  <div class="<?php print $container_class; ?>">
    <div class="row">
      <?php //print render($page['connection']); ?>
    </div>
  </div>
</header>
<div id="navbar-container">
  <header id="navbar" role="banner" class="">
    <div class="<?php print $container_class; ?>">
      <div class="row img-responsive">
        <?php if ($logo): ?>
           <!-- <div class="col-md-6  col-md-offset-5 col-sm-12 col-sm-offset-5"> -->
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" >
              
              <img src="<?php print $base_url."/".$path; ?>/logo_instat.png" alt="<?php print t('Home'); ?>">
              <img src="<?php print $base_url."/".$path; ?>/banniere.jpg" alt="<?php print t('Home'); ?>"  >
              
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="clearfix"></div>
  </header>
</div>
<div id="menu-container">
  <div class="<?php print $container_class; ?>">
    <div class="row">
      <div class="col-sm-12">
        <div id="main-menu">
          <?php print render($page['mainmenu']); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="slider" class="hidden-xs">
  <img src="<?php print $base_url."/".$path; ?>/images/baobab-1024x400.jpg" class="xxximg-responsive">
</div>

<div class="main-container <?php print $container_class; ?>">

  <div class="row">
    <?php if (!$is_front): ?>
      <section<?php print $content_column_class; ?> id="main-section">

        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <?php
        if (!empty($breadcrumb)): print $breadcrumb;
        endif;
        ?>
        <div class="col-sm-12" id="main-content-content">
        	
          <?php if ($user->uid) {
          		print render($page['secondarymenu']); 
          }?>
          
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if (!empty($title) && !$is_front): ?>
            <h1 class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): 
            
            if ($_GET["q"] == 'admin/people') {
            	echo "<ul class='action-links'><li>
				<a href='people/create' class='btn btn-xs btn-success'>
					<span class='icon glyphicon glyphicon-plus' aria-hidden='true'></span>Add contact</a>
				<a href='../people-export.csv' class='btn btn-xs btn-success'><span class='icon glyphicon glyphicon-export' aria-hidden='true'></span>Export contacts</a>
            	<a href='../import/contact_import' class='btn btn-xs btn-success'><span class='icon glyphicon glyphicon-import' aria-hidden='true'></span>Import contacts</a></li></ul>";
            } else {
            	?><ul class="action-links"><?php print render($action_links); ?></ul>
            <?php	
            } ?>
            
          <?php endif; ?>

          <?php print render($page['content']); ?>
        </div>
      </section>
    <?php else: ?>
      <?php print render($page['content']); ?>
    <?php endif; ?>
  </div>
</div>

<div id="footer-container">
  <footer class="footer <?php print $container_class; ?>">
    <div class="row">
      <div class="col-sm-12">
        <?php print render($page['footer']); ?>
      </div>
    </div>
  </footer>
</div>
<div id="footer-last">
  <div class="footer-last <?php print $container_class; ?>">
    <div class="row">
      <div class="col-sm-12">
        <div class="pull-right">
          &COPY;
          <?php
          print date('Y') . ' ';
          print 'Instat / Ministère du tourisme';
          ?>
        </div>
      </div>
    </div>

  </div>
</div>