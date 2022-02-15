<?php

/**

 * Description of User

 *

 * @author sublime holdings

 * @web www.sublime.lk

 * */
class Database
{

    //private $host = 'localhost';
    // private $name = 'slysmjhg_travel';
    // private $user = 'slysmjhg_travel';
    // private $password = 'DlIp05;#;-iq';
    // public $DB_CON = NULL;


    private $host = 'localhost';
    private $name = 'slysc_lms';
    private $user = 'root';
    private $password = '';
    public $DB_CON = NULL;

    public function __construct()
    {

        $this->DB_CON = mysqli_connect($this->host, $this->user, $this->password, $this->name);
    }

    public function readQuery($query)
    {
        $result = mysqli_query($this->DB_CON, $query) or die(mysqli_error($this->DB_CON));

        return $result;
    }

    public function readLastQuery()
    {
        $result = mysqli_insert_id($this->DB_CON);
        return $result;
    }

    protected function readStmt($stmt)
    {
        $stmt = $stmt->execute() or die($stmt->error);
        return $stmt;
    }
}
