<?php include_once("header.php"); ?>
<div class="container" style="margin-top:50px">
	<h2 class="seeder">ANNEXE 1	AJUSTEMENT  DES PARAMETRES</h2>
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
		  		<td headers="denomi">P (PID) Moteur A</td>
		  		<td headers="descri">P-Valeur pour le réglage du moteur.  utiliser les valeurs données!
				Les valeurs autorisées de 0-100.<font color="red">vitesse maxi du moteur de distribution</font> </td>
		  		<td headers="val">25</td>
		  	</tr>
		  	<tr>
				<td headers="numero">01</td>
		  		<td headers="denomi">I (PID) Moteur A</td>
		  		<td headers="descri">I-Valeur pour adapter le moteur.  utiliser les valeurs données!
				Les valeurs autorisées de 0-100.<font color="red">vitesse mini du moteur de distribution</font> </td>
		  		<td headers="val">5</td>
		  	</tr>
		  	<tr>
				<td headers="numero">02</td>
		  		<td headers="denomi">P (PID) Moteur B</td>
		  		<td headers="descri">P-Valeur pour le réglage du moteur.  utiliser les valeurs données!
				Les valeurs autorisées de 0-100.<font color="red">vitesse maxi du moteur de distribution</font> </td>
		  		<td headers="val">25</td>
		  	</tr>
		  	<tr>
				<td headers="numero">03</td>
		  		<td headers="denomi">I (PID) Moteur B</td>
		  		<td headers="descri">I-Valeur pour adapter le moteur.  utiliser les valeurs données!
				Les valeurs autorisées de 0-100.<font color="red">vitesse mini du moteur de distribution</font> </td>
		  		<td headers="val">5</td>
		  	</tr>
		  	<tr>
				<td headers="numero">04</td>
		  		<td headers="denomi">ON/OFF sensor Coupure relevage</td>
		  		<td headers="descri">Inversion de la fonction de la touche ON / OFF capteur. Le capteur réagit au métal.
				<font color="red">"1": capteur a pas de métal</font> = DISTRIBUTION ON; capteur est en contact avec le métal = DISTRIBUTION off
				<font color="green">"0": capteur est en contact de métal</font> = DISTRIBUTION off; capteur n'est pas en contact avec le métal = DISTRIBUTION ON,le control se fait uniquement en fonctionnement normal de l‘appareil
				(Regardez montage du capteur de bas niveau) Les valeurs autorisées 0-1. </td>
		  		<td headers="val">1</td>
		  	</tr>
		  	<tr>
				<td headers="numero">05</td>
		  		<td headers="denomi">Vitesse d'étalonnage</td>
		  		<td headers="descri">Réglage de la vitesse du moteur lors de l'étalonnage. Max. valeur est 100
				(= Vitesse de rotation du moteur max.). Les valeurs autorisées de 0-100. </td>
		  		<td headers="val">80</td>
		  	</tr>
		  	<tr>
				<td headers="numero">06</td>
		  		<td headers="denomi">Signal d'entrée
				ON / OFF de commutation</td>
		  		<td headers="descri">Ajustement de l'entrée de signal. Les valeurs autorisées sont 1 et 2.
				1 = Signal d'entrée via la boîte de commande 2 Unité = Signal d'entrée via semoir + contrôle </td>
		  		<td headers="val">1</td>
		  	</tr>
		  	<tr>
				<td headers="numero">07</td>
		  		<td headers="denomi">Signal d'entrée accélérer</td>
		  		<td headers="descri">Ajustement de l'entrée de signal. Les valeurs autorisées sont 1 et 2.
				1 = Signal d'entrée via la boîte de commande 2 Unité = Signal d'entrée via semoir + contrôle </td>
		  		<td headers="val">1</td>
		  	</tr>
		  	<tr>
				<td headers="numero">08</td>
		  		<td headers="denomi">Courant moteur réel A</td>
		  		<td headers="descri">Indique le courant pour le moteur de distribution en Ampère moteur réel. La valeur n'est pas modifiable. </td>
		  		<td headers="val"></td>
		  	</tr>
		  	<tr>
				<td headers="numero">09</td>
		  		<td headers="denomi">Max. courant du moteur A</td>
		  		<td headers="descri">Courant maximal admissible pour le moteur.
				Si le moteur est plus de 1 seconde au dessus de cette valeur, le moteur s'arrête automatiquement et une alarme est déclenchée.cela veut dire que le moteur force de trop(mauvaise canelure trappe trop serré)
				Valeur autorisée de 0-100. </td>
		  		<td headers="val">8</td>
		  	</tr>
		  	<tr>
				<td headers="numero">10</td>
		  		<td headers="denomi">Courant moteur
				réel B</td>
		  		<td headers="descri">Indique le courant pour le moteur de distribution en Ampère moteur réel. La valeur n'est pas modifiable.
 				</td>
		  		<td headers="val"></td>
		  	</tr>
		  	<tr>
				<td headers="numero">11</td>
		  		<td headers="denomi">Max. courant du moteur B</td>
		  		<td headers="descri">Courant maximal admissible pour le moteur.
				Si le moteur est plus de 1 seconde au dessus de cette valeur, le moteur s'arrête automatiquement et une alarme est déclenchée.cela veut dire que le moteur force de trop(mauvaise canelure trappe trop serré)
				Valeur autorisée de 0-100. </td>
		  		<td headers="val">8</td>
		  	</tr>
		  	<tr>
				<td headers="numero">12</td>
		  		<td headers="denomi">La tension réelle</td>
		  		<td headers="descri">Tension d'entrée. L'unité de commande est développé pour 12V. Cette valeur n'est pas modifiable.
 </td>
		  		<td headers="val"></td>
		  	</tr>
		  	<tr>
				<td headers="numero">13</td>
		  		<td headers="denomi">Capteur de bas niveau</td>
		  		<td headers="descri">L'inversion du fonctionnement du capteur de faible niveau.
				Si le code d'erreur Er06 s'affiche sur le plein trémie,  modifier ce paramètre à la valeur de l'autre.
				Inscrivez «0» si vous n'avez pas un capteur de bas niveau Les valeurs autorisées 0 et 1. </td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">14</td>
		  		<td headers="denomi">Réglage ventilateur</td>
		  		<td headers="descri"> Le ventilateur pour les éléments semeurs.Le ventilateur doit etre activé avant l’unité de semis sinon E01
				1= Le ventilateur pour le semoir A, aucun ventilateur pour le semoir B, le semoir B peut etre activé sans ventilateur 2= Activation du ventilateur pour le semoir A et le ventilateur supplémentaire pour le semoir B </td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">15</td>
		  		<td headers="denomi">Impulsion
				rotation ventilateur A</td>
		  		<td headers="descri">Nombre d'impulsions (= signal de capteur) par rotation pour la mesure de la vitesse du ventilateur.
				Ce paramètre est importé uniquement pour ventilateur hydraulique avec un capteur de rotation du ventilateur.
				Les valeurs autorisées de 0-100 </td>
		  		<td headers="val">1</td>
		  	</tr>
		  	<tr>
				<td headers="numero">16</td>
		  		<td headers="denomi">Adjustement La vitesse du ventilateur A</td>
		  		<td headers="descri">Ajustement de la vitesse de la turbine (in %) hydraulique avec une valve a commande electrique
				ex. "10": le ventilateur est entraîné à 10% de la capacité hydraulique.
				Si vous avez ventilateur à entraînement électrique ou ventilateur à entraînement hydraulique sans vanne proportionnelle veuillez entrer "100".
				Les valeurs autorisées de 0-100 </td>
		  		<td headers="val">100</td>
		  	</tr>
		  	<tr>
				<td headers="numero">17</td>
		  		<td headers="denomi">Min. la vitesse du ventilateur A</td>
		  		<td headers="descri">La vitesse minimale du ventilateur admissible. Ce paramètre est importé uniquement pour ventilateur hydraulique avec un capteur de rotation du ventilateur.
				ex. 3000 rpm = "300"
				S'il vous plaît inscrivez «0» si vous n'avez pas un capteur de rotation du ventilateur. De même code d'erreur Er02 est désactivé.
				Les valeurs autorisées 0-999 </td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">18</td>
		  		<td headers="denomi">Max. la vitesse du ventilateur A</td>
		  		<td headers="descri">Vitesse du ventilateur maximale admissible. Ce paramètre est importé uniquement pour ventilateur hydraulique avec un capteur de rotation du ventilateur.
				ex. 4500 rpm = "450"
				S'il vous plaît entrer "999" si vous ne disposez pas d'un capteur de rotation du ventilateur. De même code d'erreur Er03 est désactivé.
				Les valeurs autorisées 0-999 </td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">19</td>
		  		<td headers="denomi">Impulsion
				rotation ventilateur B</td>
		  		<td headers="descri">Nombre d'impulsions (= signal de capteur) par rotation pour la mesure de la vitesse du ventilateur.
				Ce paramètre est importé uniquement pour ventilateur hydraulique avec un capteur de rotation du ventilateur.
				Les valeurs autorisées de 0-100 </td>
		  		<td headers="val">1</td>
		  	</tr>
		  	<tr>
				<td headers="numero">20</td>
		  		<td headers="denomi">Adjustement La vitesse du ventilateur B</td>
		  		<td headers="descri">Ajustement de la vitesse de la turbine (in %) hydraulique avec une valve a commande electrique
				ex. "10": le ventilateur est entraîné à 10% de la capacité hydraulique.
				Si vous avez ventilateur à entraînement électrique ou ventilateur à entraînement hydraulique sans vanne proportionnelle veuillez entrer "100".
				Les valeurs autorisées de 0-100 </td>
		  		<td headers="val">100</td>
		  	</tr>
		  	<tr>
				<td headers="numero">21</td>
		  		<td headers="denomi">Min. la vitesse du ventilateur B</td>
		  		<td headers="descri">La vitesse minimale du ventilateur admissible. Ce paramètre est importé uniquement pour ventilateur hydraulique avec un capteur de rotation du ventilateur.
				ex. 3000 rpm = "300"
				S'il vous plaît inscrivez «0» si vous n'avez pas un capteur de rotation du ventilateur. De même code d'erreur Er02 est désactivé.
				Les valeurs autorisées 0-999 </td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">22</td>
		  		<td headers="denomi">Max. la vitesse du ventilateur B</td>
		  		<td headers="descri">Vitesse du ventilateur maximale admissible. Ce paramètre est importé uniquement pour ventilateur hydraulique avec un capteur de rotation du ventilateur.
				ex. 4500 rpm = "450"
				S'il vous plaît entrer "999" si vous ne disposez pas d'un capteur de rotation du ventilateur. De même code d'erreur Er03 est désactivé </td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">23</td>
		  		<td headers="denomi">tramline capteur</td>
		  		<td headers="descri">Polarité du capteur pour fonction tramway. Ce paramètre est seulement pour importer la semence avec fonction tramway.
				inscrivez «0» si vous n'utilisez pas la fonction tramway.
				Les valeurs autorisées 0 et 1 </td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">24</td>
		  		<td headers="denomi">Nombre de sorties</td>
		  		<td headers="descri"> Entrer les débouchés pour fonction tramway.
				ex. Si vous utilisez tour de distributeur avec 8 points, la valeur du paramètre est "8"
				S'il vous plaît inscrivez «0» si vous n'utilisez pas la fonction tramway. Attention: s'il vous plaît d'abord régler le paramètre no. 16 à "0".
				Les valeurs autorisées 0-999</td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">25</td>
		  		<td headers="denomi">points de sortie fermés</td>
		  		<td headers="descri">Entrez le nombre de points de sortie fermés, lorsque la ligne de tramway doit être réglé. ex. Si 2 points de sortie devraient être fermés, la valeur du paramètre est "2".
				S'il vous plaît inscrivez «0» si vous n'utilisez pas la fonction tramway.
				Les valeurs autorisées 0-99 </td>
		  		<td headers="val">0</td>
		  	</tr>
		  	<tr>
				<td headers="numero">26</td>
		  		<td headers="denomi">Temps de
				fonctionnement</td>
		  		<td headers="descri">Indique le nombre approximatif d'heures pendant lesquelles l'unité de contrôle a été mis en marche.
				Uniquement à des fins de service internes! </td>
		  		<td headers="val"></td>
		  	</tr>		
		  </tbody>	
	</table>
	<h2 class="seeder" >ANNEXE 2	SIGNAUX D'ALARME / CODE ERREUR
