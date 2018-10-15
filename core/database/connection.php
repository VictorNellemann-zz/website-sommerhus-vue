<?php

class Connection
{
    public function make()
    {
        try 
        {
            return new PDO('mysql:host=127.0.0.1;port=3306;dbname=sommerhus-website', 'root', '');
        } 
        catch (PDOException $e) 
        {
            die($e->getMessage());
        } 
    }
}