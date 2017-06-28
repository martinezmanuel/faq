<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_acrobat650_info = $db_con->prepare("select * from acrobat650 where idAcrobat650 = :idAcrobat650");
       $fetch_acrobat650_info->execute(array(':idAcrobat650' => $_GET['idAcrobat650']));
	   $list = $fetch_acrobat650_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
  	<div class="row">
		<div class="widget ">
 	  		<div id="formcontrols" class="tab-pane active">
  				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="view-acrobat650-form" method="post">
					<fieldset>
						<input type="hidden" name="idAcrobat650" value="<?php echo $list[0]['idAcrobat650']; ?>">
							<div class="control-group">											
								<label for="panneAcrobat650" class="control-label">Panne Acrobat 650</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['panneAcrobat650']; ?>" placeholder="panne acrobat 650" name="panneAcrobat650"   required id="panneAcrobat650" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseAcrobat650" class="control-label">Solution Acrobat 650</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['reponseAcrobat650']; ?>"  placeholder="solution acrobat 650" name="reponseAcrobat650"  id="reponseAcrobat650" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneAcrobat650" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['datePanneAcrobat650']; ?>" name="datePanneAcrobat650" placeholder="JJ-MM-AAAA"  id="datePanneAcrobat650" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateSolutionAcrobat650" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['dateSolutionAcrobat650']; ?>" name="dateSolutionAcrobat650" placeholder="JJ-MM-AAAA"  id="dateSolutionAcrobat650" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<a  href="acrobat650.php">
									<button class="btn btn-primary" type="button" id="listAcrobat650">Retour</button>
								</a>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
	  		</div><!-- formcontrol -->
    	</div><!-- widget -->
  	</div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>