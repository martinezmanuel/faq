<?php include_once("header.php"); 
	  include_once("include/config.php");
    $statement = $db_con->prepare("select * from acrobat500 where idAcrobat > :idAcrobat");
    $statement->execute(array(':idAcrobat' => 0));
	$list = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container" style="margin-top:50px">
 <div class="row">
  <div class="alert" id="error-msg">
  </div>
   <div class="alert alert-success" id="success-msg">
   </div>
  <br>
  <br>
 <a class="btn btn-primary" href="addAcrobat.php" style="float:right">Ajouter une panne</a>
  <div class="widget widget-table action-table">
    <div class="widget-header"> 
        <h3>Panne et solution pour l'Acrobat</h3>
    </div><!-- /widget-header -->        
      <div class="widget-content">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th > Panne Acrobat </th>
              <th > Reponse Acrobat</th>
              <th > Date panne Acrobat</th>
              <th > Date solution Acobat</th>
              <th class="td-actions"> </th>
            </tr>
          </thead>
          <tbody>
                
                <?php
				foreach($list as $col)
				{
				  ?>
            <tr id="row_num_<?php echo $col['idAcrobat'];   ?>">
              <td > <?php echo stripslashes ($col['panneAcrobat']);  ?> </td>
              <td > <?php echo stripslashes ($col['reponseAcrobat']);  ?> </td>
              <td > <?php echo $col['datePanneAcrobat'];  ?> </td>
              <td > <?php echo $col['dateSolutionAcrobat'];  ?> </td>
              <td class="td-actions">
                <a class="btn btn-small btn-success" href="editAcrobat.php?idAcrobat=<?php echo $col['idAcrobat'];?>">
                  <i class="icon-large icon-edit"> </i>
                </a>
                <a class="btn btn-danger btn-small" onClick="getAcrobatId(<?php echo $col['idAcrobat'];?>)" href="javascript:void(0)">
                  <i class="btn-icon-only icon-remove"> </i>
                </a>
                <a class="btn btn-small btn-success" href="viewAcrobat.php?idAcrobat=<?php echo $col['idAcrobat'];?>">
                  <i class="icon-th-list"></i>
                </a>
              </td>
            </tr>
             <?php } ?>

          </tbody>
        </table>
      </div><!-- /widget-content -->        
     </div><!-- /widget-table --> 
    </div><!--row -->
   </div><!--container -->
           <!-- Button to trigger modal -->
               <!-- Modal -->
      <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Alerte</h3>
        </div>
        <div class="modal-body">
          <p>Etes vous sur de bien vouloir suprimer votre enregistrement ?</p>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
          <button class="btn btn-primary" onClick="deleteAcrobat()">Effacer</button>
        </div>
      </div>
					
          <?php include_once("footer.php");  ?>