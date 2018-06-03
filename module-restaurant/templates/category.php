<div class="app-alert">
    </div>
        <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="./img/banner-category.png"
                 data-natural-width="1400">
            <div id="subheader">
                <div id="sub_content">
                    <h1>Califica <?= ucwords($data["additionalData"]['category']);?>s aqui. </h1>
                </div>
            </div>
        </section>

        <div class="container margin_60_35">
            <div class="row">
        
                <div class="col-md-1">
                    
        </div>

        <div class="col-md-11">

            <div id="list-wrapper" class="list-wrapper">
                            
                    
                <?php foreach ($data["modelData"] as $restaurant) { ?> 
                <div data-key="39">
                <div class="strip_list wow fadeIn animated" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                           
                        <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="desc">
                                <div class="thumb_strip">
                                    <a href="index.php?page=restaurant&module=restaurant&accion_event=displayProfile&accion_view=profile&id=<?php echo ($restaurant['id'])?>">
                                        <img src="<?php echo Utils::GetCurrentImagePath($restaurant['id'],1)?>" alt="<?php echo $restaurant['name']?>">
                                    </a>
                                </div>
                                <div class="rating">
                                
                            <div class="container">
		  </div>
    
                              
        						
                                    <i class="icon_star <?php if (Utils::CalculateStarts($restaurant['quality'],1)) echo "voted"?>"></i>
                                  
                                    <i class="icon_star <?php if (Utils::CalculateStarts($restaurant['quality'],2)) echo "voted"?>"></i>
                                   
                                    <i class="icon_star <?php if (Utils::CalculateStarts($restaurant['quality'],3)) echo "voted"?>"></i>
                                   
                                    <i class="icon_star <?php if (Utils::CalculateStarts($restaurant['quality'],4)) echo "voted"?>"></i>
                                  
                                    <i class="icon_star <?php if (Utils::CalculateStarts($restaurant['quality'],5)) echo "voted"?>"></i>
                                    
                                    (
                                    <small><a href="#0"><?php echo $restaurant['quality']?></a></small>
                                    )
                                </div>
                                <h3><?php echo $restaurant['name']?></h3>
                                <div class="type">
                                    <?php echo $restaurant['description']?>                </div>
                                <div class="location hidden">
                                    <?php echo $restaurant['adress']?>  
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="go_to">
                                <div>
                                    <a href="index.php?page=restaurant&module=restaurant&accion_event=displayProfile&accion_view=profile&id=<?php echo ($restaurant['id'])?>"
                                       class="btn_1">Calificar</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row-->
                </div>
                </div>
				<?php } ?>


            </div>
        </div>

    </div>

</div>


