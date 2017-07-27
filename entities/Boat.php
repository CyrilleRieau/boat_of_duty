<?php

namespace entities;

class Boat {
    protected $id;
    protected $type;
    protected $size;
    protected $position;
    protected $isActive;
    protected $grid_id;
    
    function __construct(string $type, int $size, int $position, bool $isActive, $grid_id, int $id = NULL) {
        $this->id = $id;
        $this->type = $type;
        $this->size = $size;
        $this->position = $position;
        $this->isActive = $isActive;
        $this->grid_id = $grid_id;
    }
    function getIsActive() {
        return $this->isActive;
    }

    function setIsActive($isActive) {
        $this->isActive = $isActive;
    }

        function getGrid_id() {
        return $this->grid_id;
    }

    function setGrid_id($grid_id) {
        $this->grid_id = $grid_id;
    }

        function getId() {
        return $this->id;
    }

    function getType() {
        return $this->type;
    }

    function getSize() {
        return $this->size;
    }

    function getPosition() {
        return $this->position;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setSize($size) {
        $this->size = $size;
    }

    function setPosition($position) {
        $this->position = $position;
    }

    }