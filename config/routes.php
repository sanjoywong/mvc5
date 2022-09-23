<?php

$routes = array(
    ['home', 'default', 'index'],
    ['products', 'produit', 'listingProduct'],
    ['abonnes', 'abonne', 'listing'],
    //['show', 'abonne', 'show', ['id']],
   // ['edit', 'abonne', 'edit', ['id']],
    //['delete', 'abonne', 'delete', ['id']],
    //['add', 'abonne', 'add'],
    ['show', 'produit', 'showProduct', ['id']],
    ['edit', 'produit', 'editProduct', ['id']],
    ['delete', 'produit', 'deleteProduct', ['id']],
    ['add', 'produit', 'addProduct']
);