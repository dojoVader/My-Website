<?php
/* Smarty version 3.1.29, created on 2017-10-09 12:03:12
  from "/home/okeowoad/public_html/site/templates/views/basic-page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59db9dc0995df5_10119238',
  'file_dependency' => 
  array (
    '5f1dcee17fa22b9c1b917186e6ac605a509fa316' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/views/basic-page.tpl',
      1 => 1484541817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/plain.tpl' => 1,
  ),
),false)) {
function content_59db9dc0995df5_10119238 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_7341838659db9dc0920579_54888952',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layout/plain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:basic-page.tpl */
function block_7341838659db9dc0920579_54888952($_smarty_tpl, $_blockParentStack) {
?>

    
                          
                           <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

                           
                       
<?php
}
/* {/block 'content'} */
}
