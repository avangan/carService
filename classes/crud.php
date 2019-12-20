<?php
include_once 'DbConfig.php';

class Crud extends DbConfig
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData($query)
    {
        $result = $this->connection->query($query);

        if ($result == false) {
            return false;
        }
        $rows = array();

        while ($row = $result->fetch_assoc()) {

            $rows[] = $row;
        }
        return $rows;
    }

    public function execute($query)
    {
        $result = $this->connection->query($query);

        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }
    }

    public function escape_string($value)
    {

        return $this->connection->real_escape_string($value);
    }


    public function is_email_valid($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

/*    public function delete($id, $table)
    {
        if ($id)
    {do this}
        return false;
    }*/
}
?>

