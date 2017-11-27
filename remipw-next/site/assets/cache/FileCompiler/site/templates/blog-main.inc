<?php

/**
 * Blog Demo main markup include
 * Demo template file include
 *
 */

    //nav   
    $topNavItems = array();

    /*
        we need to get topNav items by their templates in order to adapt to different blog styles (1-4)
        of course, in your blog install, you would use a different method since you would know the blog style you selected!
    */
    $templates = array('blog-categories','blog-tags', 'blog-comments', 'blog-authors', 'blog-archives');

    foreach ($templates as $t) {

        $p = $pages->get("template=$t");
        if($p->id)  $topNavItems[] = $p;

    }

    $topNav = $blog->renderNav('', $topNavItems, $page);


?>

    

     
            
               
         
                <!-- CENTRE COLUMN - MAIN -->
                <?php
                        //if 'post author widget' is disabled, we want to style the end of the post using the css class 'no-author' (see further below in CENTRE COLUMN output)
                        //only applies to 'blog-post' pages
                        $noAuthor = $pages->get('template=blog-widget-basic, name=post-author, include=all')->is(\ProcessWire\Page::statusUnpublished) ? ' no-author' : '';
                 ?>
                 		
               
            	
          
      