</h2>
</br>
</br>
Suivants les alarmes peuvent s‘inscrire</br>
<font color="red">- L'affichage du code d'erreur sur l'affichage. Plus d'un des codes d'erreur sont affichés série.</font></br>
<font color="red">- Alarme acoustique.</font></br>
<font color="red">- Clignotant LED.</font></br>
</br>
<table class="centered">
		  <thead>	
			<tr>
				<th id="description" ><b>Description</b></th>
				<th id="code">Code d'affichage et une solution d'alarme acoustique</th>
			</tr>
		  </thead>
		  <tbody>
		  	<tr>
				<td headers="description">Er 1</td>
		  		<td headers="code">Le bouton ON / OFF est active. Le ventilateur est éteint. Er 1 clignote sur l'affichage + alarme sonore. LED sur le bouton "fan" clignote. Appuyez sur le bouton du ventilateur pour allumer le ventilateur.</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 2</td>
		  		<td headers="code">Vitesse (rpm) sur le ventilateur est trop lent. Er 2 clignote sur l'affichage + alarme sonore. LED sur le bouton "fan" clignote. Est que la roue de ventilateur tourne?
				Vérifier le ventilateur et le câble pour le capteur de ventilateur. La sonde se déplaçe et a maintenant trop de distance à la vis, métal, ... Vérifiez si le capteur fonctionne correctement. Au-delà de toutes les vis, métal LED sur le capteur doit briller, puis expirer.
				Les câbles et les bouchons ou les tuyaux hydrauliques accord? Y at-il un obstacle à la roue du ventilateur?</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 3 </td>
		  		<td headers="code">Vitesse (rpm) est trop élevé.</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 3 </td>
		  		<td headers="code">Clignote sur l'affichage + alarme sonore. LED sur le bouton "fan" clignote. Contrôler la vitesse du ventilateur. Ralentir la vitesse du ventilateur si elle est trop élevée. Vérifiez le câble du capteur de ventilateur.</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 4 </td>
		  		<td headers="code">Vitesse du ventilateur Er 4 clignote sur l’écran, alarme sonore LED surf an et le bouton clignote .vérifier la rotation de la turbine.vérifier le cable du capteur de ventilation.vérifier la distance du capteur par rapport a son contact.vérifier que le capteur fonctionne correctement .vérifier que le systeme hydraulique du moteur de la turbine soit bien connecté</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 5 </td>
		  		<td headers="code">Vitesse de la turbine Er 5 clignote sur l’écran, alarme sonore, LED sur fan clignote.Controler la vitesse de la turbine à l’aide du boitier FAN</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 6</td>
		  		<td headers="code">Capteur de niveau <font color="red">A</font> affiche une erreur. Er 6 clignote sur l'affichage + alarme sonore. LED sur le bouton "kg / kg +" clignote. Vérifier le niveau de la trémie de remplissage.
				Vérifier le câble et les signaux du capteur de niveau.
				Vérifiez si le paramètre no. 13. Si vous n'avez pas de capteur de niveau -></td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 7</td>
		  		<td headers="code">Capteur de niveau<font color="red"> B</font> affiche une erreur.. Er 6 clignote sur l'affichage + alarme sonore. LED sur le bouton "kg / kg +" clignote. Vérifier le niveau de la trémie de remplissage.
				Vérifier le câble et les signaux du capteur de niveau.
				Vérifiez si le paramètre no. 13. Si vous n'avez pas de capteur de niveau</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 8</td>
		  		<td headers="code">Le moteur de rouleau de semences <font color="red">A</font> ne peut pas tourner correctement. Quantité réel de sortie diffèrente du réglage. Er 8 clignote sur l'affichage + alarme sonore. Vérifiez si les blocs de rouleaux de semences en raison des obstacles (pierres fe)
				Vérifiez le câble du capteur. Est-il cassé ou plié (mauvaise connexion du signal)<font color="red"> Vérifier que vous avez les cannelures adaptées à votre semence</font></td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 9 </td>
		  		<td headers="code">Le moteur de rouleau de semences<font color="red"> B</font> ne peut pas tourner correctement. Quantité réel de sortie diffèrente du réglage. Er 8 clignote sur l'affichage + alarme sonore. Vérifiez si les blocs de rouleaux de semences en raison des obstacles (pierres fe)
				Vérifiez le câble du capteur. Est-il cassé ou plié (mauvaise connexion du signal) <font color="red">Vérifier que vous avez les cannelures adaptées à votre semence</font></td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 10</td>
		  		<td headers="code">Erreur mémoire. Réglage ou la mémoire. Er 10 clignote sur l'affichage + alarme sonore. Consulter les derniers ajustements.</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 11</td>
		  		<td headers="code">Erreur de calibrage. Cette valeur d'étalonnage n'est pas autorisée. Er 11 clignote sur l'affichage + alarme sonore. Appuyez sur SET et RESET pour passer l'alarme. Vérifiez votre étalonnage et étalonner une deuxième fois si nécessaire.</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 12</td>
		  		<td headers="code">Ampérage de moteur de distribution <font color="red">A</font> est trop élevé. Er 12 clignote sur l'affichage + alarme sonore. LED "on / off" clignote. Vérifiez si le moteur tourne très dur.L’arbre de transmission des cannelures doit tourner librement sans effort.Pour vérifier démonter le moteur d’entrainement et tourner l’arbre de transmission a la main.
				Vérifiez si les rouleaux de distribution de semences tournent en raison d‘ obstacles (pierres feuilles papier)</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 13</td>
		  		<td headers="code">Ampérage de moteur de distribution <font color="red">B</font> est trop élevé. Er 12 clignote sur l'affichage + alarme sonore. LED "on / off" clignote. Vérifiez si le moteur tourne très dur.L’arbre de transmission des cannelures doit tourner librement sans effort.Pour vérifier démonter le moteur d’entrainement et tourner l’arbre de transmission a la main.
				Vérifiez si les rouleaux de distribution de semences tournent en raison d‘ obstacles (pierres feuilles papier)</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 14 </td>
		  		<td headers="code">Alimentation sous 12V. Er 14 clignote sur l'affichage + alarme sonore. Tous les voyants clignotent. Vérifiez le fusible de la batterie.</td>
		  	</tr>
		  	<tr>
				<td headers="description">Er 15</td>
		  		<td headers="code">Problème de communication entre semoir + contrôle et boîtier de commande. Er 15 clignote sur l'affichage + alarme sonore. Tous les voyants clignotent. Vérifiez le câble entre semoir + appareil et boîtier de commande.
				BIP problème de communication entre semoir + unité et la boîte de commande. (Erreur faite par semoir + unité)
				Pas de code d'erreur. Pas de clignotant à LED. Juste alarme sonore. Vérifiez le câble entre le semoir + appareil et boîtier de commande ne soit pas endommagé.</td>
		  	</tr>
		  </tbody>
	</table>	  	
</br>
</br>
<h3 class="seeder">Eteindre l'alarme sonore:</h3>
Appuyez sur RESET pour éteindre les LED clignotants et alarmes acoustiques. ON / OFF capteur prochaine fois activé, l'alarme sonore et les voyants clignotants sont allumés à nouveau. Les codes d'erreur sur l'affichage sont toujours visibles. <font color="red">Vous ne pouvez pas désactiver l'alarme lorsque l'appareil est dans le paramètre-, calibrage, ou tout autre menu</font>
</br>
</br>
<p class="alarm">ATTENTION! Si vous êtes dans un menu de réglage et que vous appuyez sur RESET plus d'une seconde la valeur est supprimée!	</p>	  
</br>
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