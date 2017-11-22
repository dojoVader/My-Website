{extends '../layout/blog.tpl'}

{block name="content"}
<ul id="post-list">
    {foreach $posts as $post}
    <li>
        <a href="{$post->url}">
            <aside class="dates">
                {$post->published|date_format:"%a %e, %y"}
            </aside>
        </a>
        <a href="{$post->url}">
            {$post->title}
            
        </a>
    </li>
    {/foreach}
</ul>
<div class="pagination">
    {$posts->renderPager()}
    
</div>

{/block}
