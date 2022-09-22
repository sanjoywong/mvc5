<h2>Liste des abonnées</h2>

<p>Nombre d'abonnées : <?=$count ?></p>

<section class="abonne">
   <?php  foreach($abonnes as $abonne) {?>
   <div>
    <p><?=$abonne->nom ?></p>
   </div>
   <ul>
      <li><a href="<?php echo $view->path('abonne',[$abonne->id]) ?>">show</a></li>

      <p>Another try      </p>
      <li><a href="<?= $view->path('abonne',[$abonne->id]) ?>">show</a></li>
   </ul>
   <?php } ?> 
</section>