<script type = "text/javascript">

function hideMessage() {
document.getElementById("message").style.display="none"; 
}

function startTimer() {
var tim = window.setTimeout("hideMessage()", 5000);  // 5000 milliseconds = 5 seconds
}

</script>

<table class="form-table">
	<tbody>
		<tr>
			<th scope="row">Any separator symbol you like..</th>
				<td>
					<ul>
						<li>| , . - _ + = > < ? / ; : * # @ $ ~ !</li>
					</ul>
					
					<ul>
						<li>Separator : <input name="<?php echo $kn_plugin; ?>_separator" type="txt" id="<?php echo $kn_plugin; ?>_separator" value="<?php echo $separator; ?>" class="small-text"></li>
					</ul>
				</td>
		</tr>
	</tbody>
</table>

<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>

<?php
	if (isset ($_GET['settings-updated'])) {
?>
<body onload = "startTimer()"> <div id = "message" style="display:block"><font color='green'>saved!</font></div> </body>
<?php } ?>