'use strict';

// Create an instance
var wavesurfer = Object.create(WaveSurfer);

// Init & load audio file
document.addEventListener('DOMContentLoaded', function () {
    // Init
    wavesurfer.init({
        container: document.querySelector('#myplayer'),
        waveColor: '#333',
        progressColor: '#3B8686',
        backend: 'MediaElement'
    });

    // Load audio from URL
    wavesurfer.load(mediaFileLink);

    document.querySelector(
        '[data-action="play"]'
    ).addEventListener('click', wavesurfer.playPause.bind(wavesurfer));

});
