<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_alpinist500_info = $db_con->prepare("select * from alpinist500 where idAlpinist500 = :idAlpinist500");
       $fetch_alpinist500_info->execute(array(':idAlpinist500' => $_GET['idAlpinist500']));
	   $list = $fetch_alpinist500_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
  				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="edit-alpinist500-form" method="post">
					<fieldset>
						<input type="hidden" name="idAlpinist500" value="<?php echo $list[0]['idAlpinist500']; ?>">
							<div class="control-group">											
								<label for="panneAlpinist500" class="control-label">Panne Alpinist 500</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['panneAlpinist500']; ?>" name="panneAlpinist500"   required id="panneAlpinist500" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseAlpinist500" class="control-label">Solution Alpinist 500</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['reponseAlpinist500']; ?>" name="reponseAlpinist500"  id="reponseAlpinist500" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneAlpinist500" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['datePanneAlpinist500']; ?>" name="datePanneAlpinist500" placeholder="JJ-MM-AAAA"  id="datePanneAlpinist500" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionAlpinist500" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['dateSolutionAlpinist500']; ?>" name="dateSolutionAlpinist500" placeholder="JJ-MM-AAAA"  id="dateSolutionAlpinist500" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<button class="btn btn-primary" type="button" id="editAlpinist500">Sauvegarder</button> 
								<button class="btn">Cancel</button>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- formcontrol -->
      	</div><!-- /widget -->
    </div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>