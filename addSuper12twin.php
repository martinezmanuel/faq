<?php include_once("header.php");  ?>
<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
 				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
                                            
					<form class="form-horizontal" id="add-super12twin-form" method="post">
						<fieldset>						
							<div class="control-group">											
								<label for="panneSuper12twin" class="control-label">Panne Super 12 twin</label>
									<div class="controls">
										<input type="text" placeholder="panne Super 12" name="panneSuper12twin"   required id="panneSuper12twin" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper12twin" class="control-label">Solution Super 12 twin</label>
									<div class="controls">
										<input type="text" placeholder="solution Super 12" name="reponseSuper12twin" id="reponseSuper12twin" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper12twin" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" name="datePanneSuper12twin" placeholder="JJ-MM-AAAA" id="datePanneSuper12twin" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper12twin" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" name="dateSolutionSuper12twin" placeholder="JJ-MM-AAAA" id="dateSolutionSuper12twin" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br><br>
							<br>	
							<div class="form-actions">
								<button class="btn btn-primary" type="button" id="addSuper12twin">Sauvegarder</button> 
								<button class="btn">Cancel</button>
							</div> <!-- /form-actions -->
						</fieldset>
					</form>
			</div><!-- /form-control -->
      	</div><!-- widget -->
    </div><!-- row -->
 </div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>