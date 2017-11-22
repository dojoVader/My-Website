{extends '../layout/widescreen.tpl'}

{block name="content"}
    <div class="content-area archive" id="primary" style="height: auto;">
        <main class="site-main" id="main" role="main">
            <header class="page-header">
                <h1 class="page-title" style="outline: none;">
                    Tags: {$page->title}
                </h1>
            </header>
            <!-- .page-header -->
            <div class="row">
                <div class="grid-wrapper" style="position: relative; height: 438.468px;">
                    {foreach $posts as $post}
                        <a href="{$post->url}">
                            <article class="post-329 post type-post status-publish format-quote hentry category-quote category-uncategorized post_format-post-format-quote col-lg-4 col-md-6 post-loaded animate" id="post-329">
                                <div class="entry-content">
                                    <h5>
                                        {$post->title}
                                    </h5>

                                    <a href="{$post->url}">
                                        Read more
                                    </a>

                                </div>
                                <!-- .entry-content -->
                            </article>
                        </a>
                    {/foreach}
                    <!-- #post-## -->
                    <!-- Pagination -->
                    <div id="loading-is">
                    </div>

                </div>

                <!-- grid-wrapper -->
                <nav class="navigation paging-navigation">
                    {$posts->renderPager()}
                </nav>
            </div>
            <!-- row -->
        </main>
        <!-- #main -->
    </div>
{/block}
