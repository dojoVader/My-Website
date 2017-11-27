<?php
/* Smarty version 3.1.29, created on 2017-10-09 14:01:22
  from \ProcessWire\wire("config")->paths->root . "site/templates/views/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59dbb972e9e5a2_67621334',
  'file_dependency' => 
  array (
    '92bccdea1f493580355670030f122e1791e373a0' => 
    array (
      0 => \ProcessWire\wire("config")->paths->root . 'site/templates/views/home.tpl',
      1 => 1484488305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/homepage.tpl' => 1,
  ),
),false)) {
function content_59dbb972e9e5a2_67621334 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/modules/TemplateEngineSmarty/smarty/libs/plugins/modifier.date_format.php',array('includes'=>true,'namespace'=>true,'modules'=>false,'skipIfNamespace'=>false)));
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_167293568059dbb972cfed06_40423855',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "javascript", array (
  0 => 'block_164786097759dbb972e889b5_98140051',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layout/homepage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:home.tpl */
function block_167293568059dbb972cfed06_40423855($_smarty_tpl, $_blockParentStack) {
?>

    <div id="primary" class="content-area">
                  <main id="main" class="site-main" role="main">
                     <article id="post-38" class="post-38 post type-post status-publish format-standard hentry category-design category-fashion category-interview tag-apparel tag-clothing tag-design tag-menswear tag-scott-sasso tag-streetwear">
                        <header class="entry-header">
                           <div class="entry-meta">
                              <span class="posted-on"><time class="entry-date published" datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->published,"%A, %e %B %Y");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->published,"%A, %e %B %Y");?>
</time><time class="updated" datetime="2015-11-27T11:39:05+00:00"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->modified,"%A, %e %B %Y");?>
</time></span>
                              
                           </div>
                           <!-- .entry-meta -->
                           <h1 class="entry-title"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

                        </div>
                        <!-- .entry-content -->
                     </article>
                     <!-- #post-## -->
                     <!-- Display tags and post navigation -->
               
                     
                  </main>
                  <!-- #main -->
               </div>
<?php
}
/* {/block 'content'} */
/* {block 'javascript'}  file:home.tpl */
function block_164786097759dbb972e889b5_98140051($_smarty_tpl, $_blockParentStack) {
?>

 

    <?php echo '<script'; ?>
>

   var SearchComponent=null;
   var ResultComponent=null; 
   $(document).ready(function(){
       $("ul").removeClass("nav-menu");

       // Search Components
       SearchComponent=new Vue({
        el:'#searchModule',
        data:{
          keyword:null
        },
        methods:{
            hide:function(){
              ResultComponent.$set('results',[]);
            },
            search:function(){
              var data=this.keyword;
              if(data.length <= 0){
               this.hide();
               return false;
              }
              var request=$.ajax({
                method:"POST",
                url:"<?php echo $_smarty_tpl->tpl_vars['page']->value->url;?>
",
                data:{
                  search:data
                },
                dataType:'json'
              });
              request.done(function(msg){
                ResultComponent.$set('results',msg);
              });

              request.fail(function(error,status){
                console.log(error,status);
              })
            }
        }
       });

       var ResultComponent=new Vue({
         el:'#searchResult',
         data:{
            results:[]
         }
       })
   })
   <?php echo '</script'; ?>
>
<?php
}
/* {/block 'javascript'} */
}
