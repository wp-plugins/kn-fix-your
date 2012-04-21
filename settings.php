<h2>Fix &lt;title&gt; Options</h2>

<p>Fix &lt;title&gt; is the released plugin by <a href="http://www.kakinetwork.com" target="_blank">KakiNetwork</a>. It is based on KakiNetwork plugins framework. NOTE: This plugin is totally free!</p>

<form method="post" action="options.php">
	<input type="hidden" name="<?php echo $kn_plugin; ?>_version" id="<?php echo $kn_plugin; ?>_version" value="<?php echo $versi; ?>"/>
	<input type="hidden" name="<?php echo $kn_plugin; ?>_separator" id="<?php echo $kn_plugin; ?>_separator" value="<?php echo $separator; ?>"/>
	<?php settings_fields( 'kn_fix_your_title_group' ); ?>
	<?php do_settings_sections( 'kn_fix_your_title_group' ); ?>
	<?php
	if ($firststep=="0"){
		include "manage1.php";
	}
	else {
		include "manage2.php";
	}
	?>
</form>