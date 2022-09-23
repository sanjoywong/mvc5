<?php

namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class AbonneModel extends Model
{

    protected static $table = 'abonnes';

 public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (nom,prenom,email,age,created_at) VALUES (?,?,?,?,NOW())',
            array($post['nom'],$post['prenom'],$post['email'],$post['age'])
        );
    }

    public static function update($post,$id)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::$table . " SET nom = ?,prenom = ?,email = ?,age = ? WHERE id = $id",
            array($post['nom'],$post['prenom'],$post['email'],$post['age'])
        );

    }
}