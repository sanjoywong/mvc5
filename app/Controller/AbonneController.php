<?php

namespace App\Controller;

use App\Weblitzer\Controller;

use App\Model\AbonneModel;

/**
 *
 */
class AbonneController extends Controller
{

    public function listing()
    {
        $abonnes = AbonneModel::all();
        $count = AbonneModel::count();

        $this->render('app.abonne.listing',['abonnes'=>$abonnes, 'count'=>$count]);

    }

    /**
     *
     */
 
}
