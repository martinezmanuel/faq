<?php include_once("header.php"); 
	  include_once("include/config.php");
    $statement = $db_con->prepare("select * from super12twin where idSuper12twin > :idSuper12twin");
    $statement->execute(array(':idSuper12twin' => 0));
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
 <a class="btn btn-primary" href="addSuper12twin.php" style="float:right">Ajouter une panne</a>
 <button class="btn btn-info btn-lg" onclick="self.location.href='codeErreurTwin.php'"> Code erreur Twin </button>
  <div class="widget widget-table action-table">
    <div class="widget-header"> 
        <h3>Panne et solution pour Super 12 twin</h3>
    </div><!-- /widget-header -->        
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th > Panne Super 12 </th>
              <th > Reponse Super 12</th>
              <th > Date panne Super 12</th>
              <th > Date solution Super 12</th>
              <th class="td-actions"> </th>
            </tr>
          </thead>
          <tbody>
                
                <?php
				foreach($list as $col)
				{
				  ?>
            <tr id="row_num_<?php echo $col['idSuper12twin'];   ?>">
              <td > <?php echo stripslashes ($col['panneSuper12twin']);  ?> </td>
              <td > <?php echo stripslashes ($col['reponseSuper12twin']);  ?> </td>
              <td > <?php echo $col['datePanneSuper12twin'];  ?> </td>
              <td > <?php echo $col['dateSolutionSuper12twin'];  ?> </td>
              <td class="td-actions">
                <a class="btn btn-small btn-success" href="editSuper12twin.php?idSuper12twin=<?php echo $col['idSuper12twin'];?>">
                  <i class="icon-large icon-edit"> </i>
                </a>
                <a class="btn btn-danger btn-small" onClick="getSuper12twinId(<?php echo $col['idSuper12twin'];?>)" href="javascript:void(0)">
                  <i class="btn-icon-only icon-remove"> </i>
                </a>
                <a class="btn btn-small btn-success" href="viewSuper12twin.php?idSuper12twin=<?php echo $col['idSuper12twin'];?>">
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
          <button class="btn btn-primary" onClick="deleteAir8()">Effacer</button>
        </div>
      </div>
					
          <?php include_once("footer.php");  ?>