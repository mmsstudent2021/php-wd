<?php

class Database extends Connection {

    function connect()
    {
        // TODO: Implement connect() method.
        return mysqli_connect("localhost","root","","php_pure_contact");
    }
}