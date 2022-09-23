<h2>Liste des abonnées</h2>

<p><a href="<?=$view->path('add') ?>">Ajouter un abonne</a></p>
<p>Nombre d'abonnées : <?=$count ?></p>

<section class="abonne">
   <?php  foreach($abonnes as $abonne) {?>
   <div>
    <p><?=$abonne->nom ?></p>
   </div>
   <ul>
      <li><a href="<?php echo $view->path('show',[$abonne->id]) ?>">Show</a></li>
      <li><a href="<?php echo $view->path('edit',[$abonne->id]) ?>">Edit</a></li>
      <li><a onclick="return confirm('Etes vous vraiment certain sur de suppremer cette abonnée?')" href="<?=$view->path('delete',[$abonne->id]); ?>"  >Delete</a></li>
      <p>Another way to show variants   </p>
      <li><a href="<?= $view->path('abonne',[$abonne->id]) ?>">show</a></li>
   </ul>
   <?php } ?> 
</section>