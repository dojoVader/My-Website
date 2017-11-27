<?php 

$found=$pages->find("limit=10,include=hidden,template=blog-post,sort=-blog_date");
$view->set("posts",$found);

//Find all the categories
$categories=$pages->find("include=hidden,template=blog-category,sort=-blog_date");
$view->set("categories",$categories);

