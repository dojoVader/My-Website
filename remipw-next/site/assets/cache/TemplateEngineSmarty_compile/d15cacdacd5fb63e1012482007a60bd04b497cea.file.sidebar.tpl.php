<?php /* Smarty version Smarty-3.1.18, created on 2016-06-24 20:54:32
         compiled from "/home/okeowoad/public_html/site/templates/elements/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352134250576dd6480343a7-98229676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd15cacdacd5fb63e1012482007a60bd04b497cea' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/elements/sidebar.tpl',
      1 => 1466815969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352134250576dd6480343a7-98229676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menunav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_576dd648039a82_01669726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576dd648039a82_01669726')) {function content_576dd648039a82_01669726($_smarty_tpl) {?><nav class="main-navigation" id="site-navigation" role="navigation">
    <button aria-controls="primary-menu" aria-expanded="false" class="menu-toggle">
        <span>
            Primary Menu
        </span>
    </button>
    <div class="menu-main-menu-container">
        <?php echo $_smarty_tpl->tpl_vars['menunav']->value->render(array('parent_class'=>'okeowo','outer_tpl'=>'<ul class="menu">||</ul>','inner_tpl'=>'<ul class="sub_menu">||</ul>'));?>

    </div>
</nav><?php }} ?>
