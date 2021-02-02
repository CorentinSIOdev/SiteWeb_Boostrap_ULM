<?php

 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $telephone = $_POST['telephone'];
 $mail = $_POST['mail'];
 $motif = $_POST['motif'];
 $motif2 = $_POST['motif2'];
 $message = $_POST['message'];

?>

<HTML>
<body background = "./images/background.jpg" > </body>
<body>
<center><img src="images/logo_ulm.png" width="27%" alt="alternative"></center>
<center><p style="color:#FA5858";> <FONT face="Impact" size="+3"><?php echo 'Formulaire envoyé avec succès !'?></font></p>
<p style="color:#FA5858";> <FONT face="Impact" size="+2"> <?php echo 'Vos coordonnées ont bien été enregistrées ci-dessous et vous serez contacté dès que possible !'?></font></p>
<br /><br />
<p style="color:#FBEFEF"; > <FONT face="Helvetica" size="+1"> <?php echo 'Nom de famille : ' .$nom ;  ?> </font></p>
<p style="color:#FBEFEF"; > <FONT face="Helvetica" size="+1"> <?php echo 'Prénom : ' .$prenom ; ?> </font></p>
<p style="color:#FBEFEF"; > <FONT face="Helvetica" size="+1"> <?php echo 'Numéro de téléphone : ' .$telephone ; ?> </font></p>
<p style="color:#FBEFEF"; > <FONT face="Helvetica" size="+1"> <?php echo 'Email : ' .$mail ; ?> </font></p>
<p style="color:#FBEFEF"; > <FONT face="Helvetica" size="+1"> <?php echo 'Motif du formulaire : ' .$motif ; ?> </font></p>
<p style="color:#FBEFEF"; > <FONT face="Helvetica" size="+1"> <?php echo 'Motif du Type d\'ULM : ' .$motif2 ; ?> </font></p>
<p style="color:#FBEFEF"; > <FONT face="Helvetica" size="+1"> <?php echo 'Message : ' .$message ; ?> </font></p><center><br>
</body>
</HTML>
