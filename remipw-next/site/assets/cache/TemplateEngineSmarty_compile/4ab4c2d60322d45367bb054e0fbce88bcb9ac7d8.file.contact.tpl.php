<?php /* Smarty version Smarty-3.1.18, created on 2016-06-24 21:01:15
         compiled from "/home/okeowoad/public_html/site/templates/views/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:670058063576dd7dbceb9f1-35130235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab4c2d60322d45367bb054e0fbce88bcb9ac7d8' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/views/contact.tpl',
      1 => 1466815479,
      2 => 'file',
    ),
    'ae319912b8e1ed57d8aa2ba05019714cf665c59b' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/layout/homepage.tpl',
      1 => 1466815474,
      2 => 'file',
    ),
    '313ac00233de87773c824bcfb9875d2563d8ac65' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/elements/paginate.tpl',
      1 => 1466815964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670058063576dd7dbceb9f1-35130235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'config' => 0,
    'homepage' => 0,
    'appName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_576dd7dbdc08b1_85203648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576dd7dbdc08b1_85203648')) {function content_576dd7dbdc08b1_85203648($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/okeowoad/public_html/site/assets/cache/FileCompiler/site/modules/TemplateEngineSmarty/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<!--[if IE 9]>    
<html class="ie9">
   <![endif]-->
<html lang="en-US">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <link href="" rel="shortcut icon"/>
                <title>
                    <?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>

                </title>
                <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" id="tk-shortcodes-fap-css" media="all" rel="stylesheet" type="text/css"/>
                <link href="//fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C300italic%2C400italic%2C500%2C500italic%2C700%2C700italic&subset=latin%2Clatin-ext" id="huntt-google-fonts-css" media="all" rel="stylesheet" type="text/css"/>
                <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/layouts/icons.css" id="huntt-icons-css" media="all" rel="stylesheet" type="text/css"/>
                <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/layouts/jquery.mCustomScrollbar.min.css" id="huntt-mscrollstyle-css" media="all" rel="stylesheet" type="text/css"/>
                <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/fancybox/fancybox.css" id="huntt-fancybox-style-css" media="all" rel="stylesheet" type="text/css"/>
                <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/style.css" id="huntt-style-css" media="all" rel="stylesheet" type="text/css"/>
                <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/jquery.js" type="text/javascript">
                </script>
                <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/loader/preloader.js" type="text/javascript">
                </script>
                <meta content="article" property="og:type"/>
                <meta content="<?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
" property="og:title"/>
                <meta content="<?php echo $_smarty_tpl->tpl_vars['page']->value->url;?>
" property="og:url"/>
                <meta content="<?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
" property="og:description"/>
                <meta content="2015-04-24T13:48:22+00:00" property="article:published_time"/>
                <meta content="2015-11-27T11:39:05+00:00" property="article:modified_time"/>
                <meta content="Huntt" property="og:site_name"/>
                <meta content="https://s0.wp.com/i/blank.jpg" property="og:image"/>
                <meta content="en_US" property="og:locale"/>
                <meta content="summary" name="twitter:card"/>
                <style media="screen" type="text/css">
                    a {
            -webkit-transition: all .3s;
            -moz-transition: all .3s;
            -ms-transition: all .3s;
            -o-transition: all .3s;
            transition: all .3s;
            }
            .site-header {
            background-color: ;
            }
            .home #primary,
            .archive #primary,
            .search #primary,
            .index #primary {
            background-color: #;
            }
            .nav-menu a {
            color: ;
            }
            .nav-menu a:hover {
            color: ;
            }
            .site-info,
            .site-info a {
            color: ;
            }
            .site-info a:hover {
            color: ;
            }
            .site-info a {
            color: ;
            }
            .site-title a {
            color: ;
            }
            .site-description {
            color: ;
            }
            .search-big__trigger,
            .icon-close,
            .search-big .search-form .search-field,
            .search-big .search-form input[type="search"]:focus,
            .searchwp-live-search-result > p > a,
            .searchwp-live-search-result > p a,
            body .searchwp-live-search-result p,
            .search .page-title span,
            .search .page-title,
            .searchwp-live-search-no-results em {
            color: ;
            }
            .search-big .search-form .search-field::-webkit-input-placeholder{
            color: ;
            opacity: .5;
            }
            .search-big .search-form .search-field::-moz-placeholder {
            color: ;
            opacity: .5;
            }
            /* Social Menu */
            .social-menu a {
            color: ;
            }
            .social-menu a:hover {
            color: ;
            }
                </style>
            </meta>
        </meta>
    </head>
    <body class="single single-post postid-38 single-format-standard group-blog has-sidebar">
        <div class="hfeed site" id="page">
            <a class="skip-link screen-reader-text" href="#content">
                Skip to content
            </a>
            <!-- THEME SEARCH -->
            <div class="search-big">
                <form action="http://demos.themeskingdom.com/huntt" class="search-form" method="get" role="search">
                    <label>
                        <span class="screen-reader-text">
                            Search for:
                        </span>
                        <input autocomplete="off" class="search-field" data-swpconfig="default" data-swpengine="default" data-swplive="true" name="s" placeholder="Search" title="Search for:" type="search" value="">
                        </input>
                    </label>
                    <input class="search-submit" type="submit" value="Search">
                    </input>
                </form>
            </div>
            <a class="search-big__trigger" href="#">
                <i class="icon-search">
                </i>
            </a>
            <a class="search-big__close" href="#">
                <i class="icon-close">
                </i>
            </a>
            <!-- .search-big  -->
            <header class="site-header" id="masthead" role="banner">
                <div class="site-branding">
                    <!-- Logo -->
                    <h1 class="site-title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['homepage']->value->url;?>
