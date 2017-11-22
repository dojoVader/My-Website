{extends '../layout/plain.tpl'}

{block name="content"}

    {$page->blog_body}
<div class="tag-links">
    <span class="tags">
        Tags:
                        {foreach $postags as $tag}
        <a href="{$tag->url}" rel="tag">
            {$tag->title}
        </a>
        {/foreach}
    </span>
    <br><br>
    {$page->blog_comments->render()}
                           {$page->blog_comments->renderForm()}
</div>
{include '../elements/paginate.tpl'}

<style>
    .CommentFormCite input, .CommentFormEmail input, .CommentFormWebsite input, .CommentFormText textarea {
    box-sizing: border-box;
    display: block;
    width: 100%;
    padding: 8%;
    border: 1px solid #d8d8d8;
}
p.CommentFormSubmit.CommentForm_submit button {
    padding: 2.5% 4%;
    /* width: 14%; */
    background: #1b95e0;
    border: none;
    border-radius: 4px;
    color: white;
    font-weight: bold;
}
input.website {
    height: 46px;
}
code{
    font-size: 13px;
}
</style>

         
{/block}
