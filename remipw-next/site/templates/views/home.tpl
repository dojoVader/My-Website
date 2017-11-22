{extends '../layout/homepage.tpl'}

{block name="content"}
    <div id="primary" class="content-area">
                  <main id="main" class="site-main" role="main">
                     <article id="post-38" class="post-38 post type-post status-publish format-standard hentry category-design category-fashion category-interview tag-apparel tag-clothing tag-design tag-menswear tag-scott-sasso tag-streetwear">
                        <header class="entry-header">
                           <div class="entry-meta">
                              <span class="posted-on"><time class="entry-date published" datetime="{$page->published|date_format:"%A, %e %B %Y"}">{$page->published|date_format:"%A, %e %B %Y"}</time><time class="updated" datetime="2015-11-27T11:39:05+00:00">{$page->modified|date_format:"%A, %e %B %Y"}</time></span>
                              
                           </div>
                           <!-- .entry-meta -->
                           <h1 class="entry-title">{$page->title}</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           {$page->body}
                        </div>
                        <!-- .entry-content -->
                     </article>
                     <!-- #post-## -->
                     <!-- Display tags and post navigation -->
               
                     
                  </main>
                  <!-- #main -->
               </div>
{/block}
{block name="javascript"}
 

    <script>

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
                url:"{$page->url}",
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
   </script>
{/block}