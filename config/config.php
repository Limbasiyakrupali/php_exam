<?php

class Config{
     private $HOST_NAME = "localhost";
     private $USER_NAME = "root";
     private $PASSWORD = "";
     private $DB_NAME = "railway_booking";
    public $conn;


    function initConnection(){
        $this->conn = mysqli_connect($this->HOST_NAME, $this->USER_NAME,$this->PASSWORD,$this->DB_NAME);

        if(!$this->conn){
             die("Connection failed..." . mysqli_error());

        }


    }

    function addusers($name, $number){

        $this->initConnection();

        $query = "INSERT INTO users(name,number) VALUES('$name',$number)";

        $res = mysqli_query($this->conn, $query);

        return $res;

    }

    function fetchAllUsers(){

        $this->initConnection();

        $query = "SELECT * FROM users;";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }

    function updateUsers($name, $number,$id){
        $this->initConnection();

        $query = "UPDATE users SET name='$name', number=$number WHERE id=$id";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }

    function deleteUsers($id){
        $this->initConnection();

        $query = "DELETE FROM users  WHERE id=$id";

        $res =  mysqli_query($this->conn, $query);

        return $res;

    }
    function fetchSingleUsers($id){

        $this->initConnection();

        $query = "SELECT * FROM users WHERE id=$id;";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }

    function addbooking($seat_number, $amount){

        $this->initConnection();

        $query = "INSERT INTO bookings(seat_number,amount) VALUES($seat_number,$amount)";

        $res = mysqli_query($this->conn, $query);

        return $res;

    }

    function fetchAllbooking(){

        $this->initConnection();

        $query = "SELECT * FROM bookings;";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }

    function deletebooking($booking_id){
        $this->initConnection();

        $query = "DELETE FROM bookings WHERE id=$booking_id";

        $res =  mysqli_query($this->conn, $query);

        return $res;

    }
    function fetchSingleBooking($booking_id){

        $this->initConnection();

        $query = "SELECT * FROM bookings WHERE id=$booking_id;";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }
    
    function updateBooking($name, $number,$booking_id){
        $this->initConnection();

        $query = "UPDATE users SET name='$name', number=$number WHERE id=$booking_id";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }

    function addroute($route_name, $stop_number){

        $this->initConnection();

        $query = "INSERT INTO routes(route_name,stop_number) VALUES($route_name,$stop_number)";

        $res = mysqli_query($this->conn, $query);

        return $res;

    }
    function updateroute($route_name, $stop_number,$route_id){
        $this->initConnection();

        $query = "UPDATE routes SET route_name='$route_name', stop_number=$stop_number WHERE route_id=$route_id";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }

    function fetchAllroute(){

        $this->initConnection();

        $query = "SELECT * FROM routes;";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }
    function fetchSinglerote($route_id){

        $this->initConnection();

        $query = "SELECT * FROM routes WHERE id=$route_id;";

        $res =  mysqli_query($this->conn, $query);

        return $res;
    }

    function deleteroute($route_id){
        $this->initConnection();

        $query = "DELETE FROM routes  WHERE route_id=$route_id";

        $res =  mysqli_query($this->conn, $query);

        return $res;

    }

    
    function addstations($station_name, $station_code){

        $this->initConnection();

        $query = "INSERT INTO bookings(station_name,station_code) VALUES($station_name,$station_code)";

        $res = mysqli_query($this->conn, $query);

        return $res;

    }



}
?>