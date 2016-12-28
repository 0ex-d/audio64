<!DOCTYPE html>
<html>
<head>
	<title>Base 64 Audio Manupulation with wavesurfer.js</title>
	<!-- using wavesurfer.js -->
    <script src="js/wavesurfer.min.js"></script>
    <script src="js/plugin/wavesurfer.regions.js"></script>
    <script src="js/main.js"></script>
</head>
<body>

<?php

/* Typically takes an audio file and converts to
    Base 64 */
function encoder($file)
{
	return 'data:audio/mp3;base64,' . base64_encode(file_get_contents($file));
}
?>

<script type="text/javascript">
    // source for your waversurfer API
	var mediaFileLink = '<?php echo encoder('media/demo.wav');?>';
</script>

<div id="myplayer"></div>
<div class="controls">
                    <button class="btn btn-primary" data-action="play">
                        <i class="glyphicon glyphicon-play"></i>
                        Play
                        /
                        <i class="glyphicon glyphicon-pause"></i>
                        Pause
                    </button>
                </div>

</body>
</html>
