<?php /* Smarty version Smarty-3.1.18, created on 2017-02-20 16:27:05
         compiled from "/home/okeowoad/public_html/site/templates/views/blog-post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1680640393576dd647ed67a9-62927156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2629c91bd56c9ed28d133c7506ff9378242586ce' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/views/blog-post.tpl',
      1 => 1486726358,
      2 => 'file',
    ),
    'fe692694d2ddd856efd64f1d0fa9764fdec341b0' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/layout/plain.tpl',
      1 => 1487626019,
      2 => 'file',
    ),
    '313ac00233de87773c824bcfb9875d2563d8ac65' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/elements/paginate.tpl',
      1 => 1484486128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1680640393576dd647ed67a9-62927156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_576dd64802d718_22301694',
  'variables' => 
  array (
    'page' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576dd64802d718_22301694')) {function content_576dd64802d718_22301694($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/okeowoad/public_html/site/assets/cache/FileCompiler/site/modules/TemplateEngineSmarty/smarty/libs/plugins/modifier.date_format.php';
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
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->FieldtypeComments;?>
comments.css' />
<link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
js/jquery.fancybox.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->FieldtypeComments;?>
comments.min.js'></script>
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->FieldtypeComments;?>
comments.min.js'></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->siteModules;?>
InputfieldCKEditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->siteModules;?>
InputfieldCKEditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
js/jquery.fancybox.min.js"></script>

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
    

    <?php echo $_smarty_tpl->tpl_vars['page']->value->blog_body;?>

<div class="tag-links">
    <span class="tags">
        Tags:
                        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value->url;?>
" rel="tag">
            <?php echo $_smarty_tpl->tpl_vars['tag']->value->title;?>

        </a>
        <?php } ?>
    </span>
    <br><br>
    <?php echo $_smarty_tpl->tpl_vars['page']->value->blog_comments->render();?>

                           <?php echo $_smarty_tpl->tpl_vars['page']->value->blog_comments->renderForm();?>

</div>
<?php /*  Call merged included template "../elements/paginate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('../elements/paginate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1680640393576dd647ed67a9-62927156');
content_58ab5f29633f88_56690726($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../elements/paginate.tpl" */?>

<style>
    .CommentFormCite input, .CommentFormEmail input, .CommentFormWebsite input, .CommentFormText textarea {
    box-sizing: border-box;
    display: block;
    width: 100%;
    padding: 8%;
    border: 1px solid #d8d8d8;
}
p.CommentFormSubmit.CommentForm_submit button {
    padding: 2.5% 4%;
    /* width: 14%; */
    background: #1b95e0;
    border: none;
    border-radius: 4px;
    color: white;
    font-weight: bold;
}
input.website {
    height: 46px;
}
code{
    font-size: 13px;
}
</style>

         


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



</script>


  </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-02-20 16:27:05
         compiled from "/home/okeowoad/public_html/site/templates/elements/paginate.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58ab5f29633f88_56690726')) {function content_58ab5f29633f88_56690726($_smarty_tpl) {?><?php }} ?>
