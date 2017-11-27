<?php
/* Smarty version 3.1.29, created on 2017-11-15 09:36:01
  from "C:\wamp2\www\remipw-next\site\templates\elements\nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0c50d1d834b0_51541275',
  'file_dependency' => 
  array (
    'b3f23ac06721d04ac2fd42abc50118f2b94f248d' => 
    array (
      0 => 'C:\\wamp2\\www\\remipw-next\\site\\templates\\elements\\nav.tpl',
      1 => 1484542270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0c50d1d834b0_51541275 ($_smarty_tpl) {
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
