<?php require_once "header.tpl.php"; ?>

<h1 id="site_title"><a href="<?php $main_url ; ?>" title="CMS"><?php echo $config['site_title']; ?></a></h1>
	
<nav><?php print buildMenu(0, $menu); ?> </nav>
	

<main>
  <div class="intro">
<?php if (!$frontpage): ?>
    <tabs>
     <ul>
      <li>
        <a href="">View</a>
      </li>
      <li>
        <a href="<?php print $base_url_dir . $node['type'] .'/'. $node['id'] . '/edit' ;?>">Edit</a>
      </li>
      </ul>
    </tab>
    
        <h2><?php print $node['name'] ;?></h2>
        <p><?php print $node['content'] ;?></p>
<?php endif; ?>

	
<?php if ($frontpage): ?>
    	<?php box_list(); ?>
<?php endif; ?>
	
   </div> 
</main>
	
<sidebar>
	<div class="intro">
	<h3>Login Box</h3>
	Login Box
	</div>
</sidebar>

<footer>
	<div class="intro">
	</div>
</footer>
	
</body>
</html>
