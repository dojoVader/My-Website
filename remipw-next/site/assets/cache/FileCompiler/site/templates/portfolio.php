<!-- Portfolio list-->
<?php
ob_start();
?>
<?php 

if($page->works):

?>
<div class="titles">
                    

                     <div class="nav">   
                     <?php  if($page->prev->url):?>                     
                        <span class="prev">
                            <a href="<?php echo $page->prev->url ?>">Previous Work</span>
                    <?php endif; ?>
                         — 
                         <?php  if($page->next->url):?>                     
                        <span class="next">
                            <a href="<?php echo $page->next->url ?>">Next Work</span>
                    <?php endif; ?>                        
                    </div>
 </div>
 <div class="clearfix"></div>
 <ul class="case">
     <?php foreach ($page->works as $images):
         $thumb=$images->size(800,500);
      ?>
                     <li>
                        <img src="<?php echo $thumb->url ?>" alt="">
                        <a href="<?php echo $thumb->url ?>" class="fancybox"><span class="overlay"></span></a>
                    </li>
     <?php 
     endforeach;
     ?>
                </ul>              
                <!-- End Portfolio list-->
<?php
endif;
$content=ob_get_clean().$content;

?>
</div>