<?php
		echo "<div class = 'row'>";
			echo "<div class = 'col-xs-2'>";
			$rows = 0;
			foreach($questions as $question){
				$rows++;
			}
			$i = 1;
			$ids = [];
			$answers = [];
			echo "</div>";
			echo "<div style = 'margin-top: 20px'class = 'col-xs-8'>";
				echo "<div class = 'thumbnail'>";
					echo "<div class = 'caption'>";
					echo "<form action = 'mark_questions.php' method = 'post'>";
					foreach($questions as $question){
						if($i == 1){
							echo "<div id = 'question".$i."' class = 'cont'>";
								echo "<p class = 'questions' id = 'qname".$i."'>".$i.". ".$question['question']."</p>";
								echo "<input type = 'radio' value = 'a' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['a'];
								echo "<br>";
								echo "<input type = 'radio' value = 'b' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['b'];
								echo "<br>";
								echo "<input type = 'radio' value = 'c' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['c'];
								echo "<br>";
								echo "<input type = 'radio' value = 'd' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['d'];
								echo "<br>";
								echo "<input type = 'radio' value = 'e' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['e'];
								echo "<br>";
								echo "<button style = 'margin-left: 77%' type = 'button' id = 'add_button' class = 'next btn btn-default'>Next</button>";
							echo "</div>";
							
						}
						else if($i < $rows){
							echo "<div id = 'question".$i."' class = 'cont'>";
								echo "<p class = 'questions' id = 'qname".$i."'>".$i.". ".$question['question']."</p>";
								echo "<input type = 'radio' value = 'a' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['a'];
								echo "<br>";
								echo "<input type = 'radio' value = 'b' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['b'];
								echo "<br>";
								echo "<input type = 'radio' value = 'c' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['c'];
								echo "<br>";
								echo "<input type = 'radio' value = 'd' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['d'];
								echo "<br>";
								echo "<input type = 'radio' value = 'e' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['e'];
								echo "<br>";
								echo "<button id = 'add_button' type = 'button' class = 'previous btn btn-default'>Previous</button>";
								echo "<button type = 'button' style = 'margin-left: 60%' id = 'add_button' class = 'next btn btn-default'>Next</button>";
							echo "</div>";
						}
						else if($i == $rows){
							echo "<div id = 'question".$i."' class = 'cont'>";
								echo "<p class = 'questions' id = 'qname".$i."'>".$i.". ".$question['question']."</p>";
								echo "<input type = 'radio' value = 'a' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['a'];
								echo "<br>";
								echo "<input type = 'radio' value = 'b' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['b'];
								echo "<br>";
								echo "<input type = 'radio' value = 'c' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['c'];
								echo "<br>";
								echo "<input type = 'radio' value = 'd' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['d'];
								echo "<br>";
								echo "<input type = 'radio' value = 'e' id = 'radio1_".$question["id"]."' name = '".$question['id']."'>".$question['e'];
								echo "<br>";
								echo "<button type = 'button' id = 'add_button' class = 'previous btn btn-default'>Previous</button>";
								echo "<button style = 'margin-left: 60%' type = 'submit' id = 'add_button' class = 'btn btn-default'>Submit</button>";
							echo "</div>";
						}
						$i++;
						$ids[] = [
							"id" => $question["id"]
							];
					}
					$_SESSION["question_id"] = $ids;
					$_SESSION["rows"] = $rows;
					echo "</form>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
			echo "<div class = 'col-xs-2'>";
			echo "</div>";
		echo "</div>";
?>
<script>
	var count = $('.cont').length;
	for( i = 2; i <= count; i++){
		$('#question'+i).addClass('hide');
	}
	var current = 1;
	var previous = 0;
	$(document).on('click', '.next', function(){
		$('#question'+previous).addClass('hide');
		previous = current;
		$('#question'+current).removeClass('hide');
		current = current + 1;
		
	});
	$(document).on('click', '.previous', function(){
		$('#question'+current).addClass('hide');
		current = previous;
		$('#question'+previous).removeClass('hide');
		previous = previous - 1;
	});
</script>