<div class = "row">
	<div class = "col-xs-12">
		<form action = 'delete_question.php' method = 'post'>
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-align-justify"></span> Subjects by Class</h5>
			</div>
			<div class = "panel-bodyy panel-body">
						<script>
                            function submitForm(action)
                            {
                                document.getElementById('columnarForm').action = action;
                                document.getElementById('columnarForm').submit();
                            }
                        </script>
				<table class = "table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Question</th>
							<th>A</th>
							<th>B</th>
							<th>C</th>
							<th>D</th>
							<th>E</th>
							<th>Correct</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$rows = 1;
							$i = 0;
							foreach($questions as $question){
								print("<tr>");
									print("<td>");
										print($rows);
									print("</td>");
									print("<td>");
										print($question["question"]);
									print("</td>");
									print("<td>");
										print($question["a"]);
									print("</td>");
									print("<td>");
										print($question["b"]);
									print("</td>");
									print("<td>");
										print($question["c"]);
									print("</td>");
									print("<td>");
										print($question["d"]);
									print("</td>");
									print("<td>");
										print($question["e"]);
									print("</td>");
									print("<td>");
										print($question["correct_answer"]);
									print("</td>");
									print("<td>");
										print("
												<input type = 'checkbox' value = '{$question['id']}' name = 'delete[]'>
										");
									print("</td>");
								print("</tr>");
								$rows++;
								$i++;
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<button class='btn btn-default' id = 'add_button1' value = '{$question['id']}'>delete</button>
	</form>
	</div>
</div>