<?php
/* Smarty version 3.1.29, created on 2017-10-09 11:07:48
  from "/home/okeowoad/public_html/site/templates/elements/nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59db90c4972e03_37410941',
  'file_dependency' => 
  array (
    '3df46f3c15fb16bb48cbbf10d0b1bdc77e1dce89' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/elements/nav.tpl',
      1 => 1484542269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59db90c4972e03_37410941 ($_smarty_tpl) {
?>
<nav class="site-nav">
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
  </header><?php }
}
