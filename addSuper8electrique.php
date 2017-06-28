<?php include_once("header.php");  ?>
<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
 				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
                                            
					<form class="form-horizontal" id="add-super8electrique-form" method="post">
						<fieldset>						
							<div class="control-group">											
								<label for="panneSuper8electrique" class="control-label">Panne Super 8</label>
									<div class="controls">
										<input type="text" placeholder="panne Super 8" name="panneSuper8electrique"   required id="panneSuper8electrique" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper8electrique" class="control-label">Solution Super 8t</label>
									<div class="controls">
										<input type="text" placeholder="solution Super 8" name="reponseSuper8electrique" id="reponseSuper8electrique" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper8electrique" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" name="datePanneSuper8electrique" placeholder="JJ-MM-AAAA" id="datePanneSuper8electrique" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper8electrique" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" name="dateSolutionSuper8electrique" placeholder="JJ-MM-AAAA" id="dateSolutionSuper8electrique" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br><br>
							<br>	
							<div class="form-actions">
								<button class="btn btn-primary" type="button" id="addSuper8electrique">Sauvegarder</button> 
								<button class="btn">Cancel</button>
							</div> <!-- /form-actions -->
						</fieldset>
					</form>
			</div><!-- /form-control -->
      	</div><!-- widget -->
    </div><!-- row -->
 </div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>