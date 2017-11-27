<?php
/* Smarty version 3.1.29, created on 2017-10-09 21:30:22
  from "/home/okeowoad/public_html/site/templates/views/portfolio.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59dc22aee9fa13_92095191',
  'file_dependency' => 
  array (
    'cc4d33d71310329b2a0b9770964435d6e8b6fa5b' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/views/portfolio.tpl',
      1 => 1484541686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/plain.tpl' => 1,
    'file:../elements/paginate.tpl' => 1,
  ),
),false)) {
function content_59dc22aee9fa13_92095191 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_209035067559dc22aee4a0a3_45734095',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layout/plain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:portfolio.tpl */
function block_209035067559dc22aee4a0a3_45734095($_smarty_tpl, $_blockParentStack) {
?>

 
                         <?php
$_from = $_smarty_tpl->tpl_vars['page']->value->works;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                              <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->description;?>
">
                              <br><br>
                           <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
                           <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

                  
                   
                     <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../elements/paginate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                     
                  </main>
                  <!-- #main -->
               </div>
<?php
}
/* {/block 'content'} */
}
