<div class="app-alert">
    </div>

    
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo Utils::GetCurrentImagePath($data['id'],1)?>"
         data-natural-width="1400">
</section>
<div class="collapse" id="collapseMap">
    <div id="qp_map-map-canvas"></div></div>
<!--publicidad-->

<div class="container margin_60_35">
    <div class="publicidad">
            </div>
    <div class="row">
        <div class="col-md-12">
            
<div class="box_style_2 rest-data">
    <div class="row">
        <div class="col-md-2 col-sm-3">
            <img src="<?php echo Utils::GetCurrentImagePath($data['id'],2)?>" class="img-responsive img-thumbnail"
                 alt="<?php echo ($data['name']) ?>" style="width: 100%;">


                       
                    </div>
        <div class="col-md-10 col-sm-9">
          
            <h3><?php echo strip_tags(($data['name']));?></h3>
            <p><strong><!-- Dirección:--></strong> <?php //echo ($data['adress']) ?>  
                <strong><!-- Telefono:--></strong> <?php //echo ($data['phone']) ?> </p>
            <p></p>
            <p><!--  Categoria:--> <a href="#"><?php // echo ($data['name']) ?> </a></p>
            <p class="hidden">
                                    <a href="tel://4486086" class="phone">
                        <i class="glyphicon glyphicon-phone"></i>
                        <?php echo ($data['name']) ?><br>
                        (
                        <small><?php echo ($data['adress']) ?></small>
                        )<br><br>
                    </a>
                            </p>
                       
    
      
        <div class="rating" style="color: #555;">
            <i id ="star1" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],1)) echo "voted"?>"></i>
            <i id ="star2" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],2)) echo "voted"?>"></i>
            <i id ="star3" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],3)) echo "voted"?>"></i>
            <i id ="star4" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],4)) echo "voted"?>"></i>
            <i id ="star5" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],5)) echo "voted"?>"></i>
           <span id ="countStars" style="color: #5d5d5d;font-weight: bolder;">(<?php echo $data["quality"]?>)</span>
        </div>
   

  
   

        </div>
    </div>

</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p>
                <a class="btn_map" data-toggle="collapse" aria-expanded="false"
                   aria-controls="collapseMap">Informacion</a>
            </p>

            <div class="box_style_2">
                
<h4 class="nomargin_top">Direccion:</h4>
<ul class="opening_list">
            <li> 
                <?php echo ($data['adress']) ?></li>
    </ul>
            </div>

            <div class="box_style_2">
                
<h4 class="nomargin_top">Horarios de atención <i class="icon_clock pull-right"></i></h4>
<ul class="opening_list">
            <li>
            <?php echo ($data['workingHours']) ?>
        </li>
    </ul>
            </div>

            <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_headphones"></i>
                <h4>Telefono</span></h4>
                <a href="<?php echo ($data['phone']) ?>" class="phone"><?php echo ($data['phone']) ?></a>
                <small></small>
            </div>
        </div>

        <div class="col-md-8">
            <div class="box_style_2">
                <h2 class="inner">Descripción</h2>

                
                <h3>Acerca de <?php echo ($data['name']) ?></h3>

                "<?php echo ($data['description']) ?>"
                
<div id="summary_review">
    <div id="general_rating">
       <div id="totalComments"><?php  echo $data['totalComments']?>         opiniones</div>
        <div class="rating">
            <a href="#" data-toggle="modal" data-target="#myReview" style="color:#555"><i id="start1" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],1)) echo "voted"?>"></i></a>
            <a href="#" data-toggle="modal" data-target="#myReview" style="color:#555"><i id="start2" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],2)) echo "voted"?>"></i></a>
            <a href="#" data-toggle="modal" data-target="#myReview" style="color:#555"><i id="start3" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],3)) echo "voted"?>"></i></a>
            <a href="#" data-toggle="modal" data-target="#myReview" style="color:#555"><i id="start4" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],4)) echo "voted"?>"></i></a>
            <a href="#" data-toggle="modal" data-target="#myReview" style="color:#555"><i id="start5" class="icon_star <?php if (Utils::CalculateStarts($data["quality"],5)) echo "voted"?>"></i></a>
        </div>
    </div>

    <!-- End row -->
    <hr class="styled">
  
           
    </div>
<div id="opinions">
         <?php foreach ($data["comments"] as $comment) { ?>    
         	<div class="review_strip_single">
   
                <small><?php echo ($comment['date']) ?></small>
                <h4><?php echo ($comment['facebook_name']) ?></h4>
            
               <?php echo ($comment['description']) ?>
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                      
                    </div>
                    <div class="col-md-3">
                       
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
                <!-- End row -->
            </div>
		 <?php } ?>
</div>
    </div>

            </div>
            <!-- End box_style_1 -->
        </div>
    </div>
</div>



