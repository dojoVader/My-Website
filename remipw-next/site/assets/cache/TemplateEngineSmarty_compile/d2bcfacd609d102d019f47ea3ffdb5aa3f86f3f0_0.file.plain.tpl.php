<?php
/* Smarty version 3.1.29, created on 2017-11-15 10:38:05
  from "C:\wamp2\www\remipw-next\site\templates\layout\plain.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0c5f5d8c36f8_07646556',
  'file_dependency' => 
  array (
    'd2bcfacd609d102d019f47ea3ffdb5aa3f86f3f0' => 
    array (
      0 => 'C:\\wamp2\\www\\remipw-next\\site\\templates\\layout\\plain.tpl',
      1 => 1487626020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../elements/nav.tpl' => 1,
    'file:../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5a0c5f5d8c36f8_07646556 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:/wamp2/www/remipw-next/site/modules/TemplateEngineSmarty/smarty/libs\\plugins\\modifier.date_format.php';
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
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->FieldtypeComments;?>
comments.css' />
<link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
js/jquery.fancybox.min.css">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->FieldtypeComments;?>
comments.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->FieldtypeComments;?>
comments.min.js'><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->siteModules;?>
InputfieldCKEditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->siteModules;?>
InputfieldCKEditor/plugins/codesnippet/lib/highlight/highlight.pack.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
js/jquery.fancybox.min.js"><?php echo '</script'; ?>
>

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
    <p class="post-meta"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->published,"%A, %e %B %Y");?>
</p>
  </header>

  <!-- Beginning Twitter sharing Large button -->
  <a class="twitter-share-button" href="https://twitter.com/share"
  data-related="twitterdev"
  data-size="large"
  data-count="horizontal">
  Tweet
  </a>
  <!-- End of Twitter sharing button -->

  <article class="post-content">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_16321927985a0c5f5d8bc8f4_81321551',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


  </article>

  <hr>

  <div class="question">
    <h2>Questions?</h2>
    <p>Have a question regarding the post above? <br />Or any of my designs?</p>
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
  $(document).ready(function(){
    hljs.initHighlightingOnLoad();


  //Augment images to have data-fancy
    $('article.post-content img').each(function(item){
        //create the anchor element
        var parentElement=$(this).parent('p');
        var AnchorElement=document.createElement('a');
        AnchorElement.setAttribute("data-fancybox","images");
        AnchorElement.href=$(this).attr('src');
        if($(this).attr('alt') !== ''){
          //Copy the Attributes too with it
          AnchorElement.setAttribute('data-caption',$(this).attr('alt'));
        }
        AnchorElement.appendChild(this);
        parentElement.get(0).appendChild(AnchorElement);
    });

    $('[data-fancybox]').fancybox({
      image : {
        protect: true
      }
    });
  })



<?php echo '</script'; ?>
>


  </body>
</html>
<?php }
/* {block 'content'}  file:../layout/plain.tpl */
function block_16321927985a0c5f5d8bc8f4_81321551($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
}
