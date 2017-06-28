<?php
	$db_con = new PDO('mysql:host=localhost;dbname=agricoilfr', 'mmartinez', '2ERFMn78HpuaPqGP');
	$error  = array();
	$res    = array();
	$success = "";
if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addAcrobat")
	{
		if(empty($_POST['panneAcrobat']))
		{
		  $error[] = "La ligne panne est requise";	
		}
		
		if(count($error)>0)
		{
		  $resp['msg']    = $error;
		  $resp['status'] = false;	
		  echo json_encode($resp);
		  exit;
		}

		  $sqlQuery = "INSERT INTO 	acrobat500(panneAcrobat,reponseAcrobat,datePanneAcrobat ,dateSolutionAcrobat)
		  VALUES(:panneAcrobat,:reponseAcrobat,:datePanneAcrobat,:dateSolutionAcrobat)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneAcrobat', $_POST['panneAcrobat'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseAcrobat', $_POST['reponseAcrobat'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneAcrobat', $_POST['datePanneAcrobat'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionAcrobat', $_POST['dateSolutionAcrobat'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editAcrobat")
	{
		if(empty($_POST['panneAcrobat']))
		{
		  $error[] = "La ligne panne est requise";	
		}
		
		if(count($error)>0)
		{
		  $resp['msg']    = $error;
		  $resp['status'] = false;	
		  echo json_encode($resp);
		  exit;
		}
		
		  $sqlQuery = "UPDATE acrobat500 SET panneAcrobat = :panneAcrobat, 
            reponseAcrobat  = :reponseAcrobat, 
            datePanneAcrobat  = :datePanneAcrobat,  
            dateSolutionAcrobat = :dateSolutionAcrobat
            WHERE idAcrobat = :idAcrobat";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneAcrobat', $_POST['panneAcrobat'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseAcrobat', $_POST['reponseAcrobat'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneAcrobat', $_POST['datePanneAcrobat'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionAcrobat', $_POST['dateSolutionAcrobat'], PDO::PARAM_STR);
		  $run->bindParam(':idAcrobat', $_POST['idAcrobat'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		   exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteAcrobat")
	{
		  $sqlQuery = "DELETE FROM acrobat500 WHERE idAcrobat =  :idAcrobat";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idAcrobat', $_POST['idAcrobat'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listAcrobat")
	{
	      $statement = $db_con->prepare("select * from acrobat500 where idAcrobat > :idAcrobat");
          $statement->execute(array(':idAcrobat' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}



if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addAlpinist500")
	{
		if(empty($_POST['panneAlpinist500']))
		{
		  $error[] = "La ligne panne est requise";	
		}
		
		if(count($error)>0)
		{
	      $resp['msg']    = $error;
		  $resp['status'] = false;	
		  echo json_encode($resp);
		  exit;
		}

		  $sqlQuery = "INSERT INTO 	alpinist500(panneAlpinist500,reponseAlpinist500,datePanneAlpinist500 ,dateSolutionAlpinist500)
		  VALUES(:panneAlpinist500,:reponseAlpinist500,:datePanneAlpinist500,:dateSolutionAlpinist500)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneAlpinist500', $_POST['panneAlpinist500'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseAlpinist500', $_POST['reponseAlpinist500'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneAlpinist500', $_POST['datePanneAlpinist500'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionAlpinist500', $_POST['dateSolutionAlpinist500'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editAlpinist500")
	{
		if(empty($_POST['panneAlpinist500']))
		{
		  $error[] = "La ligne panne est requise";	
		}
		

		if(count($error)>0)
		{
		  $resp['msg']    = $error;
		  $resp['status'] = false;	
		  echo json_encode($resp);
		  exit;
		}
		
		  $sqlQuery = "UPDATE alpinist500 SET panneAlpinist500 = :panneAlpinist500, 
            reponseAlpinist500  = :reponseAlpinist500, 
            datePanneAlpinist500  = :datePanneAlpinist500,  
            dateSolutionAlpinist500 = :dateSolutionAlpinist500
            WHERE idAlpinist500 = :idAlpinist500";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneAlpinist500', $_POST['panneAlpinist500'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseAlpinist500', $_POST['reponseAlpinist500'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneAlpinist500', $_POST['datePanneAlpinist500'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionAlpinist500', $_POST['dateSolutionAlpinist500'], PDO::PARAM_STR);
		  $run->bindParam(':idAlpinist500', $_POST['idAlpinist500'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteAlpinist500")
	{
		  $sqlQuery = "DELETE FROM alpinist500 WHERE idAlpinist500 =  :idAlpinist500";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idAlpinist500', $_POST['idAlpinist500'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listAlpinist500")
	{
	      $statement = $db_con->prepare("select * from alpinist500 where idAlpinist500 > :idAlpinist500");
          $statement->execute(array(':idAlpinist500' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}


if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addAcrobat650")
	{
		if(empty($_POST['panneAcrobat650']))
		{
		  $error[] = "La ligne panne est requise";	
		}
		
		if(count($error)>0)
		{
	      $resp['msg']    = $error;
		  $resp['status'] = false;	
		  echo json_encode($resp);
		  exit;
		}

		  $sqlQuery = "INSERT INTO 	acrobat650(panneAcrobat650,reponseAcrobat650,datePanneAcrobat650 ,dateSolutionAcrobat650)
		  VALUES(:panneAcrobat650,:reponseAcrobat650,:datePanneAcrobat650,:dateSolutionAcrobat650)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneAcrobat650', $_POST['panneAcrobat650'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseAcrobat650', $_POST['reponseAcrobat650'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneAcrobat650', $_POST['datePanneAcrobat650'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionAcrobat650', $_POST['dateSolutionAcrobat650'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editAcrobat650")
	{
		if(empty($_POST['panneAcrobat650']))
		{
		  $error[] = "La ligne panne est requise";	
		}
		

		if(count($error)>0)
		{
		  $resp['msg']    = $error;
		  $resp['status'] = false;	
		  echo json_encode($resp);
		  exit;
		}
		
		  $sqlQuery = "UPDATE acrobat650 SET panneAcrobat650 = :panneAcrobat650, 
            reponseAcrobat650  = :reponseAcrobat650, 
            datePanneAcrobat650  = :datePanneAcrobat650,  
            dateSolutionAcrobat650 = :dateSolutionAcrobat650
            WHERE idAcrobat650 = :idAcrobat650";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneAcrobat650', $_POST['panneAcrobat650'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseAcrobat650', $_POST['reponseAcrobat650'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneAcrobat650', $_POST['datePanneAcrobat650'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionAcrobat650', $_POST['dateSolutionAcrobat650'], PDO::PARAM_STR);
		  $run->bindParam(':idAcrobat650', $_POST['idAcrobat650'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteAcrobat650")
	{
		  $sqlQuery = "DELETE FROM acrobat650 WHERE idAcrobat650 =  :idAcrobat650";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idAcrobat650', $_POST['idAcrobat650'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listAcrobat650")
	{
	      $statement = $db_con->prepare("select * from acrobat650 where idAcrobat650 > :idAcrobat650");
          $statement->execute(array(':idAcrobat650' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}

?>