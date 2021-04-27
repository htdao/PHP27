<?php 

   include_once('header.php');
 ?>
 	<div class="container-fluid bg-dark">
 		<!-- <h3 class="text-center" style="color: white"><?= $detail['name'] ?></h3> -->
 		<!-- <p></p> -->
 		<!-- <img class="" style="height: 600px; width: 900px; margin-left: 17%" src="public/images/postImg/<?= $detail['thumbnail'] ?>"> -->
 		
 		<!-- <div class="" style="padding-bottom: 20px; width: 900px; margin-left: 17%"">
 			<p class="" style="color: red; margin-top: 20px"><?= $detail['description'] ?></p>
 			<p class="" style="color: white; margin-top: 20px"><?= $detail['content'] ?></p>
 		</div> -->
 		<?php 
                        foreach ($postCate as $key => $value) {
                      ?>
                      <div class="container" style="padding-top: 50px">
                      <div class="col-sm-12">
                        <article class="post" style="color: white">
                        	<header style="color: white">
                              <!-- blog post header -->
                              <h4><a style="color: white" href="?mod=user&act=detail&admin=user&id=<?= $value['id'] ?>"><?= $value['title'] ?></a></h4>
                           </header>
                           <div class="post-media">
                              <a href="?mod=user&act=detail&admin=user&id=<?= $value['id'] ?>">
                              <img alt class="img-responsive" src="public/images/postImg/<?= $value['thumbnail'] ?>">
                              </a>
                           </div>
                           
                           <div class="post-content">
                              <p><?= $value['description'] ?></p>
                           </div>
                        </article>
                     </div>
                     </div>
        <?php } ?>
 	</div>
<?php 
   require_once('footer.php');
 ?>