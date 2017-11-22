<?php /* Smarty version Smarty-3.1.18, created on 2017-01-15 23:51:15
         compiled from "/home/okeowoad/public_html/site/templates/elements/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1862909108587b76aa635870-52450221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df46f3c15fb16bb48cbbf10d0b1bdc77e1dce89' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/elements/nav.tpl',
      1 => 1484542269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1862909108587b76aa635870-52450221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_587b76aa642e47_87406411',
  'variables' => 
  array (
    'aboutNode' => 0,
    'pages' => 0,
    'homepage' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587b76aa642e47_87406411')) {function content_587b76aa642e47_87406411($_smarty_tpl) {?><nav class="site-nav">
    <div class="trigger">
      
        
        <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['aboutNode']->value->url;?>
">About</a>
        <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['pages']->value->get('/notes')->url;?>
">Journals</a>
        <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['pages']->value->get('/portfolio')->url;?>
">Works</a>
        <a class="page-link" target="_blank" href="https://ng.linkedin.com/in/okeowo-aderemi-82b75730">Linkedin</a>
        
      
        
      
        
      
        
      
     
      <a class="twitter page-link" href="https://twitter.com/qtguru"><span class="icon-twitter"></span></a>

    </div>
  </nav>
    <!-- The title of the site -->
  <header class="site-header">
    <a href="<?php echo $_smarty_tpl->tpl_vars['homepage']->value->url;?>
">
      <div class="avatar">
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->urls->templates;?>
assets/images/avatar.png" />
      </div>
    </a>
    <!-- <a class="site-title" href="/estivo/">fffabs</a> -->
  </header><?php }} ?>
