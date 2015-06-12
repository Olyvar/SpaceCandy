<!DOCTYPE html>
<html lang="en">
<head>
<title>S P A C E &nbsp; C A N D Y</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheets/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//use.typekit.net/xsa5rmb.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
</head>

<body>

<?php
     $galaxy_assets = array(
                        array("b", "milky-way", "milky-way", "images/astro-1.jpg", "Name 1", "Milky Way", ".jpg", "2.5mb"),
                        array("c", "supernova", "supernova", "images/nova-1.jpg", "Name 2", "Supernova", ".png", "1.5mb"),
                        array("a", "galaxy", "galaxy", "images/galaxy-1.jpg", "Name 3", "Galaxy", ".pdf", "2.1mb"),
                        array("c", "supernova", "supernova", "images/astro-2.jpg", "Name 4", "Supernova", ".tiff", "3.4mb"),
                        array("e", "planet", "planet", "images/nova-2.jpg", "Name 5", "Planet", ".png", "2.5mb"),
                        array("b", "milky-way", "milky-way", "images/galaxy-3.jpg", "Name 6", "Milky Way", ".tiff", "5mb"),
                        array("e", "planet", "planet", "images/astro-3.jpg", "Name 7", "Planet", ".png", "2mb"),
                        array("d", "constellation", "constellation", "images/nova-3.jpg", "Name 8", "Constellation", ".gif", "3mb"),
                        array("c", "supernova", "supernova", "images/galaxy-2.jpg", "Name 9", "Supernova", ".gif", "1mb"),
                        ); 
?>


<div class="the_universe">

	<div class="container">

		<div class="row">
			
			<div class="col-md-12">
				<h1 class="text-center">Space Candy</h1>
			</div>

		</div>

		<div class="row">
			
			<div class="col-md-3">
				<div class="filter-bar">

					<ul>
						<li class="filter-btn space_candy active" id="all">Show All</li>
						<li class="filter-btn galaxy" id="a">Galaxy</li>
						<li class="filter-btn milky_way" id="b">Milky Way</li>
						<li class="filter-btn supernova" id="c">Supernova</li>
						<li class="filter-btn constellation" id="d">Constellation</li>
						<li class="filter-btn planet" id="e">Planet</li>
					</ul>
					
				</div>
			</div>

			<div class="col-md-9 the_galaxies" id="filter">


 			<?php
			for($i = 0; $i < count($galaxy_assets); $i++){
                echo '<div class="col-xs-12 col-sm-6 col-md-4 box '.$galaxy_assets[$i][0].'">
							<div class="asset-block '.$galaxy_assets[$i][1].'">
								<figure class="'.$galaxy_assets[$i][2].'">
									<img src="'.$galaxy_assets[$i][3].'" alt="">
									<figcaption class="hide-me">
										<h3>'.$galaxy_assets[$i][4].'</h3>
										<p>
										<strong>Form:</strong> '.$galaxy_assets[$i][5].'<br>
										<strong>Filetype:</strong> '.$galaxy_assets[$i][6].'<br>
										<strong>Filesize:</strong> '.$galaxy_assets[$i][7].'
										</p>
									</figcaption>
								</figure>
							</div>			
						</div>';
					}
			?>

			</div>

		</div>

	</div>

</div>

<script src="javascripts/app.js"></script>


</body>

</html>