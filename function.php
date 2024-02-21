<?php
    Class phone{
        private $conn;

        public function __construct() {
            #database host, database user, database pass, database name
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "phonebook";

            $this->conn = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );
            if (!$this->conn) {
                die("Database connection error!");
            }
    }
    public function add_data($data) {
        $full_name = $data['sur_name'];
        $phone_number = $data['phone_number'];
        $contact = $data['address'];
        $photo = $_FILES['pp_photo']['name'];
        $tmp_name = $_FILES['pp_photo']['tmp_name'];

        $query = "INSERT INTO phonetable(person_name, mobile_number, contact_info, pic) VALUE('$full_name', $phone_number,'$contact', '$photo')";

        if(mysqli_query($this->conn, $query)) {
            move_uploaded_file($tmp_name, 'upload/'.$photo);
            return "data saved successfully";
// this section is create part
    }
}
// this is section is read part
    public function display_data() {
        $quary = "SELECT * FROM phonetable";
        if(mysqli_query($this->conn, $quary)) {
            $return_data = mysqli_query($this->conn, $quary);
            // return  "$return_data";
        }
            
    }


}
?>