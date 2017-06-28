<?php include_once("header.php");  ?>
<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
 				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
                                            
					<form class="form-horizontal" id="add-acrobat-form" method="post">
						<fieldset>						
							<div class="control-group">											
								<label for="panneAcrobat" class="control-label">Panne Acrobat</label>
									<div class="controls">
										<input type="text" placeholder="panne acrobat" name="panneAcrobat"   required id="panneAcrobat" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseAcrobat" class="control-label">Solution Acrobat</label>
									<div class="controls">
										<input type="text" placeholder="solution acrobat" name="reponseAcrobat" id="reponseAcrobat" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneAcrobat" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" name="datePanneAcrobat" placeholder="JJ-MM-AAAA" id="datePanneAcrobat" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionAcrobat" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" name="dateSolutionAcrobat" placeholder="JJ-MM-AAAA" id="dateSolutionAcrobat" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br><br>
							<br>	
							<div class="form-actions">
								<button class="btn btn-primary" type="button" id="addAcrobat">Sauvegarder</button> 
								<button class="btn">Cancel</button>
							</div> <!-- /form-actions -->
						</fieldset>
					</form>
			</div><!-- /form-control -->
      	</div><!-- widget -->
    </div><!-- row -->
 </div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>