<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scratch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.header{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100px;
	box-shadow: 5px;	
	background-color: #efefef;
}
.header .desktop_menu ul li{
	list-style: none;
	display: inline-block;
	margin-top: 30px;
}

.header .desktop_menu ul li a{
	font-family: Open sans Bold;
	size: 14px #222222;
	padding: 10px;

}
.header .desktop_menu ul li a:hover{
	text-decoration: none;	
	color: #ffffff;
	background-color: #ef4634;

	border-radius:3px;
}
a:hover,
a:active,
a:target,
a:focus{
	border:0;
	outline: none;
}
</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header pt-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-4">
					<div class="logo">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-8">
					<div class="desktop_menu  text-uppercase text-right pb-0">
							<?php wp_nav_menu(); ?>
						   
						</div>
				</div>
			</div>
		</div>
	</div>