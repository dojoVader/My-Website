<?php
 
  //Get the About page
  $aboutPage = $pages->get("/about");
  $view->set("about",$aboutPage);

  //Get the Top 6 Blog Posts
  $found=$pages->find("limit=6,include=hidden,template=blog-post,sort=-blog_date");
  $view->set("posts",$found);
