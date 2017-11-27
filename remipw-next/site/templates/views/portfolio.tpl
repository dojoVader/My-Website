{extends '../layout/plain.tpl'}

{block name="content"}
 
                         {foreach $page->works as $image}
                              <img src="{$image->url}" alt="{$image->description}">
                              <br><br>
                           {/foreach}
                           {$page->body}
                  
                   
                     {include '../elements/paginate.tpl'}
                     
                  </main>
                  <!-- #main -->
               </div>
{/block}
