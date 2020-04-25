<head>
	<title>Tiebreaker - Jack Fetter</title>
	<meta name="robots" content="none"> 
	<link rel="canonical" href="https://jackfetter.me/">
	<link rel="icon" href="favicon.png">
	<link rel="apple-touch-icon-precomposed" href="favicon-ios.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<link href="../fa/css/all.css" rel="stylesheet">
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
		<div id="nav-bar">
			<div id="links">
	    		<a href="../"><h1 class="inline">&#x1F9D4;&#x1F3FB; Home</h1></a>
	    		<a><h1 class="inline"> &#10132; </h1></a>
				<a><h1 class="inline">Tiebreaker</h1></a>
			</div>
		</div>
		<br />
		<h1 class="decision">Let's get<br />
		<?php
			$restaurants = array(
				"Bake Bake<br />House &#x1F35E;",
				"Paddock &#x1F956;",
				"Substance &#x1F354;",
				"8 Street &#x1F962;",
				"@runya &#x1F336;",
				"The<br />Bavarian &#x1F968;",
				"Betty's<br />Burgers &#x1F354;",
				"Bistro Lamp &#x1F37A;",
				"Costa D'oro &#x1F355;",
				"Crêpe<br />Addict &#x1F95E;",
				"Domino's &#x1F355;",
				"George's<br />Paragon &#x1F1EC;&#x1F1F7;",
				"The<br />Godfather &#x1F355;",
				"Hog's &#x1F969;",
				"Indian &#x1F35B;",
				"Justin Lane &#x1F355;",
				"Kabachi-Ya &#x1F35C;",
				"Koi &#x1F376;",
				"Koharu &#x1F35C;",
				"Little Red Dumpling &#x1F95F;",
				"Nando's &#x1F414;",
				"Salt Meats Cheese &#x1F355;",
				"Teppanyaki &#x1F525;",
				"Vapiano's &#x1F355;",
				"Ze Pickle &#x1F952;",
				"Zeus Street<br />Greek &#x1F32F;",
				"The Collective &#x1F355;",
				"Balboa &#x1F1EE;&#x1F1F9;",
				"Don't Gnocchi It &#x1F1EE;&#x1F1F9;",
				"Taco Bell &#x1F32E;",
			);
			$selection = array_rand($restaurants);
			echo $restaurants[$selection];
		?></h1>
		<a href="./" class="spin"><i class="fas fa-redo-alt"></i>&nbsp; Spin The Wheel</a>
  </div>
</body>