<?php include_once("header.php"); 
	  include_once("include/config.php");
    $statement = $db_con->prepare("select * from super8seeder where idSuper8seeder > :idSuper8seeder");
    $statement->execute(array(':idSuper8seeder' => 0));
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
 <a class="btn btn-primary" href="addSuper8seeder.php" style="float:right">Ajouter une panne</a>
 <button class="btn btn-info btn-lg" onclick="self.location.href='codeErreurSeeder.php'"> Code erreur Seeder </button>
  <div class="widget widget-table action-table">
    <div class="widget-header"> 
        <h3>Panne et solution pour Super 8 boitier seeder</h3>
    </div><!-- /widget-header -->        
      <div class="widget-content">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th > Panne Super 8 seeder </th>
              <th > Reponse Super 8 seeder</th>
              <th > Date panne Super 8 seeder</th>
              <th > Date solution Super 8 seeder</th>
              <th class="td-actions"> </th>
            </tr>
          </thead>
          <tbody>
                
                <?php
				foreach($list as $col)
				{
				  ?>
            <tr id="row_num_<?php echo $col['idSuper8seeder'];   ?>">
              <td > <?php echo stripslashes( $col['panneSuper8seeder']);  ?> </td>
              <td > <?php echo stripslashes ($col['reponseSuper8seeder']);  ?> </td>
              <td > <?php echo $col['datePanneSuper8seeder'];  ?> </td>
              <td > <?php echo $col['dateSolutionSuper8seeder'];  ?> </td>
              <td class="td-actions">
                <a class="btn btn-small btn-success" href="editSuper8seeder.php?idSuper8seeder=<?php echo $col['idSuper8seeder'];?>">
                  <i class="icon-large icon-edit"> </i>
                </a>
                <a class="btn btn-danger btn-small" onClick="getSuper8seederId(<?php echo $col['idSuper8seeder'];?>)" href="javascript:void(0)">
                  <i class="btn-icon-only icon-remove"> </i>
                </a>
                <a class="btn btn-small btn-success" href="viewSuper8seeder.php?idSuper8seeder=<?php echo $col['idSuper8seeder'];?>">
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