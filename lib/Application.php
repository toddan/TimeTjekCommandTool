<?php
require_once 'ApplicationInterface.php';

class Application implements ApplicationInterface{
    private $commands;

    public function __construct()
    {
        $this->commands = array();
    }

    public function AddCommand(CommandInterface $command)
    {
        $this->commands[] = $command;
    }

    private function getParameter($index)
    {
        global $argv;

        if(!empty($argv[$index]))
        {
            return $argv[$index];
        }
        return "Default";
    }

    public function ListAllCommands()
    {
        foreach($this->commands as $command)
        {
            echo $command->GetName();
        }
    }

    public function Run()
    {
        if(count($this->commands) == 0)
        {
            throw new Exception('Error: No commands are loaded in the application!');
        }

        foreach($this->commands as $cmd)
        {
            if($cmd->GetName() == $this->getParameter(1))
            {
                $cmd->Task();
            }
        }
    }

}