<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_super12seeder_info = $db_con->prepare("select * from super12seeder where idSuper12seeder = :idSuper12seeder");
       $fetch_super12seeder_info->execute(array(':idSuper12seeder' => $_GET['idSuper12seeder']));
	   $list = $fetch_super12seeder_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
  				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="edit-super12seeder-form" method="post">
					<fieldset>
						<input type="hidden" name="idSuper12seeder" value="<?php echo $list[0]['idSuper12seeder']; ?>">
							<div class="control-group">											
								<label for="panneSuper12seeder" class="control-label">Panne Super 12</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['panneSuper12seeder']; ?>" name="panneSuper12seeder"   required id="panneSuper12seeder" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper12seeder" class="control-label">Solution Super 12</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['reponseSuper12seeder']; ?>" name="reponseSuper12seeder"  id="reponseSuper12seeder" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper12seeder" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['datePanneSuper12seeder']; ?>" name="datePanneSuper12seeder" placeholder="JJ-MM-AAAA"  id="datePanneSuper12seeder" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper12seeder" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['dateSolutionSuper12seeder']; ?>" name="dateSolutionSuper12seeder" placeholder="JJ-MM-AAAA"  id="dateSolutionSuper12seeder" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<a  href="super12seeder.php">
									<button class="btn btn-primary" type="button" id="listsuper12seeder">Retour</button>
								</a>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- formcontrol -->
      	</div><!-- /widget -->
    </div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>