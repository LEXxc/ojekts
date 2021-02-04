<?php

    namespace OOP;
    
    class Bike{
        private $model;
        private $make;
        private $price;
        private $weight;
        private $engine;
        private $enginePower;
        private $maxSpeed;
        private $description;
        private $capacity;

        public function __construct($model, $make){
            $this->model = $model;
            $this->make = $make;
        }

        public function __toString(){
            return $this->model . ' ' . $this->make;
        }

        public function getInfo(){
          return [
            $this->model,
            $this->make,
            $this->price,
            $this->weight,
            $this->engine,
            $this->enginePower,
            $this->maxSpeed,
            $this->description,
            $this->capacity
            ];
        }

        public function setModel ($model) {
            $this->model = $model;
        }
        public function setMake ($make) {
            $this->make = $make;
        }
        public function setPrice ($price){
            $this->price = $price;
        }
        public function setWeight ($weight){
            $this->weight = $weight;
        }
        public function setEngine ($engine){
            $this->engine = $engine;
        }
        public function setEnginePower ($enginePower){
            $this->enginePower = $enginePower;
        }
        public function setMaxSpeed ($maxSpeed){
            $this->maxSpeed = $maxSpeed;
        }
        public function setDescription ($description){
            $this->description = $description;
        }
        public function setCapacity ($capacity){
            $this->capacity = $capacity;
        }

        public function getModel(){
            return $this->model;
        }
        public function getMake(){
            return $this->make;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getWeight(){
            return $this->weight;
        }
        public function getEngine(){
            return $this->engine;
        }
        public function getEnginePower(){
            return $this->enginePower;
        }
        public function getMaxSpeed(){
            return $this->maxSpeed;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getCapacity(){
            return $this->capacity;
        }
    }