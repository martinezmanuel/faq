<?php include_once("header.php");  ?>
<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
 
 				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>           
				<form class="form-horizontal" id="add-alpinist500-form" method="post">
					<fieldset>
						<div class="control-group">											
							<label for="panneAlpinist500" class="control-label">Panne Alpinist500</label>
								<div class="controls">
									<input type="text" placeholder="panne alpinist500" name="panneAlpinist500"   required id="panneAlpinist500" class="span6">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="reponseAlpinist500" class="control-label">Solution Alpinist500</label>
								<div class="controls">
									<input type="text" placeholder="solution alpinist500" name="reponseAlpinist500" id="reponseAlpinist500" class="span6">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="datePanneAlpinist500" class="control-label">Date de la panne</label>
								<div class="controls">
									<input type="text" name="datePanneAlpinist500" placeholder="JJ-MM-AAAA" id="datePanneAlpinist500" class="span4">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="dateSolutionAlpinist500" class="control-label">Date de la solution</label>
								<div class="controls">
									<input type="text" name="dateSolutionAlpinist500" placeholder="JJ-MM-AAAA" id="dateSolutionAlpinist500" class="span4">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<br><br>
						<br>	
						<div class="form-actions">
							<button class="btn btn-primary" type="button" id="addAlpinist500">Sauvegarder</button> 
							<button class="btn">Cancel</button>
						</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- /formcontrol -->
   		</div><!-- widget -->
  	</div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>