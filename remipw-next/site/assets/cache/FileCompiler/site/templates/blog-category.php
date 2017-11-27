<?php 

/**
 * Category template
 * Demo template file populated with MarkupBlog output and additional custom code for a Blog Category
 *
 */

 //main content
 $posts = $pages->find("template=blog-post, blog_categories=$page");
 
 //grab some posts
 $view->set("posts",$posts);



  

 

