<footer>
	<ul class="footer_links">
	
		<li><a href="http://www.facebook.com/kenneth.andersson" target="_blank" title="<?php echo getLabel("facebook"); ?>"><i class="icon facebook"></i></a></li>
		<li><a href="http://twitter.com/Andersson82" target="_blank" title="<?php echo getLabel("twitter"); ?>"><i class="icon twitter"></i></a></li>
		<li><a href="http://www.linkedin.com/in/kennethandersson82" target="_blank" title="<?php echo getLabel("linkedin"); ?>"><i class="icon linkedin"></i></a></li>
		<li><a href="http://vimeo.com/user12280492/videos" target="_blank" title="<?php echo getLabel("vimeo"); ?>"><i class="icon vimeo"></i></a></li>
		<li><a href="http://skuespillerhaandbogen.dk/medlem/profile/kenneth-andersson/" target="_blank" title="<?php echo getLabel("actors_handbook"); ?>"><i class="icon actors_handbook"></i></a></li>
		<?php
			// Change language
			if ($lang == "DK") {
				$text = "English";
				$new_lang = "en";
			} else if ($lang == "EN") {
				$text = "Dansk";
				$new_lang = "dk";
			}
			echo "<li><a href='?site=" . $site . "&lang=" . $new_lang . "'>" . $text . "</a></li>";
		?>
	</ul>
</footer>