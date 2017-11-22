<?php
/* Smarty version 3.1.29, created on 2017-10-10 02:59:03
  from "/home/okeowoad/public_html/site/templates/layout/blog.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59dc6fb7845a55_55159536',
  'file_dependency' => 
  array (
    '0f029c71265a781ff8e8417e3093f0db3fc70767' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/layout/blog.tpl',
      1 => 1486729291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../elements/nav.tpl' => 1,
    'file:../elements/footer.tpl' => 1,
  ),
),false)) {
function content_59dc6fb7845a55_55159536 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width initial-scale=1">

  <title><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</title>
  <meta name="description" content="fffabs &copy 2015 - go create!
">

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/main.css">
  <link rel="canonical" href="http://okeowoaderemi.com">
<!--   <link rel="alternate" type="application/atom+xml" title="fffabs" href="http://f-word.co/estivo/feed.xml" /> -->
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->FieldtypeComments;?>
comments.css' />

</head>

<body>
    

<div class="header-container" id="header-container">

<!-- Site navigation -->
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../elements/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <!-- The title of the site -->


</div>

      <div class="wrapper">
        <div class="page-content">
          <div class="post">

  <header class="post-header">
    <h1 class="post-title"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</h1>
    
  </header>

  <!-- Beginning Twitter sharing Large button -->
  <a class="twitter-share-button" href="https://twitter.com/share"
  data-related="twitterdev"
  data-size="large"
  data-count="horizontal">
  Tweet
  </a>
  <!-- End of Twitter sharing button -->

  <div class="home">

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_88365273859dc6fb7819f55_75225007',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


  </div>

  <hr>

  <div class="question">
   
    <a class="twitter-follow-button"
    href="https://twitter.com/qtguru"
    data-show-count="true"
    data-size="large">
    Follow @qtguru
    </a>
    <?php echo '<script'; ?>
 type="text/javascript">
    window.twttr = (function (d, s, id) {
      var t, js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src= "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
      return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
    }(document, "script", "twitter-wjs"));
    <?php echo '</script'; ?>
>
  </div>

 

</div>

        </div>
         <footer class="site-footer">
              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </footer>

    </div>

    <?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/headroomjs/0.5.0/headroom.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      var el = document.querySelector(".header-container");
      var headroom  = new Headroom(el, {
        "offset": 205,
        "tolerance": 5
      });
      headroom.init();
    <?php echo '</script'; ?>
>


    <!-- Twitter Shizzle -->
    <?php echo '<script'; ?>
 type="text/javascript">
    window.twttr = (function (d, s, id) {
      var t, js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src= "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
      return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
    }(document, "script", "twitter-wjs"));
    <?php echo '</script'; ?>
>
     
 
   <?php echo '<script'; ?>
>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19284803-3', 'auto');
  ga('send', 'pageview');

  

<?php echo '</script'; ?>
>


  </body>
</html>
<?php }
/* {block 'content'}  file:../layout/blog.tpl */
function block_88365273859dc6fb7819f55_75225007($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
}
