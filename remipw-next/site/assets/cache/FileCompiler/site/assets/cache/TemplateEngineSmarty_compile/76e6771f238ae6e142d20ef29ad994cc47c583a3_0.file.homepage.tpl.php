<?php
/* Smarty version 3.1.29, created on 2017-11-15 09:35:59
  from "C:\wamp2\www\remipw-next\site\templates\layout\homepage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0c50cf74c278_39804249',
  'file_dependency' => 
  array (
    '76e6771f238ae6e142d20ef29ad994cc47c583a3' => 
    array (
      0 => 'C:\\wamp2\\www\\remipw-next\\site\\templates\\layout\\homepage.tpl',
      1 => 1484542180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../elements/nav.tpl' => 1,
    'file:../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5a0c50cf74c278_39804249 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/modules/TemplateEngineSmarty/smarty/libs\\plugins\\modifier.date_format.php',array('includes'=>true,'namespace'=>true,'modules'=>false,'skipIfNamespace'=>false)));
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
</head>

  <body>
    

<div class="header-container" id="header-container">

<!-- Site navigation -->
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../elements/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




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
    <?php
$_from = $_smarty_tpl->tpl_vars['recentposts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_0_saved_item = isset($_smarty_tpl->tpl_vars['post']) ? $_smarty_tpl->tpl_vars['post'] : false;
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$__foreach_post_0_saved_local_item = $_smarty_tpl->tpl_vars['post'];
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
        <?php
$_from = $_smarty_tpl->tpl_vars['post']->value->blog_categories;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_1_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_1_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
?>
          <?php echo $_smarty_tpl->tpl_vars['cat']->value->title;?>
  
        <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_1_saved_local_item;
}
if ($__foreach_cat_1_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_1_saved_item;
}
?>

        </h2></a>
       
      </li>
      <?php
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_local_item;
}
if ($__foreach_post_0_saved_item) {
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_item;
}
?>
    
  </ul>

  <div class="pagination">
    
    
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

  </body>
</html>
<?php }
}
