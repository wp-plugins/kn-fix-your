<?php
		echo "<h2>Please follow this step to make this plugin works!</h2>";
		echo "</a>";
		echo "
			<ol>
				<li>First, open your template file <a href='./theme-editor.php?file=%2Fthemes%2F" . get_template() . "%2Fheader.php&theme=" . get_current_theme() . "&dir=theme' target='_blank'><strong>header.php</strong></a> which is located in <em>" . get_theme_root() . "/" . get_template() . "/header.php</em></li>
				<li>Then, you need to find <strong>&lt;title&gt;</strong> tag</li>
				<li>Once, you found the <strong>&lt;title&gt;</strong> tag, you need to rid from the opening until the <strong>closing tag = &lt;/title&gt;</strong>.</li>
						<p class='description'>
							For example :
							</br>
							<strong>&lt;title&gt;ape-ape je yang ada kat sini.. buang.. joyah!! joyah!! what ever..&lt;/title&gt;</strong> <em><-- you need rid them!</em>
						</p>						
					</br>
				<li>Don't forget to backup the <strong>header.php</strong> file before you click <strong>Update File</strong></li>
				<li>Click <strong>I have done this!</strong> button below if you have done all the step!</li>
			</ol>";
		echo "<input type='hidden' name='" . $kn_plugin . "_firststep' id='" . $kn_plugin . "_firststep' value='1'/>";
		echo "<p class='submit'><input type='submit' class='button-primary' value='I have done this!' /></p>";
?>