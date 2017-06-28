<?php include_once("header.php");  ?>
<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
 
 				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>           
				<form class="form-horizontal" id="add-acrobat650-form" method="post">
					<fieldset>
						<div class="control-group">											
							<label for="panneAcrobat650" class="control-label">Panne Acrobat650</label>
								<div class="controls">
									<input type="text" placeholder="panne acrobat 650" name="panneAcrobat650"   required id="panneAcrobat650" class="span6">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="reponseAcrobat650" class="control-label">Solution Acrobat 650</label>
								<div class="controls">
									<input type="text" placeholder="solution acrobat650" name="reponseAcrobat650" id="reponseAcrobat650" class="span6">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="datePanneAcrobat650" class="control-label">Date de la panne</label>
								<div class="controls">
									<input type="text" name="datePanneAcrobat650" placeholder="JJ-MM-AAAA" id="datePanneAcrobat650" class="span4">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="dateSolutionAcrobat650" class="control-label">Date de la solution</label>
								<div class="controls">
									<input type="text" name="dateSolutionAcrobat650" placeholder="JJ-MM-AAAA" id="dateSolutionAcrobat650" class="span4">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<br><br>
						<br>
						<div class="form-actions">
							<button class="btn btn-primary" type="button" id="addAcrobat650">Sauvegarder</button> 
							<button class="btn">Cancel</button>
						</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- /formcontrol -->
   		</div><!-- widget -->
  	</div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>