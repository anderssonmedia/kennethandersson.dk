<script type="text/javascript">

soundManager.setup({

  // location: path to SWF files, as needed (SWF file name is appended later.)

  url: '/includes/soundmanager/swf/',

  // optional: version of SM2 flash audio API to use (8 or 9; default is 8 if omitted, OK for most use cases.)
  // flashVersion: 9,

  // use soundmanager2-nodebug-jsmin.js, or disable debug mode (enabled by default) after development/testing
  // debugMode: false,

  // good to go: the onready() callback

  onready: function() {

    // SM2 has started - now you can create and play sounds!

    var mySound = soundManager.createSound({
      id: 'aSound', // optional: provide your own unique id
      url: '/media/dubbing.mp3'
      // onload: function() { console.log('sound loaded!', this); }
      // other options here..
    });

    mySound.play();

  },

  // optional: ontimeout() callback for handling start-up failure

  ontimeout: function() {

    // Hrmm, SM2 could not start. Missing SWF? Flash blocked? No HTML5 audio support? Show an error, etc.?
    // See the flashblock demo when you want to start getting fancy.

  }

});

</script>

<script>
/*soundManager.setup({
	url: '/includes/soundmanager/swf/',
	flashVersion: 9, // optional: shiny features (default = 8)
	// optional: ignore Flash where possible, use 100% HTML5 mode
	// preferFlash: false,
	onready: function() {
		// Ready to use; soundManager.createSound() etc. can now be called.
		var mySound = soundManager.createSound({
			id: 'aSound',
			url: '/media/dubbing.mp3'
		});
		mySound.play();
	},
	ontimeout: function() {
		// Hrmm, SM2 could not start. Missing SWF? Flash blocked? Show an error, etc.?
		}
	}
});*/
</script>

<div class="ui360">
	<a id="aSound" href="media/dubbing.mp3">play "an.mp3"</a>
</div>

<div class="ui360">
	<a href="media/dubbing.mp3">20090119 - Untitled Groove</a>
</div>