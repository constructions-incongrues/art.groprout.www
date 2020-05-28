<?php
$sounds = glob(__DIR__.'/sound/*.mp3');
$i = 0;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>JE SUIS GROPROUT!</title>
        <style>
            @import url("fonts/font.css");
            @import url("css/default.css"); 
        </style>
    </head>
    
    <body>
        <div>
            <h1>Oserez-vous pénétrer dans le Château de <u class="prout">Groprout</u> ?</h1>
            <img src="../images/chateau.jpg" />
        </div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.0/howler.core.min.js"></script>
		<script>
		document.addEventListener("DOMContentLoaded", function() {
			var sounds = [
<?php for ($i = 1; $i <= count($sounds); $i++): ?>
				new Howl({src: [<?php echo sprintf('"sound/%d.mp3"', $i) ?>]}),
<?php endfor ?>
			];
			var prouts = document.getElementsByClassName('prout');
			for (i in prouts.items) {
				prouts[i].addEventListener('mouseover', function(event) {
					var index = Math.floor(Math.random() * Math.floor(<?php echo count($sounds) ?>));
					var sound = sounds[index];
					sound.play();
				});
			}
		});
		</script>

    </body>
</html>