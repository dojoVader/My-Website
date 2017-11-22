<?php
$u = $users->get('admin'); // or whatever your username is
$u->of(false);
$u->pass = 'admin';
$u->save();
//Search Ajax
if($config->ajax){
    $post=$sanitizer->text($input->post->text('search'));
    if($post){
        $string=$sanitizer->selectorValue($post);
        $selector = "title|blog_body%=$string, limit=50";
        
            $selector .= ", has_parent!=2";
            $matches=$pages->find($selector);
            if($matches->count){
                $pageResult=[];
                foreach ($matches as $pageFound) {

                    
                    $pageResult[]=array(
                    'id' => $pageFound->id,
                    'parent_id' => $pageFound->parent_id,
                    'templates_id' => $pageFound->templates_id,
                    'name' => $pageFound->name,
                    'status' => $pageFound->status,
                    'sort' => $pageFound->sort,
                    'sortfield' => $pageFound->sortfield,
                    'numChildren' => $pageFound->numChildren,
                    'template' => $pageFound->template->name,
                    'parent' => $pageFound->parent->path,
                    'data' => array(),
                    "title"=>$pageFound->title,
                    "url"=>$pageFound->url,
                    "month"=>date("M",$page->published),
                    "day"=>date("d",$page->published)
                );
                }
                echo json_encode($pageResult);
            }else{
                echo json_encode(["message"=>"There are no search records"]);
            } 
        
    
    }
  exit();  
}
