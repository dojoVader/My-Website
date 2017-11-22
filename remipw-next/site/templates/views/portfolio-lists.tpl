{extends '../layout/blog.tpl'}

{block name="content"}
<ul id="post-list">
    {foreach $posts as $post}
    <li>
        <a href="{$post->url}">
            <aside class="dates">
                {$post->published|date_format:"%a %e, %Y"}
            </aside>
        </a>
        <a href="{$post->url}">
            {$post->title}
            <figure class="featured-image">
                <a class="fancybox " data-post_url="{$post->url}" href="{$post->url}">
                    <img alt="daw_chair" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" src="{$pwutil->resizeImage($post->works->first(),600,300)}">
                    </img>
                </a>
            </figure>
        </a>
    </li>
    {/foreach}
</ul>
<div class="pagination">
    {$posts->renderPager()}
</div>
{/block}
