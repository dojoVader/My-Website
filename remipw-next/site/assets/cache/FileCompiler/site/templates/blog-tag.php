<?php 

$found=$pages->find("blog_tags=$page, limit=10");

$view->set("posts",$found);
    
