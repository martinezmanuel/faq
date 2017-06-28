<?php include_once("header.php");
	  include_once("include/config.php");
	   $fetch_air_info = $db_con->prepare("select * from air where idAir = :idAir");
       $fetch_air_info->execute(array(':idAir' => $_GET['idAir']));
	   $list = $fetch_air_info->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
  	<div class="row">
		<div class="widget ">
 	  		<div id="formcontrols" class="tab-pane active">
  				<div class="alert" id="error-msg">
 				</div>
  				<div class="alert alert-success" id="success-msg">
  				</div>
  				<form class="form-horizontal" id="view-air-form" method="post">
					<fieldset>
						<input type="hidden" name="idAir" value="<?php echo $list[0]['idAir']; ?>">
							<div class="control-group">											
								<label for="panneAir" class="control-label">Panne Air 8</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['panneAir']; ?>" placeholder="panne air 8" name="panneAir"   required id="panneAir" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="reponseAir" class="control-label">Solution Air 8</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['reponseAir']; ?>"  placeholder="solution air 8" name="reponseAir"  id="reponseAir" class="span6">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="datePanneAir" class="control-label">Date de la panne</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['datePanneAir']; ?>" name="datePanneAir" placeholder="JJ-MM-AAAA"  id="datePanneAir" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label for="dateReponseAir" class="control-label">Date de la solution</label>
									<div class="controls">
										<input type="text"  readonly="readonly" value="<?php echo $list[0]['dateReponseAir']; ?>" name="dateReponseAir" placeholder="JJ-MM-AAAA"  id="dateReponseAir" class="span4">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<br>
							<div class="form-actions">
								<a  href="air.php">
									<button class="btn btn-primary" type="button" id="listAir">Retour</button>
								</a>
							</div> <!-- /form-actions -->
					</fieldset>
				</form>
	  		</div><!-- formcontrol -->
    	</div><!-- widget -->
  	</div><!-- row -->
</div><!-- container -->
          
         
          <?php include_once("footer.php");  ?>