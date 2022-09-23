<?php

namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class ProduitModel extends Model
{

    protected static $table = 'products';

 public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (titre,reference,description) VALUES (?,?,?)',
            array($post['titre'],$post['reference'],$post['description'])
        );
    }

    public static function update($post,$id)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::$table . " SET titre = ?,reference = ?,description = ? WHERE id = $id",
            array($post['titre'],$post['feference'],$post['description'])
        );

    }
}