<?php
namespace App; //better organize classes

class Menu{
    protected $fillable = ['name', 'artifactType'];

    public function formrequest(){
        return [
            'name' => 'artifactName',
            'date' => 'discoveryDate'
        ]
    }

}





>