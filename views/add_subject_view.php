<div class = "row">
	<div class = "col-xs-6">
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-align-justify"></span> Subjects by Class</h5>
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
							<td>
								<?php
									for($i = 0; $i < count($jss1); $i++){
										if($jss1[$i] != end($jss1)){
											print(ucfirst($jss1[$i]).", ");
										}
										else{
											print(ucfirst($jss1[$i]).".");	
										}
										
									}
								?>
							</td>
						</tr>
						<tr>
							<td>JSS 2</td>
							<td>
								<?php
									for($i = 0; $i < count($jss2); $i++){
										if($jss2[$i] != end($jss2)){
											print(ucfirst($jss2[$i]).", ");
										}
										else{
											print(ucfirst($jss2[$i]).".");	
										}
										
									}
								?>
							</td>
						</tr>
						<tr>
							<td>JSS 3</td>
							<td>
								<?php
									for($i = 0; $i < count($jss3); $i++){
										if($jss3[$i] != end($jss3)){
											print(ucfirst($jss3[$i]).", ");
										}
										else{
											print(ucfirst($jss3[$i]).".");	
										}
										
									}
								?>
							</td>
						</tr>
						<tr>
							<td>SSS 1</td>
							<td>
								<?php
									for($i = 0; $i < count($sss1); $i++){
										if($sss1[$i] != end($sss1)){
											print(ucfirst($sss1[$i]).", ");
										}
										else{
											print(ucfirst($sss1[$i]).".");	
										}
										
									}
								?>
							</td>
						</tr>
						<tr>
							<td>SSS 2</td>
							<td>
								<?php
									for($i = 0; $i < count($sss2); $i++){
										if($sss2[$i] != end($sss2)){
											print(ucfirst($sss2[$i]).", ");
										}
										else{
											print(ucfirst($sss2[$i]).".");	
										}
										
									}
								?>
							</td>
						</tr>
						<tr>
							<td>SSS 3</td>
							<td>
								<?php
									for($i = 0; $i < count($sss3); $i++){
										if($sss3[$i] != end($sss3)){
											print(ucfirst($sss3[$i]).", ");
										}
										else{
											print(ucfirst($sss3[$i]).".");	
										}
										
									}
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class = "col-xs-6">
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-plus"></span> Add Subject</h4>
			</div>
			<div class = "panel-bodyy panel-body">
				<form  action = "add_subject.php" method="post">
					<fieldset>
					    <div class = "form-group">
					        <input type = "text" class = "form-control" name = "subject" placeholder = "Subject Name" required = "required">
					    </div>
					     <div class="form-group">
                                <select name = "class" class = "form-control" required>
                                    <option value = "" selected>Select Class</optiion>
                                    <option value = "jss_1">JSS 1</option>
                                    <option value = "jss_2">JSS 2</option>
                                    <option value = "jss_3">JSS 3</option>
                                    <option value = "sss_1">SSS 1</option>
                                    <option value = "sss_2">SSS 2</option>
                                    <option value = "sss_3">SSS 3</option>
                                </select>
                            </div>
					   <div class="form-group">
						   <button class="btn btn-default" type="submit" id = "add_button">
							   <span aria-hidden="true" class="glyphicon glyphicon-plus-sign"></span>
							   Add Subject
						   </button>
					   	</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>