	<script>
            function submitForm(action)
            {
                document.getElementById('columnarForm').action = action;
                document.getElementById('columnarForm').submit();
            }
        </script>
<div class = "row">
	<div class = "col-xs-6">
		<form action = "deploy.php" method = 'post'>
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-align-justify"></span> Undeployed Questions</h5>
			</div>
			<div class = "panel-bodyy panel-body">
				<table class = "table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Exam Details</th>
							<th>Deploy</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$rows = 1;
							foreach($undeployed_questions as $undeployed_question){
								print("<tr>");
									print("<td>");
										print($rows);
									print("</td>");
									print("<td>");
										print("{$undeployed_question['subject']}, {$undeployed_question['class']}, {$undeployed_question['arm']}");
									print("</td>");
									print("<td>");
										print("
												<input type = 'checkbox' value = '{$undeployed_question['subject']}' name = 'deploy[]'>
												<input type = 'checkbox' value = '{$undeployed_question['class']}' name = 'deploy1[]'>
												<input type = 'checkbox' value = '{$undeployed_question['arm']}' name = 'deploy2[]'>
										");
									print("</td>");
								print("</tr>");
								$rows++;
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<button class='btn btn-default' id = 'add_button1'>Deploy</button>
	</form>
	</div>
		<div class = "col-xs-6">
		<form method = 'post'>
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-align-justify"></span> Deployed Questions</h5>
			</div>
			<div class = "panel-bodyy panel-body">
				<table class = "table table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Exam Details</th>
							<th>Deploy</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$rows = 1;
							foreach($deployed_questions as $deployed_question){
								print("<tr>");
									print("<td>");
										print($rows);
									print("</td>");
									print("<td>");
										print("{$deployed_question['subject']}, {$undeployed_question['class']}, {$undeployed_question['arm']}");
									print("</td>");
									print("<td>");
										print("
												<input type = 'checkbox' value = 'hello' name = 'delete[]'>
										");
									print("</td>");
								print("</tr>");
								$rows++;
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<button class='btn btn-default' onclick = "submitForm('undeploy.php')"id = 'add_button1'>Revert</button>
	</form>
	</div>
</div>