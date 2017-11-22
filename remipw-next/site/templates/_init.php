<?php
class ProcessUtil{

	public function resizeImage($page,$w,$h){
		$image=$page->size($w,$h,array('quality' => 100));
		return $image->url;
	}
}

$pwinstance=new ProcessUtil();

/**
 * Initialize variables output in _main.php
 *
 * Values populated to these may be changed as desired by each template file.
 * You can setup as many such variables as you'd like. 
 *
 * This file is automatically prepended to all template files as a result of:
 * $config->prependTemplateFile = '_init.php'; in /site/config.php. 
 *
 * If you want to disable this automatic inclusion for any given template, 
 * go in your admin to Setup > Templates > [some-template] and click on the 
 * "Files" tab. Check the box to "Disable automatic prepend file". 
 *
 */

// Variables for regions we will populate in _main.php. Here we also assign 
// default values for each of them.
$title = $page->get('headline|title'); // headline if available, otherwise title
$content = $page->body;
$sidebar = $page->sidebar;

/**
 * Content Element
 */
$postCategories="";


// We refer to our homepage a few times in our site, so we preload a copy 
// here in a $homepage variable for convenience. 
$homepage = $pages->get('/'); 
$childrenMenu=$homepage->children;
$description=$page->description;
$firstContent=$pages->get("template=blog-post,limit=1,sort=date");

$view->set("appName","Okeowo Aderemi");
//Set the About Node to the SmartyContext
$view->set("aboutNode",$pages->get('/about'));
//Set the Total Posts
$posts = $pages->find("template=blog-post, sort=-blog_date,limit=5");
$view->set("recentposts",$posts);

//Get the tags for the whole system
$tags=$pages->get("/articles/tags/")->children;




$view->set("pwutil",$pwinstance);
$view->set("homepage",$homepage);

