<?php include_once("header.php"); ?>
<div class="container" style="margin-top:50px">
	<h2 class="seeder">Annexe 1 AJUSTEMENT DES PARAMETRES </h2>
</br>
</br>	
	<table class="centered">
		  <thead>	
			<tr>
				<th id="numero" ><b>No.</b></th>
				<th id="denomi">Dénomination</th>
				<th id="descri">Description</th>
				<th id="val">Valeur</th>
			</tr>
		  </thead>
		  <tbody>
		  	<tr>
				<td headers="numero">00</td>
		  		<td headers="denomi">P {PID) Moteur </td>
		  		<td headers="descri">P-Valeur pour le réglage de la  vitesse maxi du moteur.  Utiliser les valeurs données!
				Les valeurs autorisées de 0-100 </td>
		  		<td headers="val">25 % </td>
		  	</tr>
		  	<tr>
				<td headers="numero">01</td>
		  		<td headers="denomi">I {PID) Moteur</td>
		  		<td headers="descri">I-Valeur pour le réglage de la vitesse mini du moteur. Uutiliser les valeurs données!
				Les valeurs autorisées de 0-100 </td>
		  		<td headers="val">5% </td>
		  	</tr>	
		  	<tr>
				<td headers="numero">02 </td>
		  		<td headers="denomi">polarité capteur relevage </td>
		  		<td headers="descri">Inversion de la fonction de la touche ON / OFF capteur. Le capteur réagit au métal.
				"1": capteur n’est pas en présence de métal = distribution marche capteur est en présence  avec le métal = distribution stoppe
				"0": capteur est en présence avec le métal =disribution marche
				capteur n'est pas en présence avec le métal = distribution stoppe
				(Regardez montage du capteur de bas niveau) Les valeurs autorisées 0-1. </td>
		  		<td headers="val">1</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">03</td>
		  		<td headers="denomi">Vitesse d'étalonnage</td>
		  		<td headers="descri">Réglage de la vitesse du moteur lors de l'étalonnage. Les valeurs autorisées de 0-100.Valeur recommandée
				Possibilité pour les faibles dosage à l’Ha de porter cette valeur à 40%  (valeur mini) </td>
		  		<td headers="val">80%</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">04</td>
		  		<td headers="denomi">Signal d'entrée
				du capteur de 
				relevage </td>
		  		<td headers="descri">Ajustement de l'entrée de signal. Les valeurs autorisées sont 1 et 2.
				2 = Signal d'entrée directe sur le boitier SEEDER+
				1  = Signal d'entrée depuis capteur sur JET SEM </td>
		  		<td headers="val">1</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">05</td>
		  		<td headers="denomi">Signal d'entrée
				vitesse de 
				travail </td>
		  		<td headers="descri">Ajustement de l'entrée de signal. Les valeurs autorisées sont 1 et 2.
				2 = Signal d'entrée directe sur le boitier SEEDER+
				1  = Signal d'entrée depuis le JET SEM </td>
		  		<td headers="val">1 </td>
		  	</tr>	
		  	<tr>
				<td headers="numero">06</td>
		  		<td headers="denomi">Intensité réelle du moteur</td>
		  		<td headers="descri">Indique la consomation électrique en Ampère pour le moteur de distribution. La valeur n'est pas modifiable. 
				</td>
		  		<td headers="val">0</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">07</td>
		  		<td headers="denomi">Intensité maxi du moteur</td>
		  		<td headers="descri">Courant maximal admissible pour le moteur.
				Si le moteur est plus de 1 seconde au dessus de cette valeur, le moteur s'arrête automatiquement et une alarme est déclenchée.
				Valeur autorisée de 0-100. </td>
		  		<td headers="val">8</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">08</td>
		  		<td headers="denomi">La tension réelle </td>
		  		<td headers="descri">Tension d'entrée. L'unité de commande est développé pour 12V. Cette valeur n'est pas modifiable. 
