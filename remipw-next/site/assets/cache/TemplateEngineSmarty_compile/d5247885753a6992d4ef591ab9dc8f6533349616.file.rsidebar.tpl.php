<?php /* Smarty version Smarty-3.1.18, created on 2016-06-24 20:59:16
         compiled from "/home/okeowoad/public_html/site/templates/elements/rsidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1935417475576dd764b6d553-80145532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5247885753a6992d4ef591ab9dc8f6533349616' => 
    array (
      0 => '/home/okeowoad/public_html/site/templates/elements/rsidebar.tpl',
      1 => 1466815969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1935417475576dd764b6d553-80145532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aboutNode' => 0,
    'recentposts' => 0,
    'post' => 0,
    'hometags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_576dd764b9dc10_48030001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576dd764b9dc10_48030001')) {function content_576dd764b9dc10_48030001($_smarty_tpl) {?> <div id="sidebar" class="widget-area" role="complementary">
                  <aside id="text-2" class="widget widget_text">
                     <h1 class="widget-title">About</h1>
                     <div class="textwidget">
                        <?php echo $_smarty_tpl->tpl_vars['aboutNode']->value->summary;?>

                     </div>
                  </aside>
                  <aside id="search-3" class="widget widget_search">
                     <form method="get" id="searchform" class="search-form" action="http://demos.themeskingdom.com/huntt/">
                        <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" name="s" placeholder="Search" class="search-field" value="" title="Search for:">
                        </label>
                        <input type="submit" id="searchsubmit" class="search-submit" value="Search">
                     </form>
                  </aside>
                  <aside id="recent-posts-3" class="widget widget_recent_entries">
                     <h1 class="widget-title">Recent Posts</h1>
                     <ul>
                     
                     <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                         <li>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</a>
                        </li>
                     <?php } ?>
                     
                        
                      
                     </ul>
                  </aside>
             
                
                  <aside id="tag_cloud-2" class="widget widget_tag_cloud">
                     <h1 class="widget-title">Tags</h1>
                     <div class="tagcloud">
                     <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hometags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                     <a href='<?php echo $_smarty_tpl->tpl_vars['tag']->value->url;?>
' class='tag-link-15' title='1 topic' style='font-size: 14px;'><?php echo $_smarty_tpl->tpl_vars['tag']->value->title;?>
</a>
                     <?php } ?>   
                        
                     </div>
                  </aside>
             
               </div>
<?php }} ?>
