<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace entities;
/**
 * Description of Grid
 *
 * @author rieau
 */
class Grid {
    protected $id;
    
    function __construct(int $id = NULL) {
        $this->id = $id;
    }
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }


}
