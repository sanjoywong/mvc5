<?php

namespace App\Controller;

use App\Weblitzer\Controller;

use App\Model\ProduitModel;
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class ProduitController extends Controller
{

    public function listingProduct()
    {
        $products = ProduitModel::all();
        $count = ProduitModel::count();

        $this->render('app.produit.listingProduct', ['products' => $products, 'count' => $count]);
    }
    public function showProduct($id)
    {   var_dump("$id");
        $product = $this->isProductExisteOr404($id);
        $this->render('app.produit.showProduct', ['product' => $product]);
    }

    private function isProductExisteOr404($id)
    {
        $product = ProduitModel::findById($id);
        if (empty($product)) {
            $this->Abort404();
        }
        return $product;
    }
    /**
     *
     */
    

    public function deleteProduct($id)
    {
        $abonne = $this->isProductExisteOr404($id);
        produitModel::delete($id);
        $this->redirect('products');
    }
    public function addProduct()
    {
        $errors = [];
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $valider = new Validation();
            $errors = $this->validProduct($errors, $valider, $post);
            if ($valider->IsValid($errors)) {
                produitModel::insert($post);
                $this->redirect('products');
            }

        }
        $form = new Form($errors);
        $this->render('app.produit.addProduct', ['form' => $form]);
    
 
       // var_dump("test");
        //  AbonneModel::delete($id);
        // $this->redirect('abonnes');
    }
    public function editProduct($id)
    {
        $product = $this->isProductExisteOr404($id);
        $errors = [];
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors = $this->validProduct($errors, $v, $post);
            if ($v->IsValid($errors)) {
                produitModel::update($post, $id);
                $this->redirect('products');
            }
        }
        $form = new Form($errors);
        $this->render('app.produit.editProduct', [
            'product'  => $product,
            'form' => $form
        ]);
    }

    private function validProduct($errors, $valider, $post)
    {
        $errors['titre'] = $valider->textValid($post['titre'], 'titre', 3, 100);
        $errors['reference'] = $valider->textValid($post['reference'], 'reference', 3, 100);
        $errors['description'] = $valider->textValid($post['description'], 'description', 3, 100);
       /*  if (!empty($post['description'])) {
            $filter_options = array(
                'options' => array('min_range' => 0)
            );
            if (filter_var($post['age'], FILTER_VALIDATE_INT, $filter_options) === FALSE) {
                $errors['age'] = 'Veuillez renseigner un entier positif';
            } elseif ($post['age'] > 150) {
                $errors['age'] = 'Menteur !';
            }
        } else {
            $errors['age'] = 'Veuillez renseigner un age';
        } */
        return $errors;
    }
}
