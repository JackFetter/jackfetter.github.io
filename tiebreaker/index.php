<head>
	<title>Tiebreaker - Jack Fetter</title>
	<meta name="robots" content="none"> 
	<link rel="canonical" href="https://jackfetter.me/">
	<link rel="icon" href="favicon.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Tiebreaker">
	<link rel="apple-touch-icon-precomposed" href="favicon-ios.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<style type="text/css">
		@media only screen and (max-width: 767px) {
			br {
				height: 0.5em;
			}
		}
	</style>
</head>
<body>
	<div class="wrapper-food">
		<div style="margin-left:1em;">
			<div id="nav-bar">
				<div id="links">
		    		<a href="../"><h1 class="inline">&#x1F9D4;&#x1F3FB; Home</h1></a>
		    		<a><h1 class="inline"> &#10132; </h1></a>
					<a><h1 class="inline">Tiebreaker</h1></a>
				</div>
			</div>
		</div>
			<div id="card-background" style="min-height: 1px; background-image: url('goldcoast.jpg'); background-position: right;">
				<div class="card">
					<div style="margin:1em;">
						<h1 class="decision">Let's get<br />
							<?php
							$restaurants = array(
							"Koharu",
							"Oporto",
							"Domino's",
							"The Godfather",
							"The Collective",
							"Substance",
							"Nandos",
							"Zeus",
							"Noodle Box",
							"Sushi Train",
							"Peking Duck",
							"Teppanyaki",
							"Betty's Burgers",
							"Grill'd",
							"KFC",
							"George's Paragon",
							"Little Red Dunpling",
							"@runya",
							"Pizza Hut",
							"Salt Meats Cheese",
							"Costa D'Oro",
							);
							$selection = array_rand($restaurants);
							echo $restaurants[$selection];
							?></h1>
					</div>
				</div>
		</div>
		<a href="./"><div class="reload">
			<div class="card">
				<div>
		    		<p class="reload">&nbsp;&nbsp;&nbsp;Something Else&nbsp;&nbsp;&nbsp;</p>
				</div>
			</div>
		</div></a>

		<!--<a href="./" class="top"><i class="fas fa-redo-alt"></i>&nbsp;Let's Try Something Else</a>-->
  </div>
</body>