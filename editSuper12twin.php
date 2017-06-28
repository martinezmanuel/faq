<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_super12twin_info = $db_con->prepare("select * from super12twin where idSuper12twin = :idSuper12twin");
       $fetch_super12twin_info->execute(array(':idSuper12twin' => $_GET['idSuper12twin']));
	   $list = $fetch_super12twin_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
  				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="edit-super12twin-form" method="post">
					<fieldset>
						<input type="hidden" name="idSuper12twin" value="<?php echo $list[0]['idSuper12twin']; ?>">
							<div class="control-group">											
								<label for="panneSuper12twin" class="control-label">Panne Super 12</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['panneSuper12twin']; ?>" name="panneSuper12twin"   required id="panneSuper12twin" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper12twin" class="control-label">Solution Super 12</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['reponseSuper12twin']; ?>" name="reponseSuper12twin"  id="reponseSuper12twin" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper12twin" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['datePanneSuper12twin']; ?>" name="datePanneSuper12twin" placeholder="JJ-MM-AAAA"  id="datePanneSuper12twin" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper12twin" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['dateSolutionSuper12twin']; ?>" name="dateSolutionSuper12twin" placeholder="JJ-MM-AAAA"  id="dateSolutionSuper12twin" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<button class="btn btn-primary" type="button" id="editSuper12twin">Sauvegarder</button> 
								<button class="btn">Cancel</button>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- formcontrol -->
      	</div><!-- /widget -->
    </div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>