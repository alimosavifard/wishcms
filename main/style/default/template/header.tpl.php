<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $config['site_title']; ?></title>
  <meta name="description" content="Web Hosting Site">
  <meta name="author" content="irdrupal.com">
  <link rel="stylesheet" href="<?php print $theme_patch; ?>/css/styles.css">
  <link rel="stylesheet" href="<?php print $theme_patch; ?>/css/nav.css">
  <link rel="stylesheet" href="<?php print $theme_patch; ?>/stylesheet.php">
    
    <script type="text/javascript">

      function activateTab(pageId) {
          var tabCtrl = document.getElementById('tabCtrl');
          var pageToActivate = document.getElementById(pageId);
          for (var i = 0; i < tabCtrl.childNodes.length; i++) {
              var node = tabCtrl.childNodes[i];
              if (node.nodeType == 1) { /* Element */
                  node.style.display = (node == pageToActivate) ? 'block' : 'none';
              }
          }
      }

    </script>
    
</head>
<body>