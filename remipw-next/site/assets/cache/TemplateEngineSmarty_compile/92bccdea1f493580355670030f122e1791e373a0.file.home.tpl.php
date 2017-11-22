<?php /* Smarty version Smarty-3.1.18, created on 2017-01-15 23:50:06
         compiled from "/home/okeowoad/public_html/site/templates/views/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699060255576dd6cf8ed786-07202342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92bccdea1f493580355670030f122e1791e373a0' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/views/home.tpl',
      1 => 1484488305,
      2 => 'file',
    ),
    'ae319912b8e1ed57d8aa2ba05019714cf665c59b' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/layout/homepage.tpl',
      1 => 1484542179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1699060255576dd6cf8ed786-07202342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_576dd6cfa066b7_58928727',
  'variables' => 
  array (
    'page' => 0,
    'config' => 0,
    'appName' => 0,
    'recentposts' => 0,
    'post' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576dd6cfa066b7_58928727')) {function content_576dd6cfa066b7_58928727($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/okeowoad/public_html/site/assets/cache/FileCompiler/site/modules/TemplateEngineSmarty/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
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
</head>

  <body>
    

<div class="header-container" id="header-container">

<!-- Site navigation -->
  <?php echo $_smarty_tpl->getSubTemplate ('../elements/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




</div>

      <div class="wrapper">
        <div class="page-content">
          <!-- Brief intro -->
<div class="header-intro">
  <h2><?php echo $_smarty_tpl->tpl_vars['appName']->value;?>
</h2>
  <p><?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>
</p>
</div>
<hr />
<!-- End intro -->

<div class="home">

  <ul id="post-list">
    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
        <aside class="dates"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->published,"%a %e, %y");?>
</aside>
        </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
<h2>
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value->blog_categories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
          <?php echo $_smarty_tpl->tpl_vars['cat']->value->title;?>
  
        <?php } ?>

        </h2></a>
       
      </li>
      <?php } ?>
    
  </ul>

  <div class="pagination">
    
    
  </div>

</div>

        </div>
        <footer class="site-footer">
              <?php echo $_smarty_tpl->getSubTemplate ('../elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </footer>

    </div>

    <script src="//cdn.jsdelivr.net/headroomjs/0.5.0/headroom.min.js"></script>
    <script type="text/javascript">
      var el = document.querySelector(".header-container");
      var headroom  = new Headroom(el, {
        "offset": 205,
        "tolerance": 5
      });
      headroom.init();
    </script>


    <!-- Twitter Shizzle -->
    <script type="text/javascript">
    window.twttr = (function (d, s, id) {
      var t, js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src= "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
      return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
    }(document, "script", "twitter-wjs"));
    </script>

  </body>
</html>
<?php }} ?>