</td>
		  		<td headers="val"></td>
		  	</tr>	
		  	<tr>
				<td headers="numero">09</td>
		  		<td headers="denomi">Capteur de niveau trémie</td>
		  		<td headers="descri">L'inversion du fonctionnement du capteur de  niveau bas de trémie
				Si le code d'erreur Er06 s'affiche alors que la trémie est pleine,  entrez  la valeur 1.
				Inscrivez «0» si vous n'avez pas un capteur de bas niveau Les valeurs autorisées 0 et 1.</td>
		  		<td headers="val">0 </td>
		  	</tr>	
		  	<tr>
				<td headers="numero">10</td>
		  		<td headers="denomi">capteur vitesse rotation de la
				turbine</td>
		  		<td headers="descri">Nombre d'impulsions par rotation pour la mesure de la vitesse du ventilateur.
				Ce paramètre est entré uniquement pour ventilateur hydraulique avec un capteur de rotation du ventilateur.
				</td>
		  		<td headers="val">1</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">11</td>
		  		<td headers="denomi">Ajustementde la vitesse de la turbine</td>
		  		<td headers="descri">Ajustement de la vitesse {en %) de la turbine hydraulique avec une valve a commande electrique
				ex. "10": le ventilateur est entraîné à 10% de la capacité hydraulique.
				Si vous avez un ventilateur à entraînement électrique ou ventilateur à entraînement hydraulique sans valve proportionnelle veuillez entrer "100".
				Les valeurs autorisées de 0-100</td>
		  		<td headers="val">100</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">12</td>
		  		<td headers="denomi">vitesse mini de la turbine</td>
		  		<td headers="descri">La vitesse minimale du ventilateur admissible. Ce paramètre est entré uniquement pour ventilateur hydraulique avec un capteur de rotation du ventilateur.
				ex. 3000 rpm = "300"
				Entrez la valeur «0» si vous n'avez pas un capteur de rotation du ventilateur. De même le code d'erreur Er02 est désactivé.
				Les valeurs autorisées 0-999</td>
		  		<td headers="val">0</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">13</td>
		  		<td headers="denomi">Max. la vitesse de la turbine</td>
		  		<td headers="descri">Vitesse du ventilateur maximale admissible. Ce paramètre est entré uniquement pour ventilateur hydraulique avec un capteur de vitesse de rotation du ventilateur.
				ex. 4500 rpm = "450"
				Entrez la valeur "999" si vous ne disposez pas d'un capteur de rotation du ventilateur. De même le code d'erreur Er03 est désactivé.
				Les valeurs autorisées 0-999</td>
		  		<td headers="val">0</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">14</td>
		  		<td headers="denomi">tramline capteur</td>
		  		<td headers="descri">Polarité du capteur pour la fonction tramline. Ce paramètre est seulement entré avec le JET SEM équipé de la fonction tramline.
				Entrez la valeur «0» si vous n'utilisez pas la fonction tramline.
				Les valeurs autorisées 0 et 1</td>
		  		<td headers="val">0</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">15</td>
		  		<td headers="denomi">Nombre de sorties</td>
		  		<td headers="descri">Entrez le nombre sorties pour la fonction tramline. ex. Si vous utilisez toutes les sorties, entrer la valeur "8"
				Si vous n'utilisez pas la fonction tramline entrer la valeur ‘’0‘‘. Attention: il est d'abord nécessaire de régler le paramètre no. 16 à "0".
				Les valeurs autorisées 0-999</td>
		  		<td headers="val">0</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">16</td>
		  		<td headers="denomi">points de sortie fermés</td>
		  		<td headers="descri">Entrez le nombre de points de sortie fermés, lorsque la ligne de tramline doit être réglée. ex. Si 2 points de sortie doivent être fermés, la valeur du paramètre est "2".
				Entrez la valeur  «0» si vous n'utilisez pas la fonction tramline.
				Les valeurs autorisées 0-99</td>
		  		<td headers="val">0</td>
		  	</tr>	
		  	<tr>
				<td headers="numero">17</td>
		  		<td headers="denomi">Temps de fonctionnement</td>
		  		<td headers="descri">Indique le nombre approximatif d'heures pendant lesquelles le boitier SEEDER+ a été mis en marche.
				Uniquement à des fins de service internes!
				</td>
		  		<td headers="val"></td>
		  	</tr>
		  </tbody>	
	</table>
</br>
</br>	
	<h2 class="seeder">Annexe 2	SIGNAUX D'ALARME / CODE ERREUR</h2>
