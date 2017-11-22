<?php
/* Smarty version 3.1.29, created on 2017-10-10 09:30:17
  from "/home/okeowoad/public_html/site/templates/views/blog-tag.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59dccb693357d7_04011848',
  'file_dependency' => 
  array (
    'e9c018768c4f79c60e2d0e9e8a312c536e544511' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/views/blog-tag.tpl',
      1 => 1484488306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/widescreen.tpl' => 1,
  ),
),false)) {
function content_59dccb693357d7_04011848 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_185249739159dccb69247262_79083086',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layout/widescreen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:blog-tag.tpl */
function block_185249739159dccb69247262_79083086($_smarty_tpl, $_blockParentStack) {
?>

    <div class="content-area archive" id="primary" style="height: auto;">
        <main class="site-main" id="main" role="main">
            <header class="page-header">
                <h1 class="page-title" style="outline: none;">
                    Tags: <?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>

                </h1>
            </header>
            <!-- .page-header -->
            <div class="row">
                <div class="grid-wrapper" style="position: relative; height: 438.468px;">
                    <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
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
                        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
                            <article class="post-329 post type-post status-publish format-quote hentry category-quote category-uncategorized post_format-post-format-quote col-lg-4 col-md-6 post-loaded animate" id="post-329">
                                <div class="entry-content">
                                    <h5>
                                        <?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>

                                    </h5>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
                                        Read more
                                    </a>

                                </div>
                                <!-- .entry-content -->
                            </article>
                        </a>
                    <?php
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_local_item;
}
if ($__foreach_post_0_saved_item) {
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_item;
}
?>
                    <!-- #post-## -->
                    <!-- Pagination -->
                    <div id="loading-is">
                    </div>

                </div>

                <!-- grid-wrapper -->
                <nav class="navigation paging-navigation">
                    <?php echo $_smarty_tpl->tpl_vars['posts']->value->renderPager();?>

                </nav>
            </div>
            <!-- row -->
        </main>
        <!-- #main -->
    </div>
<?php
}
/* {/block 'content'} */
}
