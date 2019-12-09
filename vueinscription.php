 <!doctype html>
 <?php
 include './VueOTD/vue.php';
 ?>
 <html>
 <link rel="stylesheet" href="style.css">
 <body>
 <article>
 <div align="center">
        <h1>Veuillez vous inscrire</h1>
        <form action="actOTD.php?action=Inscription" method="POST">
          <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"> <br><br>
          
          <input type="text" name="mail" id="mail" placeholder="Mail"><br><br>
          <input type="passeword" name="mdp" id="mdp" placeholder="Mot de passe"><br><br>
          
          <input type="submit" name="action" value="Inscription">
          <br><br>
        </form>
		</div>
      </article>
	  </body>
	  </hmtl>