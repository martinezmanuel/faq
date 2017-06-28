<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_super12electrique_info = $db_con->prepare("select * from super12electrique where idSuper12electrique = :idSuper12electrique");
       $fetch_super12electrique_info->execute(array(':idSuper12electrique' => $_GET['idSuper12electrique']));
	   $list = $fetch_super12electrique_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
  				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="edit-super12electrique-form" method="post">
					<fieldset>
						<input type="hidden" name="idSuper12electrique" value="<?php echo $list[0]['idSuper12electrique']; ?>">
							<div class="control-group">											
								<label for="panneSuper12electrique" class="control-label">Panne Super 12</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['panneSuper12electrique']; ?>" name="panneSuper12electrique"   required id="panneSuper12electrique" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper12electrique" class="control-label">Solution Super 12</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['reponseSuper12electrique']; ?>" name="reponseSuper12electrique"  id="reponseSuper12electrique" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper12electrique" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['datePanneSuper12electrique']; ?>" name="datePanneSuper12electrique" placeholder="JJ-MM-AAAA"  id="datePanneSuper12electrique" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper12electrique" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['dateSolutionSuper12electrique']; ?>" name="dateSolutionSuper12electrique" placeholder="JJ-MM-AAAA"  id="dateSolutionSuper12electrique" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<button class="btn btn-primary" type="button" id="editSuper12electrique">Sauvegarder</button> 
								<button class="btn">Cancel</button>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- formcontrol -->
      	</div><!-- /widget -->
    </div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>