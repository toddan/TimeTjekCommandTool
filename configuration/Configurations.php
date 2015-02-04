<?php
class Configurations {
    public static function DbConfig($index)
    {
        $dbconfig = array(
            'dbtype' => 'mysql',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'dbname' => 'timetjek_app'
        );

        return $dbconfig[$index];
    }
}