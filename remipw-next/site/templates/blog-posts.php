<?php 

$found=$pages->find("limit=10,include=hidden,template=blog-post,sort=-blog_date");

$view->set("posts",$found);



