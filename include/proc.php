<?php
$db_con = new PDO('mysql:host=localhost;dbname=agricoilfr', 'mmartinez', '2ERFMn78HpuaPqGP');
	$error  = array();
	$res    = array();
	$success = "";

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addSuper8electrique")
	{
		if(empty($_POST['panneSuper8electrique']))
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

		  $sqlQuery = "INSERT INTO 	super8electrique(panneSuper8electrique,reponseSuper8electrique,datePanneSuper8electrique ,dateSolutionSuper8electrique)
		  VALUES(:panneSuper8electrique,:reponseSuper8electrique,:datePanneSuper8electrique,:dateSolutionSuper8electrique)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper8electrique', $_POST['panneSuper8electrique'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper8electrique', $_POST['reponseSuper8electrique'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper8electrique', $_POST['datePanneSuper8electrique'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionSuper8electrique', $_POST['dateSolutionSuper8electrique'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editSuper8electrique")
	{
		if(empty($_POST['panneSuper8electrique']))
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
		
		  $sqlQuery = "UPDATE super8electrique SET panneSuper8electrique = :panneSuper8electrique, 
            reponseSuper8electrique  = :reponseSuper8electrique, 
            datePanneSuper8electrique  = :datePanneSuper8electrique,  
            dateSolutionSuper8electrique = :dateSolutionSuper8electrique
            WHERE idSuper8electrique = :idSuper8electrique";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper8electrique', $_POST['panneSuper8electrique'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper8electrique', $_POST['reponseSuper8electrique'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper8electrique', $_POST['datePanneSuper8electrique'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionSuper8electrique', $_POST['dateSolutionSuper8electrique'], PDO::PARAM_STR);
		  $run->bindParam(':idSuper8electrique', $_POST['idSuper8electrique'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		   exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteSuper8electrique")
	{
		  $sqlQuery = "DELETE FROM super8electrique WHERE idSuper8electrique =  :idSuper8electrique";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idSuper8electrique', $_POST['idSuper8electrique'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listSuper8electrique")
	{
	      $statement = $db_con->prepare("select * from super8electrique where idSuper8electrique > :idSuper8electrique");
          $statement->execute(array(':idSuper8electrique' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addSuper12electrique")
	{
		if(empty($_POST['panneSuper12electrique']))
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

		  $sqlQuery = "INSERT INTO 	super12electrique(panneSuper12electrique,reponseSuper12electrique,datePanneSuper12electrique ,dateSolutionSuper12electrique)
		  VALUES(:panneSuper12electrique,:reponseSuper12electrique,:datePanneSuper12electrique,:dateSolutionSuper12electrique)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper12electrique', $_POST['panneSuper12electrique'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper12electrique', $_POST['reponseSuper12electrique'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper12electrique', $_POST['datePanneSuper12electrique'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionSuper12electrique', $_POST['dateSolutionSuper12electrique'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editSuper12electrique")
	{
		if(empty($_POST['panneSuper12electrique']))
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
		
		  $sqlQuery = "UPDATE super12electrique SET panneSuper12electrique = :panneSuper12electrique, 
            reponseSuper12electrique  = :reponseSuper12electrique, 
            datePanneSuper12electrique  = :datePanneSuper12electrique,  
            dateSolutionSuper12electrique = :dateSolutionSuper12electrique
            WHERE idSuper12electrique = :idSuper12electrique";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper12electrique', $_POST['panneSuper12electrique'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper12electrique', $_POST['reponseSuper12electrique'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper12electrique', $_POST['datePanneSuper12electrique'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionSuper12electrique', $_POST['dateSolutionSuper12electrique'], PDO::PARAM_STR);
		  $run->bindParam(':idSuper12electrique', $_POST['idSuper12electrique'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		   exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteSuper12electrique")
	{
		  $sqlQuery = "DELETE FROM super12electrique WHERE idSuper12electrique =  :idSuper12electrique";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idSuper12electrique', $_POST['idSuper12electrique'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listSuper12electrique")
	{
	      $statement = $db_con->prepare("select * from super12electrique where idSuper12electrique > :idSuper12electrique");
          $statement->execute(array(':idSuper12electrique' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addSuper12seeder")
	{
		if(empty($_POST['panneSuper12seeder']))
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

		  $sqlQuery = "INSERT INTO 	super12seeder(panneSuper12seeder,reponseSuper12seeder,datePanneSuper12seeder ,dateSolutionSuper12seeder)
		  VALUES(:panneSuper12seeder,:reponseSuper12seeder,:datePanneSuper12seeder,:dateSolutionSuper12seeder)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper12seeder', $_POST['panneSuper12seeder'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper12seeder', $_POST['reponseSuper12seeder'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper12seeder', $_POST['datePanneSuper12seeder'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionSuper12seeder', $_POST['dateSolutionSuper12seeder'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editSuper12seeder")
	{
		if(empty($_POST['panneSuper8electrique']))
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
		
		  $sqlQuery = "UPDATE super12seeder SET panneSuper12seeder = :panneSuper12seeder, 
            reponseSuper12seeder  = :reponseSuper12seeder, 
            datePanneSuper12seeder  = :datePanneSuper12seeder,  
            dateSolutionSuper12seeder = :dateSolutionSuper12seeder
            WHERE idSuper12seeder = :idSuper12seeder";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper12seeder', $_POST['panneSuper12seeder'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper12seeder', $_POST['reponseSuper12seeder'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper12seeder', $_POST['datePanneSuper12seeder'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionSuper12seeder', $_POST['dateSolutionSuper12seeder'], PDO::PARAM_STR);
		  $run->bindParam(':idSuper12seeder', $_POST['idSuper12seeder'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		   exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteSuper12seeder")
	{
		  $sqlQuery = "DELETE FROM super12seeder WHERE idSuper12seeder =  :idSuper12seeder";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idSuper12seeder', $_POST['idSuper12seeder'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listSuper12seeder")
	{
	      $statement = $db_con->prepare("select * from super12seeder where idSuper12seeder > :idSuper12seeder");
          $statement->execute(array(':idSuper12seeder' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addSuper12twin")
	{
		if(empty($_POST['panneSuper12twin']))
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

		  $sqlQuery = "INSERT INTO 	super12twin(panneSuper12twin,reponseSuper12twin,datePanneSuper12twin ,dateSolutionSuper12twin)
		  VALUES(:panneSuper12twin,:reponseSuper12twin,:datePanneSuper12twin,:dateSolutionSuper12twin)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper12twin', $_POST['panneSuper12twin'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper12twin', $_POST['reponseSuper12twin'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper12twin', $_POST['datePanneSuper12twin'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionSuper12twin', $_POST['dateSolutionSuper12twin'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editSuper12twin")
	{
		if(empty($_POST['panneSuper8electrique']))
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
		
		  $sqlQuery = "UPDATE super12twin SET panneSuper12twin = :panneSuper12twin, 
            reponseSuper12twin  = :reponseSuper12twin, 
            datePanneSuper12twin  = :datePanneSuper12twin,  
            dateSolutionSuper12twin = :dateSolutionSuper12twin
            WHERE idSuper12twin = :idSuper12twin";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper12twin', $_POST['panneSuper12twin'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper12twin', $_POST['reponseSuper12twin'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper12twin', $_POST['datePanneSuper12twin'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionSuper12twin', $_POST['dateSolutionSuper12twin'], PDO::PARAM_STR);
		  $run->bindParam(':idSuper12twin', $_POST['idSuper12twin'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		   exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteSuper12twin")
	{
		  $sqlQuery = "DELETE FROM super12twin WHERE idSuper12twin =  :idSuper12twin";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idSuper12twin', $_POST['idSuper12twin'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listSuper12twin")
	{
	      $statement = $db_con->prepare("select * from super12twin where idSuper12twin > :idSuper12twin");
          $statement->execute(array(':idSuper12twin' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}	

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addSuper8seeder")
	{
		if(empty($_POST['panneSuper8seeder']))
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

		  $sqlQuery = "INSERT INTO 	super8seeder(panneSuper8seeder,reponseSuper8seeder,datePanneSuper8seeder ,dateSolutionSuper8seeder)
		  VALUES(:panneSuper8seeder,:reponseSuper8seeder,:datePanneSuper8seeder,:dateSolutionSuper8seeder)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper8seeder', $_POST['panneSuper8seeder'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper8seeder', $_POST['reponseSuper8seeder'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper8seeder', $_POST['datePanneSuper8seeder'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionSuper8seeder', $_POST['dateSolutionSuper8seeder'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editSuper8seeder")
	{
		if(empty($_POST['panneSuper8seeder']))
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
		
		  $sqlQuery = "UPDATE super8seeder SET panneSuper8seeder = :panneSuper8seeder, 
            reponseSuper8seeder  = :reponseSuper8seeder, 
            datePanneSuper8seeder  = :datePanneSuper8seeder,  
            dateSolutionSuper8seeder = :dateSolutionSuper8seeder
            WHERE idSuper8seeder = :idSuper8seeder";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper8seeder', $_POST['panneSuper8seeder'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper8seeder', $_POST['reponseSuper8seeder'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper8seeder', $_POST['datePanneSuper8seeder'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionSuper8seeder', $_POST['dateSolutionSuper8seeder'], PDO::PARAM_STR);
		  $run->bindParam(':idSuper8seeder', $_POST['idSuper8seeder'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		   exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteSuper8seeder")
	{
		  $sqlQuery = "DELETE FROM super8seeder WHERE idSuper8seeder =  :idSuper8seeder";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idSuper8seeder', $_POST['idSuper8seeder'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listSuper8seeder")
	{
	      $statement = $db_con->prepare("select * from super8seeder where idSuper8seeder > :idSuper8seeder");
          $statement->execute(array(':idSuper8seeder' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}		


if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addSuper8twin")
	{
		if(empty($_POST['panneSuper8twin']))
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

		  $sqlQuery = "INSERT INTO 	super8twin(panneSuper8twin,reponseSuper8twin,datePanneSuper8twin ,dateSolutionSuper8twin)
		  VALUES(:panneSuper8twin,:reponseSuper8twin,:datePanneSuper8twin,:dateSolutionSuper8twin)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper8twin', $_POST['panneSuper8twin'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper8twin', $_POST['reponseSuper8twin'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper8twin', $_POST['datePanneSuper8twin'], PDO::PARAM_STR); 
		  $run->bindValue(':dateSolutionSuper8twin', $_POST['dateSolutionSuper8twin'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editSuper8twin")
	{
		if(empty($_POST['panneSuper8twin']))
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
		
		  $sqlQuery = "UPDATE super8twin SET panneSuper8twin = :panneSuper8twin, 
            reponseSuper8twin  = :reponseSuper8twin, 
            datePanneSuper8twin  = :datePanneSuper8twin,  
            dateSolutionSuper8twin = :dateSolutionSuper8twin
            WHERE idSuper8twin = :idSuper8twin";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneSuper8twin', $_POST['panneSuper8twin'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseSuper8twin', $_POST['reponseSuper8twin'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneSuper8twin', $_POST['datePanneSuper8twin'], PDO::PARAM_STR);  
		  $run->bindValue(':dateSolutionSuper8twin', $_POST['dateSolutionSuper8twin'], PDO::PARAM_STR);
		  $run->bindParam(':idSuper8twin', $_POST['idSuper8twin'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		   exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteSuper8twin")
	{
		  $sqlQuery = "DELETE FROM super8twin WHERE idSuper8twin =  :idSuper8twin";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idSuper8twin', $_POST['idSuper8twin'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listSuper8twin")
	{
	      $statement = $db_con->prepare("select * from super8twin where idSuper8twin > :idSuper8twin");
          $statement->execute(array(':idSuper8twin' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "addAir")
	{
		if(empty($_POST['panneAir']))
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

		  $sqlQuery = "INSERT INTO air(panneAir,reponseAir,datePanneAir ,dateReponseAir)
		  VALUES(:panneAir,:reponseAir,:datePanneAir,:dateReponseAir)";		   
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneAir', $_POST['panneAir'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseAir', $_POST['reponseAir'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneAir', $_POST['datePanneAir'], PDO::PARAM_STR); 
		  $run->bindValue(':dateReponseAir', $_POST['dateReponseAir'], PDO::PARAM_STR);  
		  $run->execute(); 	
		  
		  $resp['msg']    = "Votre enregistrement a été ajouté";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit;	 
		 
		
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "editAir")
	{
		if(empty($_POST['panneAir']))
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
		
		  $sqlQuery = "UPDATE air SET panneAir = :panneAir, 
            reponseAir  = :reponseAir, 
            datePanneAir  = :datePanneAir,  
            dateReponseAir = :dateReponseAir
            WHERE idAir = :idAir";
		  $run = $db_con->prepare($sqlQuery);
		  $run->bindParam(':panneAir', $_POST['panneAir'], PDO::PARAM_STR);  
		  $run->bindParam(':reponseAir', $_POST['reponseAir'], PDO::PARAM_STR); 
		  $run->bindValue(':datePanneAir', $_POST['datePanneAir'], PDO::PARAM_STR);  
		  $run->bindValue(':dateReponseAir', $_POST['dateReponseAir'], PDO::PARAM_STR);
		  $run->bindParam(':idAir', $_POST['idAir'], PDO::PARAM_STR);
		  $run->execute(); 
		  $resp['msg']    = "Votre enregistrement a été modifié";
		  $resp['status'] = true;	
		  echo json_encode($resp);
		  exit; 	
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteAir")
	{
		  $sqlQuery = "DELETE FROM air WHERE idAir =  :idAir";
	      $run = $db_con->prepare($sqlQuery);
	      $run->bindParam(':idAir', $_POST['idAir'], PDO::PARAM_STR);   
	      $run->execute();
		  $resp['status'] = true;
		  $resp['msg'] = "Votre enregistrement a été suprimé";
		  echo json_encode($resp);
		  
	}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "listAir")
	{
	      $statement = $db_con->prepare("select * from air where idAir > :idAir");
          $statement->execute(array(':idAir' => 0));
		  $row = $statement->fetchAll(PDO::FETCH_ASSOC);
		  echo "<pre>";
		  print_r($row);
		  echo "</pre>";
	}	
?>