{extends '../layout/homepage.tpl'}

{block name="content"}
    <div id="primary" class="content-area">
                  <main id="main" class="site-main" role="main">
                     <article id="post-38" class="post-38 post type-post status-publish format-standard hentry category-design category-fashion category-interview tag-apparel tag-clothing tag-design tag-menswear tag-scott-sasso tag-streetwear">
                        <header class="entry-header">
                           <div class="entry-meta">
                              <span class="posted-on"><time class="entry-date published" datetime="{$page->published|date_format:"%A, %e %B %Y"}">{$page->published|date_format:"%A, %e %B %Y"}</time><time class="updated" datetime="2015-11-27T11:39:05+00:00">{$page->modified|date_format:"%A, %e %B %Y"}</time></span><span class="cat-links"><a href="http://demos.themeskingdom.com/huntt/category/design/" rel="category tag">Design</a> <a href="http://demos.themeskingdom.com/huntt/category/fashion/" rel="category tag">Fashion</a> <a href="http://demos.themeskingdom.com/huntt/category/interview/" rel="category tag">Interview</a></span>			
                           </div>
                           <!-- .entry-meta -->
                           <h1 class="entry-title">{$page->title}</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           {$page->body}
                           {$contact->render()}
                        </div>
                        <!-- .entry-content -->
                     </article>
                     <!-- #post-## -->
                     <!-- Display tags and post navigation -->
                   
                     {include '../elements/paginate.tpl'}
                     
                  </main>
                  <!-- #main -->
               </div>
{/block}
