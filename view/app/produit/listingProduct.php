<h2>Liste des produits</h2>

<p><a href="<?=$view->path('add') ?>">Ajouter un product</a></p>
<p>Nombre d'products : <?=$count ?></p>

<section class="abonne">
   <?php  foreach($products as $product) {?>
   <div>
    <p><?=$product->titre ?></p>
   </div>
   <ul>
      <li><a href="<?php echo $view->path('show',[$product->id]) ?>">Show</a></li>
      <li><a href="<?php echo $view->path('edit',[$product->id]) ?>">Edit</a></li>
      <li><a onclick="return confirm('Etes vous vraiment certain sur de suppremer cette product?')" href="<?=$view->path('delete',[$product->id]); ?>"  >Delete</a></li>
      <p>Another way to show variants   </p>
      <li><a href="<?= $view->path('show',[$product->id]) ?>">show</a></li>
   </ul>
   <?php } ?> 
</section>