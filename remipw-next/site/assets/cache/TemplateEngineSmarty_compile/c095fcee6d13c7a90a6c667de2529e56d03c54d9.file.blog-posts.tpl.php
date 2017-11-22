<?php /* Smarty version Smarty-3.1.18, created on 2017-02-10 07:52:54
         compiled from "/home/okeowoad/public_html/site/templates/views/blog-posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1796371564576dd90135adf8-84174785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c095fcee6d13c7a90a6c667de2529e56d03c54d9' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/views/blog-posts.tpl',
      1 => 1484488837,
      2 => 'file',
    ),
    '0f029c71265a781ff8e8417e3093f0db3fc70767' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/layout/blog.tpl',
      1 => 1486729291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1796371564576dd90135adf8-84174785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_576dd9014db4b0_43285114',
  'variables' => 
  array (
    'page' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576dd9014db4b0_43285114')) {function content_576dd9014db4b0_43285114($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/okeowoad/public_html/site/assets/cache/FileCompiler/site/modules/TemplateEngineSmarty/smarty/libs/plugins/modifier.date_format.php';
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
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->FieldtypeComments;?>
comments.css' />

</head>

<body>
    

<div class="header-container" id="header-container">

<!-- Site navigation -->
  <?php echo $_smarty_tpl->getSubTemplate ('../elements/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

    
<ul id="post-list">
    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
            <aside class="dates">
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->published,"%a %e, %y");?>

            </aside>
        </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
            <?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>

            
        </a>
    </li>
    <?php } ?>
</ul>
<div class="pagination">
    <?php echo $_smarty_tpl->tpl_vars['posts']->value->renderPager();?>

    
</div>



  </div>

  <hr>

  <div class="question">
   
    <a class="twitter-follow-button"
    href="https://twitter.com/qtguru"
    data-show-count="true"
    data-size="large">
    Follow @qtguru
    </a>
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
     
 
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19284803-3', 'auto');
  ga('send', 'pageview');

  

</script>


  </body>
</html>
<?php }} ?>
