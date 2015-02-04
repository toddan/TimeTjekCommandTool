<?php
/**
 * Created by PhpStorm.
 * User: tord
 * Date: 2/4/2015
 * Time: 19:30
 */

class Command {
    protected $name;
    protected $repository;

    public function __construct($name)
    {
        if(!empty($name))
        {
            $this->name = $name;
        }
        else
        {
            throw new Exception('Error: The command must have an name!');
        }
        
        $this->repository = new Repository();
    }

    public function GetName()
    {
        return $this->name;
    }
}