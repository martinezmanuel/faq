<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_super8electrique_info = $db_con->prepare("select * from super8electrique where idSuper8electrique = :idSuper8electrique");
       $fetch_super8electrique_info->execute(array(':idSuper8electrique' => $_GET['idSuper8electrique']));
	   $list = $fetch_super8electrique_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
  	<div class="row">
		<div class="widget ">
 	  		<div id="formcontrols" class="tab-pane active">
 				<div class="alert" id="error-msg">
 				</div>
				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="view-super8electrique-form" method="post">
					<fieldset>
						<input type="hidden" name="idSuper8electrique" value="<?php echo $list[0]['idSuper8electrique']; ?>">
							<div class="control-group">											
								<label for="panneSuper8electrique" class="control-label">Panne Super 8</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['panneSuper8electrique']; ?>" placeholder="panne Super8electrique" name="panneSuper8electrique"   required id="panneSuper8electrique" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseSuper8electrique" class="control-label">Solution Super 8</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['reponseSuper8electrique']; ?>"  placeholder="solution Super8electrique" name="reponseSuper8electrique"  id="reponseSuper8electrique" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneSuper8electrique" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['datePanneSuper8electrique']; ?>" name="datePanneSuper8electrique" placeholder="JJ-MM-AAAA"  id="datePanneSuper8electrique" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionSuper8electrique" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['dateSolutionSuper8electrique']; ?>" name="dateSolutionSuper8electrique" placeholder="JJ-MM-AAAA"  id="dateSolutionSuper8electrique" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<a  href="Super8electrique.php">
									<button class="btn btn-primary" type="button" id="listSuper8electrique">Retour</button>
								</a>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- formcontrol -->
      	</div><!-- widget -->
    </div><!-- row -->
 </div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>