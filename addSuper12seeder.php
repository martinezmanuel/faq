<?php include_once("header.php");  ?>
<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
 				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
                                            
					<form class="form-horizontal" id="add-super12seeder-form" method="post">
						<fieldset>						
							<div class="control-group">											
								<label for="panneSuper12seeder" class="control-label">Panne Super 12 seeder</label>
									<div class="controls">
										<input type="text" placeholder="panne Super 12" name="panneSuper12seeder"   required id="panneSuper12seeder" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper12seeder" class="control-label">Solution Super 12 seeder</label>
									<div class="controls">
										<input type="text" placeholder="solution Super 12" name="reponseSuper12seeder" id="reponseSuper12seeder" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper12seeder" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" name="datePanneSuper12seeder" placeholder="JJ-MM-AAAA" id="datePanneSuper12seeder" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper12seeder" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" name="dateSolutionSuper12seeder" placeholder="JJ-MM-AAAA" id="dateSolutionSuper12seeder" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br><br>
							<br>	
							<div class="form-actions">
								<button class="btn btn-primary" type="button" id="addSuper12seeder">Sauvegarder</button> 
								<button class="btn">Cancel</button>
							</div> <!-- /form-actions -->
						</fieldset>
					</form>
			</div><!-- /form-control -->
      	</div><!-- widget -->
    </div><!-- row -->
 </div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>