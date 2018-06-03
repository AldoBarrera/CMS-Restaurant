<script>

$( "#start1" ).removeClass( "voted" );
$( "#start2" ).removeClass( "voted" );
$( "#start3" ).removeClass( "voted" );
$( "#start4" ).removeClass( "voted" );
$( "#start5" ).removeClass( "voted" );
$( "#star1" ).removeClass( "voted" );
$( "#star2" ).removeClass( "voted" );
$( "#star3" ).removeClass( "voted" );
$( "#star4" ).removeClass( "voted" );
$( "#star5" ).removeClass( "voted" );
$( "#countStars" ).html(" <?php echo $data['stars']?>");
$( "#totalComments" ).html(" <?php echo $data['totalComments']?> opiniones");



<?php
for ($i = 1; $i <= intval($data['stars']); $i++) {
	echo '$( "#start'. $i.'" ).addClass( "voted" );';
	echo '$( "#star'. $i.'" ).addClass( "voted" );';
   
}
?>

</script>
<div class="review_strip_single">
   
    <small><?php echo ($data['date']);?></small>
    <h4><?php echo ($data['facebook_name']) ?></h4>

   <?php echo ($data['description']) ?>
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