<!DOCTYPE html>
<html>
<head>
	<title>Anup Shetye</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>Anup Shetye</h1>
		<img src='images/pic.jpeg' alt='Anup Shetye'>
		<h2>About Me</h2>
		<p>
			I am Anup Shetye, currently working as an IT professonal in investment bank in south Boston.
			I did my bachelors in electronics engineering from University of Mumbai and masters in business administration in Information Systems from NMIMS University.
			This is my second course towards another masters degree and am looking forward to learning new.

			In my free time, I read books and listen to good music.
		</p>
		<h2>Random Quote</h2>
	 <?php
	 $input = array
	     ("The Black Knight Always Triumphs! - Monty Python",
	     "I swear by my life and love of it that I will never live for the sake of another man, nor ask another man to live for mine - Atlas Shrugged",
	     "It is clear that the individual who persecutes a man, his brother, because he is not of the same opinion, is a monster - Voltaire",
	     "I agree that there is a natural aristocracy among men. The grounds of this are virtue and talents. - Thomas Jefferson",
	     "Liberty, when it begins to take root, is a plant of rapid growth. - George Washington",
	     "Never argue with an idiot. They drag you down to their level then beat you with experience - Dilbert",
	     "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
	     "The early bird gets the worm, but the second mouse gets the cheese - Anonymous",
	     "Subjugating the enemy's army without fighting is the true pinnacle of excellence - Sun-tzu, The Art of War",
	     "Work as though you were to live 100 years; pray as if you were to die tomorrow - Benjamin Franklin",
	     "The world is a stage, but the play is badly cast - Oscar Wilde",
	     "Truth is generally the best vindication against slander. - Abraham Lincoln",
	     "...mercy to the guilty is cruelty to the innocent... - Adam Smith",
	     "Democracy is the worst form of government except for all the others - Winston Churchill",
	     "You can only know the highest peaks if you have experianced the lowest valley's - Richard Nixon",
	     "They dress the wound of my people as though it were not serious. 'Peace, peace,' they say, when there is no peace. - Jeremiah 6:14",
	     "It is better to remain silent and be thought a fool than to open your mouth and remove all doubt. - Jonathan Swift",
	         );
	$rand_keys = array_rand($input, 2);
	echo $input[$rand_keys[1]] . "\n";
	?>
	</div>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
