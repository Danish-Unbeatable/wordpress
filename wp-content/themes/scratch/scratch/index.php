<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scratch
 */

get_header();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.header_image{
			height: 850px;
		}
		.header_image .title{
			position: relative;
			top: 91%;
			left: 50%;
			transform: translate(-50%,-50%);
			text-align: center;
			font-size: 70px;
			color: #ffffff;
			font-family: Open sans bold;
			overflow: hidden;
		}

	</style>
</head>
<body>
	<div class="header_image" style="background: url(<?php echo header_image(); ?>) no-repeat; background-size: cover;">
		<div class="title">
			<p>Gearing up the ideas</p>
	<h5>lorem ipsumlorem lorem ipsumlorem lorem ipsumlorem lorem ipsumlorem lorem ipsumlorem lorem </h5>
		
		</div>
	</div>
	<div class="services" style="background-color: #efefef; margin-top: 3px;">
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="service">
					<div class="row">
						<div class="col-md-2">
							<img src="icons.png">
						</div>
						<div class="col-md-10">
							<div class="service_title text-center">
								<h1>Advertising</h1>
								<p>loremipsum loremipsuml</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="col-md-4">
				<div class="service">
					<div class="row">
						<div class="col-md-2">
							<img src="icons.png">
						</div>
						<div class="col-md-10">
							<div class="service_title text-center">
								<h1>Multimedia</h1>
								<p>loremipsum loremipsuml</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="col-md-4">
				<div class="service">
					<div class="row">
						<div class="col-md-2">
							<img src="icons.png">
						</div>
						<div class="col-md-10">
							<div class="service_title text-center">
								<h1>Photography</h1>
								<p>loremipsum loremipsuml</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>

		</div>
	</div>
	</div>	

</body>
</html>
	
	
<?php
get_footer();
