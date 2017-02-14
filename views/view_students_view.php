<div class = "row">
	<div class = "col-xs-8">
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-user"></span> Students</h5>
			</div>
			<div class = "panel-bodyy panel-body">
				<table class = "table table-bordered table-hover">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Class</th>
							<th>Pin</th>
						</tr>	
					</thead>
					<tbody>
						<?php
							foreach($student_info as $student){
								print("<tr>");
									print("<td>".$student["first_name"]."</td>");
									print("<td>".$student["last_name"]."</td>");
									print("<td>".$student["username"]."</td>");
									print("<td>".$student["class"]."</td>");
									print("<td>".$student["pin"]."</td>");
								print("</tr>");
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class = "col-xs-4">
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-th-list"></span> Class Details</h4>
			</div>
			<div class = "panel-bodyy panel-body">
				<table class = "table table-bordered table-hover">
					<thead>
						<tr>
							<th>Class</th>
							<th>Number of Students</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>JSS 1</td>
							<td><?= $student_count["jss1"] ?></td>
						</tr>
						<tr>
							<td>JSS 2</td>
							<td><?= $student_count["jss2"] ?></td>
						</tr>
						<tr>
							<td>JSS 3</td>
							<td><?= $student_count["jss3"] ?></td>
						</tr>
						<tr>
							<td>SSS 1</td>
							<td><?= $student_count["sss1"] ?></td>
						</tr>
						<tr>
							<td>SSS 2</td>
							<td><?= $student_count["sss2"] ?></td>
						</tr>
						<tr>
							<td>SSS 3</td>
							<td><?= $student_count["sss3"] ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>