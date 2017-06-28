<?php include_once("header.php"); 
	  include_once("include/config.php");
    $statement = $db_con->prepare("select * from alpinist500 where idAlpinist500 > :idAlpinist500");
    $statement->execute(array(':idAlpinist500' => 0));
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
      <a class="btn btn-primary" href="addAlpinist500.php" style="float:right">Ajouter une panne</a>
        <div class="widget widget-table action-table">
          <div class="widget-header"> 
            <h3>Panne et solution pour l'Alpinist 500</h3>
          </div><!-- /widget-header -->
            
          <div class="widget-content">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th > Panne Alpinist 500 </th>
                  <th > Reponse Alpinist 500</th>
                  <th > Date panne Alpinist 500</th>
                  <th > Date solution Alpinist 500</th>
                  <th class="td-actions"> </th>
                </tr>
              </thead>
              <tbody>
                
                <?php
				foreach($list as $col)
				{

				  ?>
                <tr id="row_num_<?php echo $col['idAlpinist500'];   ?>">
                  <td > <?php echo stripslashes ($col['panneAlpinist500']);  ?> </td>
                  <td > <?php echo stripslashes ($col['reponseAlpinist500']);?> </td>
                  <td > <?php echo $col['datePanneAlpinist500'];?> </td>
                  <td > <?php echo $col['dateSolutionAlpinist500'];?></td>
                  <td class="td-actions">
                    <a class="btn btn-small btn-success" href="editAlpinist500.php?idAlpinist500=<?php echo $col['idAlpinist500'];?>">
                      <i class="icon-large icon-edit"> </i>
                    </a>
                    <a class="btn btn-danger btn-small" onClick="getAlpinist500Id(<?php echo $col['idAlpinist500'];?>)" href="javascript:void(0)">
                      <i class="btn-icon-only icon-remove"> </i>
                    </a>
                    <a class="btn btn-small btn-success" href="viewAlpinist500.php?idAlpinist500=<?php echo $col['idAlpinist500'];?>">
                      <i class="icon-th-list"></i>
                    </a>
                  </td>
                </tr>
                  <?php } ?>

              </tbody>
            </table>
          </div><!-- /widget-content -->     
      </div>
    </div><!--row --> 
  </div><!-- container --> 
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
          <button class="btn btn-primary" onClick="deleteAlpinist500()">Effacer</button>
        </div>
      </div>
											
											
          <?php include_once("footer.php");  ?>