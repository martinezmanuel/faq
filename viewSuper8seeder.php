<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_super8seeder_info = $db_con->prepare("select * from super8seeder where idSuper8seeder = :idSuper8seeder");
       $fetch_super8seeder_info->execute(array(':idSuper8seeder' => $_GET['idSuper8seeder']));
	   $list = $fetch_super8seeder_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
  				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="edit-super8seeder-form" method="post">
					<fieldset>
						<input type="hidden" name="idSuper8seeder" value="<?php echo $list[0]['idSuper8seeder']; ?>">
							<div class="control-group">											
								<label for="panneSuper8seeder" class="control-label">Panne Super 8</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['panneSuper8seeder']; ?>" name="panneSuper8seeder"   required id="panneSuper8seeder" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper8seeder" class="control-label">Solution Super 8</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['reponseSuper8seeder']; ?>" name="reponseSuper8seeder"  id="reponseSuper8seeder" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper8seeder" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['datePanneSuper8seeder']; ?>" name="datePanneSuper8seeder" placeholder="JJ-MM-AAAA"  id="datePanneSuper8seeder" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper8seeder" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['dateSolutionSuper8seeder']; ?>" name="dateSolutionSuper8seeder" placeholder="JJ-MM-AAAA"  id="dateSolutionSuper8seeder" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<a  href="super8seeder.php">
									<button class="btn btn-primary" type="button" id="listsuper8seeder">Retour</button>
								</a>
							</div><!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- formcontrol -->
      	</div><!-- /widget -->
    </div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>