</br>
</br>
<strong>Les alarmes suivantes peuvent s‘afficher</strong></br>
<font color="red">-L'affichage du code erreur sur l'écran.
Plusieurs codes d'erreur peuvenr s‘ afficher en série.</font></br>
<font color="red">-Alarme sonore.</font></br>
<font color="red">-LED clignotante.</font>
</br>
</br>
	<table class="centered">
		  <thead>	
			<tr>
				<th id="coderreur" ><b>code erreur</b></th>
				<th id="cause">Causes et remèdes</th>
			</tr>
		  </thead>
		  <tbody>
		  	<tr>
				<td headers="coderreur">Er 1</td>
		  		<td headers="cause">La touche  ON / OFF est en position ON. Le ventilateur est arrété.
				Er 1 clignote sur l'écran + alarme sonore.La LED sur le bouton "fan" clignote. Appuyez sur le bouton du ventilateur pour allumer le ventilateur.</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 2</td>
		  		<td headers="cause">Vitesse  de rotation du ventilateur  trop lente. (turbine hydraulique)
				Er 2 clignote sur l'écran + alarme sonore.La  LED sur le bouton "fan" clignote.
				Vérifier la turbine et le câble pour le capteur de vitesse. Le capteur est trop éloigné de la partie métallique.
				Vérifiez si le capteur fonctionne correctement , la led sur le capteur doit s’allumer à chaque passage de la présence métallique. Vérifiez qu’il n’y a pas de corps étranger dans la turbine.</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 3</td>
		  		<td headers="cause">Vitesse de rotation de la turbine trop élevée. (turbine hydraulique)
				Er 3 clignote sur l'écran + alarme sonore.La  LED sur le bouton "fan" clignote.
				Contrôler la vitesse de la turbine. Ralentir la vitesse de la tirbine si elle est trop élevée. Vérifiez le câble du capteur de vitesse.</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 6</td>
		  		<td headers="cause">Capteur de niveau indique erreur.
				Er 6 clignote sur l'écran + alarme sonore. LED sur le bouton "kg / kg +" clignote. Vérifier le niveau de remplissage de la trémie .
				Vérifier le câble et les signaux du capteur de niveau.
				Vérifiez si le paramètre no. 09 est entré,si vous n'avez pas de capteur de niveau , entrer la valeur ‘‘0‘‘</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 8</td>
		  		<td headers="cause">Le moteur des cannelures de distribution ne peut pas tourner correctement.
				Le dosage kg/ha est diffèrent de la valeur paramétrée. Er 8 clignote sur l'affichage + alarme sonore. Vérifiez si des corps étranger (pierres ou fer)ne bloque les cannelures de distribution.
				Vérifiez le câble du capteur. Mauvaise connexion cable plié ou cassé</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 10</td>
		  		<td headers="cause">Erreur parmétrage.Er 10 clignote sur l'écran + alarme sonore. Vérifiez les derniers  paramètres entrés.</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 11</td>
		  		<td headers="cause">Erreur de calibrage. Cette valeur d'étalonnage n'est pas autorisée.
				Er 11 clignote sur l'affichage + alarme sonore. Appuyez sur SET et RESET pour annuler l'alarme. Vérifiez votre étalonnage et recommencez  l‘étalonnage si nécessaire.</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 12</td>
		  		<td headers="cause">Intensité du moteur de distribution trop élevée
				Er 12 clignote sur l'écran + alarme sonore. LED "on / off" clignote. Vérifiez si la rotation du moteur est très dur.
				Vérifiez si des corps étranger (pierres ou fer)ne bloque les cannelures de distribution.</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 14</td>
		  		<td headers="cause">Alimentation électrique inférieure 12V.
				Er 14 clignote sur l'écran + alarme sonore. Tous les voyants clignotent. Vérifiez le fusible de la batterie, et l‘ état des connexions électriques</td>
		  	</tr>
		  	<tr>
				<td headers="coderreur">Er 15</td>
		  		<td headers="cause">Problème de communication entre semoir et le boîtier SEEDER+ de commande.
				Er 15 clignote sur l'affichage + alarme sonore. Tous les voyants clignotent.
				Vérifiez le câble entre semoir et le boîtier SEEDER+ de commande.</td>
		  	</tr>
		  </tbody>	
	</table>
</br>
	<h3 class="seeder">Alarme sonore uniquement</h3>
BIP problème de communication entre semoir et le boîtier SEEDER+ de commande. (Erreur due au semoir) Pas de code d'erreur. Pas de clignotant à LED. Juste alarme sonore.
Vérifiez le câble entre le semoir  et le boîtier SEEDER+de commande ne soit pas endommagé.
</br>
</br>
<h3 class="seeder">Eteindre les alarmes :</h3>
Appuyez sur RESET pour éteindre les LED clignotantes et alarmes sonores. La touche  ON / OFF est en position ON
L'alarme sonore et les voyants clignotants sont allumés à nouveau. Les codes d'erreur sur l'écran sont toujours visibles.
<font color="red">Vous ne pouvez pas désactiver l'alarme lorsque le boitier SEEDER+ de commande est dans les phases: paramètrage, calibrage, ou tout autre menu</font>
</br>
</br>
<p class="alarm">
ATTENTION:! Si vous êtes dans un menu des réglages et que vous appuyez sur RESET plus d'une seconde la valeur est supprimée!
</p>
</br>

</div>			  
<!-- code js pour rendre le tableau responsif -->
		<script type="text/javascript">
		var tds = document.getElementsByTagName("td");
    	for(var i=0; i<tds.length; i++){
        var td = tds[i];
        if(td.hasAttribute("headers")){
            var th = document.getElementById(td.getAttribute("headers"));
            if(th != null){
                td.setAttribute("data-headers", th.textContent);
            	}
        	}        
    	}
		</script>   
<button class="btn btn-info btn-lg" onclick="self.location.href='index.php'"> Retour menu principal </button>
<?php include_once("footer.php");  ?>