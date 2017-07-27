<?php

function myLoader($className) {
  $class = str_replace('\\', '/', $className);
  require($class . '.php');
  }

  spl_autoload_register('myLoader');

use entities\Boat;
use entities\Grid;    

class Database {

//function Crud();
//Ecrit et lit depuis disque;
//save user() et load user();

    private $pdo;

    function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=boats_db', 'cyrille', 'mdp');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function boatCreate(Boat $boat, Grid $grid): bool {
        $boatCre = $this->pdo->prepare('INSERT INTO boat(type, size, position, isActive, grid_id) VALUES (:type, :size, :position, :isActive, :grid_id)');
        $boatCre->bindValue('type', $boat->getType(), PDO::PARAM_STR);
        $boatCre->bindValue('size', $boat->getSize(), PDO::PARAM_STR);
        $boatCre->bindValue('position', $boat->getPosition(), PDO::PARAM_LOB);
        $boatCre->bindValue('isActive', $boat->getIsActive(), PDO::PARAM_LOB);
        $boatCre->bindValue('grid_id', $grid->getId(), PDO::PARAM_BOOL);
        if ($boatCre->execute()) {
            $boat->setId(intval($this->pdo->lastInsertId()));
            return true;
        }
        return false;
    }

    public function recupBoat() {
        $recupBoat = $this->pdo->query('SELECT * FROM boat');
        $boats = [];
        while ($ligne = $recupBoat->fetch()) {
            $boat = new Boat($ligne['type'], $ligne['size'], $ligne['position'], $ligne['isActive'], $ligne['grid_id'], $ligne['id']);
            $boats[] = $boat;
        }
        return $boats;
    }

    public function modifBoat(Boat $boat): bool {
        $modifBoat = $this->pdo->prepare('UPDATE boat SET position=:position, isActive=:isActive WHERE id=:id');
        $modifBoat->bindValue('position', $boat->getPosition(), PDO::PARAM_INT);
        $modifBoat->bindValue('isActive', $boat->getIsActive(), PDO::PARAM_BOOL);
        if ($modifBoat->execute()) {
            return true;
        }
        return false;
    }
}