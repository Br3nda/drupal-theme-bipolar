<?php 
$month = date('M', $node->created); 
$day = date('d', $node->created);
?>
<div class="date"><span class="yellow"><?php echo $month; ?><br /><?php echo $day; ?></span></div>
<div class="main"><span class="title"><?php echo $title?></span>
<?php echo $content; ?><br clear="all" />
 <p class="comment"><?php echo $links; ?></p></div>
