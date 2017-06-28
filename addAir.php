<?php include_once("header.php");  ?>
<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
 				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>           
				<form class="form-horizontal" id="add-air-form" method="post">
					<fieldset>
						<div class="control-group">											
							<label for="panneAir" class="control-label">Panne Air</label>
								<div class="controls">
									<input type="text" placeholder="panne air" name="panneAir"   required id="panneAir" class="span6">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="reponseAir" class="control-label">Solution Air</label>
								<div class="controls">
									<input type="text" placeholder="solution air" name="reponseAir" id="reponseAir" class="span6">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="datePanneAir" class="control-label">Date de la panne</label>
								<div class="controls">
									<input type="text" name="datePanneAir" placeholder="JJ-MM-AAAA" id="datePanneAir" class="span4">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<div class="control-group">											
							<label for="dateReponseAir" class="control-label">Date de la solution</label>
								<div class="controls">
									<input type="text" name="dateReponseAir" placeholder="JJ-MM-AAAA" id="dateReponseAir" class="span4">
								</div> <!-- /controls -->				
						</div> <!-- /control-group -->
						<br><br>
						<br>	
						<div class="form-actions">
							<button class="btn btn-primary" type="button" id="addAir">Sauvegarder</button> 
							<button class="btn">Cancel</button>
						</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- /formcontrol -->
   		</div><!-- widget -->
  	</div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>