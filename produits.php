<html>
<head>
  <?php 

    $limite = 2;
    $page =  (!empty($_GET['page']) ? $_GET['page'] : 0 );
    $page = ($page <= 0 ? 1 :$page);
    $debut = ($page-1)*$limite;
  
  ?>

  <meta charset="utf-8" />
  <title>Produits</title>
    
</head>

<?php include_once "./templateOTD/header.php"; ?>

<?php include_once "./templateOTD/header2.php"; ?>

<article>
  <div class = "block">
    <table>
      <?php
        echo "<tbody>";
          $tproduits = (empty($tproduits) ? $tproduits=array() : $tproduits);
          foreach($tproduits as $prods){
          
          echo "<form action='index.php?action=produits' method='POST'>";
          
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
  </div>
</article>

<a href="?page=<?php echo $page - 1; ?>">Page précédente</a> 
— <?php //endif; ?>
<?php /*for ($i = 1; $i <= $nbPages; $i++):
?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
endfor; ?>
<?php
if ($page < $nbPages):*/
?><a href="?page=<?php echo $page + 1; ?>">Page suivante</a>
<?php //endif; ?>

</html>