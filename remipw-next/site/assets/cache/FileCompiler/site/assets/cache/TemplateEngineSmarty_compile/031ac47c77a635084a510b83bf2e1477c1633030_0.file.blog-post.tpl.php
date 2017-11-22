<?php
/* Smarty version 3.1.29, created on 2017-11-15 10:38:02
  from "C:\wamp2\www\remipw-next\site\templates\views\blog-post.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0c5f5a95e9f9_72933219',
  'file_dependency' => 
  array (
    '031ac47c77a635084a510b83bf2e1477c1633030' => 
    array (
      0 => 'C:\\wamp2\\www\\remipw-next\\site\\templates\\views\\blog-post.tpl',
      1 => 1486726358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/plain.tpl' => 1,
    'file:../elements/paginate.tpl' => 1,
  ),
),false)) {
function content_5a0c5f5a95e9f9_72933219 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_5235336085a0c5f591db451_29900148',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layout/plain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:blog-post.tpl */
function block_5235336085a0c5f591db451_29900148($_smarty_tpl, $_blockParentStack) {
?>


    <?php echo $_smarty_tpl->tpl_vars['page']->value->blog_body;?>

<div class="tag-links">
    <span class="tags">
        Tags:
                        <?php
$_from = $_smarty_tpl->tpl_vars['postags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tag_0_saved_item = isset($_smarty_tpl->tpl_vars['tag']) ? $_smarty_tpl->tpl_vars['tag'] : false;
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$__foreach_tag_0_saved_local_item = $_smarty_tpl->tpl_vars['tag'];
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value->url;?>
" rel="tag">
            <?php echo $_smarty_tpl->tpl_vars['tag']->value->title;?>

        </a>
        <?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_0_saved_local_item;
}
if ($__foreach_tag_0_saved_item) {
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_0_saved_item;
}
?>
    </span>
    <br><br>
    <?php echo $_smarty_tpl->tpl_vars['page']->value->blog_comments->render();?>

                           <?php echo $_smarty_tpl->tpl_vars['page']->value->blog_comments->renderForm();?>

</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../elements/paginate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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

         
<?php
}
/* {/block 'content'} */
}
