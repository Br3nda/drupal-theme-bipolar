<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/<?php echo $directory; ?>/style.css" media="screen" title="style (screen)" />
<title><?php echo $head_title;?></title>
<?php echo $scripts; ?>
<?php echo $styles; ?>
<!--[if lte IE 6]>
<style type="text/css">
html, body
	{
	height: 100%;
	overflow: auto;
	}
#left {
	position: absolute; left: 0;
	width: 35%;
}

</style>
<![endif]-->
</head>

<body>

<div id="left">
<?php echo $sidebar_left;?>
 <div id="outer">
	<img class="lime" src="http://coffee.geek.nz/system/files/pictures/picture-1.jpg" alt="" /><h1><span class="green">teh</span>coffee<span class="yellow">geek</span>nz</h1><br /><br /> 
  <?php print theme('links', $primary_links, array('class' =>'nav'); ?>
  
 </div>
</div>

<div id="main">
<?php echo $header;?>
<?php echo $messages;?>
<?php echo $tabs;?>
<?php echo $content;?>
<?php /*
	<div class="date"><span class="green">Nov<br />21</span></div>
	<div class="main"><span class="title">Fusce turpis dolor</span>semper ac, venenatis at, facilisis ac, magna. Etiam ac enim. Sed pellentesque euismod elit. Mauris auctor ultrices massa. Praesent eget erat ut turpis aliquet viverra. Nullam consectetuer, risus ut condimentum dictum, tortor urna placerat leo, eleifend dictum lacus purus at tortor. Integer pulvinar. Etiam eget leo eget turpis imperdiet dictum.
	<div class="quote">Aliquam rutrum, risus iaculis commodo lobortis, enim augue imperdiet nunc, ut sagittis massa odio in nisl.</div>Morbi ac orci et odio facilisis tincidunt. Vestibulum ut diam. Sed mattis dui ut mauris. Nulla pretium, lectus sit amet varius tristique, pede lectus placerat lacus, at cursus sem turpis vel mauris. Phasellus gravida, arcu sit amet posuere euismod, velit orci ultrices est, in pharetra enim mauris nec libero. Duis feugiat.</div>

	<div class="date"><span class="yellow">Nov<br />16</span></div>
	<div  class="main"><span class="title">Sed eget erat et justo imperdiet elementum.</span>Ut nisi diam, luctus eu, cursus id, viverra vel, lorem. Aliquam pretium pretium turpis. Aliquam vestibulum, erat eu porta fermentum, nunc erat venenatis est, non cursus tellus arcu non magna. Ut ut pede. Aenean porta. Curabitur vitae risus. Curabitur fringilla dictum lorem. Nullam id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras nunc ligula, hendrerit et, ultrices at, ultricies ac, pede. Vivamus bibendum.</div>

	<div class="date"><span class="green">Oct<br />30</span></div>
	<div  class="main"><span class="title">Quisque tempor viverra tellus.</span>Mauris vitae velit eu est vulputate adipiscing. Sed eget erat. Mauris vel sapien. Maecenas quis diam. Maecenas tristique lobortis nunc. Donec libero. Etiam vitae ipsum. Praesent luctus adipiscing ligula. Maecenas ut odio et velit malesuada aliquet. Suspendisse aliquet arcu quis lorem. Maecenas arcu diam, condimentum in, ullamcorper in, elementum at, risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>

	<div class="date"><span class="yellow">Oct<br />27</span></div>
	<div  class="main"><span class="title">Duis euismod enim euismod enim.</span>Curabitur mollis felis sit amet dolor. Nam mollis eros eu neque. Sed eleifend elit sit amet diam. Sed pulvinar lectus non metus. Vivamus urna ipsum, pellentesque vel, lobortis eget, fermentum a, lectus. Nulla non quam. Quisque molestie rhoncus nisi. Aliquam erat volutpat. Nulla mattis, arcu quis dapibus placerat, lacus nisi tincidunt ante, vel vestibulum eros nulla porttitor leo. In sit amet purus mattis quam accumsan blandit.</div>

	<div class="date"><span class="green">Oct<br />21</span></div>
	<div class="main"><span class="title">Fusce turpis dolor</span>semper ac, venenatis at, facilisis ac, magna. Etiam ac enim. Sed pellentesque euismod elit. Mauris auctor ultrices massa. Praesent eget erat ut turpis aliquet viverra. Nullam consectetuer, risus ut condimentum dictum, tortor urna placerat leo, eleifend dictum lacus purus at tortor. Integer pulvinar. Etiam eget leo eget turpis imperdiet dictum. Aliquam rutrum, risus iaculis commodo lobortis, enim augue imperdiet nunc, ut sagittis massa odio in nisl. Morbi ac orci et odio facilisis tincidunt. Vestibulum ut diam. Sed mattis dui ut mauris. Nulla pretium, lectus sit amet varius tristique, pede lectus placerat lacus, at cursus sem turpis vel mauris. Phasellus gravida, arcu sit amet posuere euismod, velit orci ultrices est, in pharetra enim mauris nec libero. Duis feugiat.</div>

	<div class="date"><span class="yellow">Oct<br />16</span></div>
	<div class="main"><span class="title">Sed eget erat et justo imperdiet elementum.</span>Ut nisi diam, luctus eu, cursus id, viverra vel, lorem. Aliquam pretium pretium turpis. Aliquam vestibulum, erat eu porta fermentum, nunc erat venenatis est, non cursus tellus arcu non magna. Ut ut pede. Aenean porta. Curabitur vitae risus. Curabitur fringilla dictum lorem. Nullam id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras nunc ligula, hendrerit et, ultrices at, ultricies ac, pede. Vivamus bibendum.</div>

	<div class="date"><span class="green">Sep<br />30</span></div>
	<div class="main"><span class="title">Quisque tempor viverra tellus.</span>Mauris vitae velit eu est vulputate adipiscing. Sed eget erat. Mauris vel sapien. Maecenas quis diam. Maecenas tristique lobortis nunc. Donec libero. Etiam vitae ipsum. Praesent luctus adipiscing ligula. Maecenas ut odio et velit malesuada aliquet. Suspendisse aliquet arcu quis lorem. Maecenas arcu diam, condimentum in, ullamcorper in, elementum at, risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>

	<div class="date"><span class="yellow">Sep<br />27</span></div>
	<div class="main"><span class="title">Duis euismod enim euismod enim.</span>Curabitur mollis felis sit amet dolor. Nam mollis eros eu neque. Sed eleifend elit sit amet diam. Sed pulvinar lectus non metus. Vivamus urna ipsum, pellentesque vel, lobortis eget, fermentum a, lectus. Nulla non quam. Quisque molestie rhoncus nisi. Aliquam erat volutpat. Nulla mattis, arcu quis dapibus placerat, lacus nisi tincidunt ante, vel vestibulum eros nulla porttitor leo. In sit amet purus mattis quam accumsan blandit.</div>
*/?>
	<span class="credit"><?php echo $footer; ?> | Template by <a href="http://www.demusdesign.com">DemusDesign</a></span>
</div>


</body>

</html>
