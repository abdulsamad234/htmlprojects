<div class = "row">
	<div class = "col-xs-12">
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-list-alt"></span> Question Manager</h4>
			</div>
			<div class = "panel-bodyy panel-body">
				<form  action = "manage_questions.php" method="post" id = "columnarForm">
					<fieldset>
					    <div class="form-group">
                                <select name = "subject" class = "form-control" required>
                                    <option value = "" selected>Select Subject</optiion>
                                    <?php
                                    	foreach($subjec as $subject){
                                    		print("<option value = '{$subject['subject']}'>".ucfirst($subject['subject'])."</option>");
                                    	}
                                    ?>
                                </select>
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
                                <select name = "arm" class = "form-control">
                                    <option value = "" selected>Select Arm</optiion>
                                    <option value = "a">A</option>
                                    <option value = "b">B</option>
                                    <option value = "c">C</option>
                                </select>
                            </div>
					   <div class="form-group">
						   <button class="btn btn-default" onclick="submitForm('manage_questions.php')" id = "add_button1">
							   <span aria-hidden="true" class="glyphicon glyphicon-th-large"></span>
							   View Questions
						   </button>
						   <button class="btn btn-default" onclick="submitForm('add_questions.php')" type="submit" id = "add_button2" value = "add" name = "add">
							   <span aria-hidden="true" class="glyphicon glyphicon-plus-sign"></span>
							   Add Questions
						   </button>
					   	</div>
					   	<script>
                            function submitForm(action)
                            {
                                document.getElementById('columnarForm').action = action;
                                document.getElementById('columnarForm').submit();
                            }
                        </script>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>