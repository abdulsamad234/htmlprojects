<?php
		echo "<div class = 'row'>";
			echo "<div class = 'col-xs-4'>";
			echo "</div>";
			echo "<div style = 'margin-top: 20px'class = 'col-xs-4'>";
				echo "<div class = 'thumbnail'>";
					echo "<div class = 'caption'>";
						echo "<form method = 'get' action = 'take_exam.php' class = 'form'>";
							echo "<select style = 'margin: 5% 35%' name = 'sub' class = 'form-action'>";
							foreach($subjects as $subject){
								echo "<option name = 'subject' value = '".$subject["subject"]."'>".$subject["subject"]."</>";
							}
							echo "</select>";
							echo "<br>";
							echo "<button style = 'margin-left: 33%' type = 'submit' id = 'add_button' class = 'btn btn-default'>Take text</button>";
						echo "</form>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
			echo "<div class = 'col-xs-4'>";
			echo "</div>";
		echo "</div>";
?>