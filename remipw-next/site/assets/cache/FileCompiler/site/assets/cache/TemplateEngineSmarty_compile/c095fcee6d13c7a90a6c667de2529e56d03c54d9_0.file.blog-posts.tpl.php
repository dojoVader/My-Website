<?php
/* Smarty version 3.1.29, created on 2017-10-10 02:59:03
  from \ProcessWire\wire("config")->paths->root . "site/templates/views/blog-posts.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59dc6fb7718871_55146365',
  'file_dependency' => 
  array (
    'c095fcee6d13c7a90a6c667de2529e56d03c54d9' => 
    array (
      0 => \ProcessWire\wire("config")->paths->root . 'site/templates/views/blog-posts.tpl',
      1 => 1484488837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/blog.tpl' => 1,
  ),
),false)) {
function content_59dc6fb7718871_55146365 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/modules/TemplateEngineSmarty/smarty/libs/plugins/modifier.date_format.php',array('includes'=>true,'namespace'=>true,'modules'=>false,'skipIfNamespace'=>false)));
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_123720479859dc6fb75f6b88_69253982',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layout/blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:blog-posts.tpl */
function block_123720479859dc6fb75f6b88_69253982($_smarty_tpl, $_blockParentStack) {
?>

<ul id="post-list">
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
    <?php
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_local_item;
}
if ($__foreach_post_0_saved_item) {
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_item;
}
?>
</ul>
<div class="pagination">
    <?php echo $_smarty_tpl->tpl_vars['posts']->value->renderPager();?>

    
</div>

<?php
}
/* {/block 'content'} */
}
