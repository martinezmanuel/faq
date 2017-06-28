<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_acrobat_info = $db_con->prepare("select * from acrobat500 where idAcrobat = :idAcrobat");
       $fetch_acrobat_info->execute(array(':idAcrobat' => $_GET['idAcrobat']));
	   $list = $fetch_acrobat_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="widget ">
 			<div id="formcontrols" class="tab-pane active">
 
  				<div class="alert" id="error-msg">

 				</div>
 
  				<div class="alert alert-success" id="success-msg">

  				</div>
  				<form class="form-horizontal" id="edit-acrobat-form" method="post">
					<fieldset>
						<input type="hidden" name="idAcrobat" value="<?php echo $list[0]['idAcrobat']; ?>">
							<div class="control-group">											
								<label for="panneAcrobat" class="control-label">Panne Acrobat</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['panneAcrobat']; ?>" placeholder="panne acrobat" name="panneAcrobat"   required id="panneAcrobat" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseAcrobat" class="control-label">Solution Acrobat</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['reponseAcrobat']; ?>"  placeholder="solution acrobat" name="reponseAcrobat"  id="reponseAcrobat" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneAcrobat" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['datePanneAcrobat']; ?>" name="datePanneAcrobat" placeholder="JJ-MM-AAAA"  id="datePanneAcrobat" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionAcrobat" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text" value="<?php echo $list[0]['dateSolutionAcrobat']; ?>" name="dateSolutionAcrobat" placeholder="JJ-MM-AAAA"  id="dateSolutionAcrobat" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<button class="btn btn-primary" type="button" id="editAcrobat">Sauvegarder</button> 
								<button class="btn">Cancel</button>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
			</div><!-- formcontrol -->
      	</div><!-- /widget -->
    </div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>