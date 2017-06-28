<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_super8twin_info = $db_con->prepare("select * from super8twin where idSuper8twin = :idSuper8twin");
       $fetch_super8twin_info->execute(array(':idSuper8twin' => $_GET['idSuper8twin']));
	   $list = $fetch_super8twin_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
  				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="edit-super8twin-form" method="post">
					<fieldset>
						<input type="hidden" name="idSuper8twin" value="<?php echo $list[0]['idSuper8twin']; ?>">
							<div class="control-group">											
								<label for="panneSuper8twin" class="control-label">Panne Super 8</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['panneSuper8twin']; ?>" name="panneSuper8twin"   required id="panneSuper8twin" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper8twin" class="control-label">Solution Super 8</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['reponseSuper8twin']; ?>" name="reponseSuper8twin"  id="reponseSuper8twin" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper8twin" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['datePanneSuper8twin']; ?>" name="datePanneSuper8twin" placeholder="JJ-MM-AAAA"  id="datePanneSuper8twin" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper8twin" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['dateSolutionSuper8twin']; ?>" name="dateSolutionSuper8twin" placeholder="JJ-MM-AAAA"  id="dateSolutionSuper8twin" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<a  href="super8twin.php">
									<button class="btn btn-primary" type="button" id="listsuper8twin">Retour</button>
								</a>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- formcontrol -->
      	</div><!-- /widget -->
    </div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>