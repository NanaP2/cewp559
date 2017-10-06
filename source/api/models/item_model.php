<?php

class ItemModel
{
    public $ID;
    public $Name;
    public $Description;
    public $Price;

    public $_data;
    
    private $db_connection;
    
    function __construct($connection = null){
        if(!empty($connection)){
            $this->db_connection = $connection;
        }
    }

    //getting all the items from the database
    public function getItems(){
        $items = array();
        $query = 'SELECT ID, Name, Price, Description FROM items';
        $result = $this->db_connection->query($query);
        
        if (!$result) {
            printf("Error: %s\n", $mysqli->error);
            return;
        }
        
        //passes the data to an object
        while ($item = $result->fetch_object('ItemModel')) {
            $items[] = $item;
        }

        //interaction between item and view only
        $this->_data = $items;
    }

    public function getById($id){
        $items = array();
        $query = 'SELECT ID, Name, Price, Description FROM items WHERE id =' . $id;
        $result = $this->db_connection->query($query);
        
        if (!$result) {
            printf("Error: %s\n", $mysqli->error);
            return;
        }
        
        //passes the data to an object
        while ($item = $result->fetch_object('ItemModel')) {
            $items[] = $item;
        }

        //interaction between item and view only
        $this->_data = $items;

    }    
}