<?php 

/**
 * Blog Home template
 * Demo template file populated with MarkupBlog output and additional custom code for the Blog Home Page
 *
 */

    //CALL THE MODULE - MarkupBlog
    $blog = $modules->get("MarkupBlog"); 
    
    //subnav
    //we expect only one such page. we do it this way in this demo to accomodate different blog styles
    $categories = $pages->get('template=blog-categories');
//    $postCategories = $blog->renderNav($categories->title, $categories->children,'',true);

    //main content

    //number of posts to show on Blog Home Page (pagination kicks in if more posts than limit)
    $settings = $pages->get('template=blog-settings');//we get this from the settings page. In your own install you can use a more specific selector
    $limit = $settings->blog_quantity;
    $content = '';

    //Render limited number of posts on Blog Home Page
    $content .= $blog->renderPosts("limit=$limit",true);


	//include the main/common markup
    require_once("blog-main.inc");


    