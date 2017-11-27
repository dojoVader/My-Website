<?php
/* Smarty version 3.1.29, created on 2017-11-25 07:01:55
  from "/var/www/MyWebSite/remipw-next/site/templates/elements/nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a195bb3ca33d8_42656294',
  'file_dependency' => 
  array (
    '294e761e0a75f2bd1b075be7adfe84b6108d4236' => 
    array (
      0 => '/var/www/MyWebSite/remipw-next/site/templates/elements/nav.tpl',
      1 => 1511555088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a195bb3ca33d8_42656294 ($_smarty_tpl) {
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