" rel="home">
                            <?php echo $_smarty_tpl->tpl_vars['appName']->value;?>

                        </a>
                    </h1>
                    <h2 class="site-description">
                    </h2>
                </div>
                <!-- .site-branding -->
                <!-- NAVIGATION -->
                <?php echo $_smarty_tpl->getSubTemplate ('../elements/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <!-- #site-navigation -->
            </header>
            <!-- #masthead -->
            <div class="site-content" id="content">
                
    <div id="primary" class="content-area">
                  <main id="main" class="site-main" role="main">
                     <article id="post-38" class="post-38 post type-post status-publish format-standard hentry category-design category-fashion category-interview tag-apparel tag-clothing tag-design tag-menswear tag-scott-sasso tag-streetwear">
                        <header class="entry-header">
                           <div class="entry-meta">
                              <span class="posted-on"><time class="entry-date published" datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->published,"%A, %e %B %Y");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->published,"%A, %e %B %Y");?>
</time><time class="updated" datetime="2015-11-27T11:39:05+00:00"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->modified,"%A, %e %B %Y");?>
</time></span><span class="cat-links"><a href="http://demos.themeskingdom.com/huntt/category/design/" rel="category tag">Design</a> <a href="http://demos.themeskingdom.com/huntt/category/fashion/" rel="category tag">Fashion</a> <a href="http://demos.themeskingdom.com/huntt/category/interview/" rel="category tag">Interview</a></span>			
                           </div>
                           <!-- .entry-meta -->
                           <h1 class="entry-title"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

                        </div>
                        <!-- .entry-content -->
                     </article>
                     <!-- #post-## -->
                     <!-- Display tags and post navigation -->
                   
                     <?php /*  Call merged included template "../elements/paginate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('../elements/paginate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '670058063576dd7dbceb9f1-35130235');
content_576dd7dbd97628_70599770($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../elements/paginate.tpl" */?>
                     
                  </main>
                  <!-- #main -->
               </div>

                <!-- #primary -->
                <?php echo $_smarty_tpl->getSubTemplate ('../elements/rsidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <!-- #secondary -->
            </div>
            <!-- #content -->
            <?php echo $_smarty_tpl->getSubTemplate ('../elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <a class="back-to-top" href="#">
                <i class="icon-left">
                </i>
            </a>
        </div>
        <!-- #page -->
        <div style="display:none">
        </div>
        <style type="text/css">
            .searchwp-live-search-results {
            opacity:0;
            transition:opacity .25s ease-in-out;
            -moz-transition:opacity .25s ease-in-out;
            -webkit-transition:opacity .25s ease-in-out;
            height:0;
            overflow:hidden;
            z-index:9999;
            position:absolute;
            display:none;
            }
            .searchwp-live-search-results-showing {
            display:block;
            opacity:1;
            height:auto;
            overflow:auto;
            }
            .searchwp-live-search-no-results {
            padding:3em 2em 0;
            text-align:center;
            }
        </style>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/navigation.js" type="text/javascript">
        </script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/skip-link-focus-fix.js" type="text/javascript">
        </script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/masonry.min.js" type="text/javascript">
        </script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/infinite-scroll/infinite-scroll.min.js" type="text/javascript">
        </script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/fancybox/fancybox.pack.js" type="text/javascript">
        </script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/fancybox/helpers/jquery.fancybox-media.js" type="text/javascript">
        </script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript">
        </script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/js/common.js" type="text/javascript">
        </script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/inc/apis/live-ajax-search/assets/javascript/searchwp-live-search.min.js" type="text/javascript">
        </script>

    </body>
    
    <script>
   $(document).ready(function(){
       $("ul").removeClass("nav-menu");
   })
   </script>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2016-06-24 21:01:15
         compiled from "/home/okeowoad/public_html/site/templates/elements/paginate.tpl" */ ?>
<?php if ($_valid && !is_callable('content_576dd7dbd97628_70599770')) {function content_576dd7dbd97628_70599770($_smarty_tpl) {?><nav class="navigation post-navigation" role="navigation">
                        <h2 class="screen-reader-text">Post navigation</h2>
                        <div class="nav-links">
                           <div class="nav-previous"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->prev()->url;?>
" rel="prev"><i class="icon-left"></i><span>Previous</span><?php echo $_smarty_tpl->tpl_vars['page']->value->prev()->title;?>
</a></div>
                           <div class="nav-next"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value->next()->url;?>
" rel="next"><i class="icon-right"></i><span>Next</span><?php echo $_smarty_tpl->tpl_vars['page']->value->next()->title;?>
</a></div>
                        </div>
                     </nav><?php }} ?>
