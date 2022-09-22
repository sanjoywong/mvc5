<h2>Liste des abonnées</h2>

<p>Nombre d'abonnées : <?=$count ?></p>

<section class="abonne">
   <?php  foreach($abonnes as $abonne) {?>
   <div>
    <p><?=$abonne->nom ?></p>
   </div>
   <?php } ?> 
</section>