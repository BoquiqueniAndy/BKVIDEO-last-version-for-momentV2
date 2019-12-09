<html>
<head>

  <meta charset="utf-8" />
  <title>Nouveautés</title>
    
</head>

<?php include "./templateOTD/header2.php"; ?>

<article>
  <table>
    <?php
      echo "<tbody>";
        $tproduits = (empty($tproduits) ? $tproduits=array() : $tproduits);
        foreach($tproduits as $prods){
        
        echo "<form action='index.php?action=New1' method='POST'>";
        
          echo "<tr>"
              
              ."<td>"."<p class = 'content is-medium'>".$prods['lien']."</td>"."</p>"
              ."<td>"."<p class = 'content is-medium'>".$prods['nompro']."</p> "."</td>"
              ."<td>"."<p class = 'content is-medium''>".$prods['prix']."€"."</p> "."</td>"
              ."<td>".
              "<input type='submit' name='action' value='Ajouter au panier'>"
              ."</td>"."</p>".

            "</tr>";

        echo "</form>";
        }
      echo "</tbody>";

      //$nbPages = ceil($nbelementstotal / $limite);
      //if ($page > 1):
        //<img src = "chemin" width="">
    ?>
  </table>
</article>

<div class="conteneur">
  
</div>

</html>