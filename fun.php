<?php 
    class fun{
        private $db;
        function __construct($con)
        {
        $this->db=$con;
            
        }

        public function getAllInternships(){
            $sql = "SELECT * FROM `internships` ";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function insertContactDetails($name,$email,$message){
            $sql = "INSERT INTO `contact_us`( `name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function getCourseDetails(){
            $sql = "SELECT * FROM `course_details` ";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }
        
        public function getWorkingInternsById($id){
            $sql = "SELECT * FROM working_interns where id =".$id.";";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function getInternsByID($id){
            $sql = "SELECT * FROM intern where id =".$id.";";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function getStudentByID($id){
            $sql = "SELECT * FROM stud_details where id =".$id.";";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function getLastInternId(){
                $last = "SELECT * FROM intern ORDER BY id DESC LIMIT 1";
                $record = mysqli_query($this->db,$last);
                $res = mysqli_fetch_assoc($record);
                $num_rows = mysqli_num_rows($record);
                return $num_rows;
        }

        public function insertIntern($name,$email, $gender,$phone,$city,$state,$clg,$domain,$type,$duration,$fileUpload){
             $sql = "INSERT INTO intern ( `name`, `email`, `gender`, `phone_no.`, `city`, `state`, `clg_name`,`i_domain`, `i_type`, `i_duration`,     `resume`) VALUES ('".$name."','".$email."','".$gender."','".$phone."','".$city."','".$state."','".$clg."','".$domain."','".$type."','".$duration."','".$fileUpload."')";
             $query = mysqli_query($this->db,$sql);
             return $query;
        }
    }        
?>
