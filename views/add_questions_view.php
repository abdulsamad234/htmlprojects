<div class = "row">
	<div class = "col-xs-12">
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-align-justify"></span> Add Questions</h5>
			</div>
			<script>
                function submitForm(action)
                {
                    document.getElementById('columnarForm').action = action;
                    document.getElementById('columnarForm').submit();
                }
            </script>
			<div class = "panel-bodyy panel-body">
				<form class = "form-inline" action="add_question_for_real" method="post" id = "columnarForm">
                        <fieldset>
                            <h3 style = "margin:0px"><?=$question_number?></h3>
                            <div class="form-group">
                                <textarea style = "margin: 1%" autocomplete="off" autofocus class="form-control" rows = "10" cols ="145" name="question" placeholder="Question" type="textview" required></textarea>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="a" placeholder="A" type="text" required/>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="b" placeholder="B" type="text" required/>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="c" placeholder="C" type="text" required/>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="d" placeholder="D" type="text" required/>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="e" placeholder="E" type="text" required/>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="correct_answer" placeholder="Correct Answer" type="text" required/>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-default" onclick="submitForm('next.php')" type="submit" id = "add_button2" value = "add" name = "add">
							       Next
							       <span aria-hidden="true" class="glyphicon glyphicon-hand-right"></span>
						        </button>
                            </div>
                        </fieldset>
                    </form>		
			</div>
		</div>
	</div>
</div>