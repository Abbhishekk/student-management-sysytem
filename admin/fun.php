<?php 
    class fun{
        private $db;
        function __construct($con)
        {
        $this->db=$con;
            
        }

        public function insertStudentDetails($name,$age,$mobile,$school,$course,$fees,$aadhar,$date,$batch){
            $sql = "INSERT INTO `stud_details`(`name`,`age`, `mobile`, `school_name`, `course_name`, `course_fees`,`balance_fees`, `aadhar`,`date_of_joining`,`batch`) VALUES ('".$name."','".$age."','".$mobile."','".$school."','".$course."','".$fees."','".$fees."','".$aadhar."','".$date."','".$batch."')";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function lastFiveStudents(){
            $sql = "SELECT * FROM stud_details ORDER BY id DESC LIMIT 5";
            $query = mysqli_query($this->db,$sql);
            return $query;
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

        public function insertCourses($cname,$fees){
            $sql = "INSERT INTO `course_details`( `course_name`, `course_fees`) VALUES ('".$cname."','".$fees."')";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }
        public function getCourseDetails(){
            $sql = "SELECT * FROM `course_details` ";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function getTotalBalanceFees(){
            $total_remaining = "SELECT SUM(balance_fees) AS balance FROM stud_details;";
            $remain = mysqli_query($this->db, $total_remaining);
            $row = mysqli_fetch_assoc($remain); 
            return $row['balance'];
        }

        public function updateStudentstatus($id){
            $sql="UPDATE `stud_details` SET
			`status`=1 WHERE id='".$id."'";

		
		    mysqli_query($this->db,$sql);
        }

        public function updateStudentDetail($id,$name,$age,$mobile, $batch,$school,$course, $fees,$aadhar,$date){
            $sql = "UPDATE `stud_details` SET `name`='".$name."',`age`='".$age."',`mobile`='".$mobile."',`school_name`='".$school."',`course_name`='".$course."',`course_fees`='".$fees."',`aadhar`='".$aadhar."',`date_of_joining`='".$date."',`batch` ='".$batch."' WHERE `id`='".$id."'";
            mysqli_query($this->db,$sql);
        }
        
        public function getWorkingInternsById($id){
            $sql = "SELECT * FROM working_interns where id =".$id.";";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function updateWorkingIntern($cid,$id){
            $add = "UPDATE `working_interns` SET `CID`='".$cid."' WHERE `id`='".$id."'";
            mysqli_query($this->db,$add);
        }

        public function getWorkingWithLimit($start,$limit){
            $fetch = "SELECT * FROM working_interns LIMIT $start, $limit";                    
            $result = mysqli_query($this->db, $fetch);
            return $result;
        }

        public function updateWorkingStatus($status = 0,$id){
            $intern = "UPDATE `working_interns` SET `status`= '".$status."' WHERE `id`='".$id."'";
            $result = mysqli_query($this->db, $intern);
            return $result;
        }

        public function getInternsByID($id){
            $sql = "SELECT * FROM intern where id =".$id.";";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function getInternWithLimit($start,$limit){
            $fetch = "SELECT * FROM intern LIMIT $start, $limit";
            $query = mysqli_query($this->db,$fetch);
            return $query;
        }

        public function getAllIntern(){
            $sql = "SELECT COUNT(*) FROM intern ";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function deleteInternById($id){
            $delete = "DELETE FROM `intern` WHERE id =".$id."";
            $query = mysqli_query($this->db,$delete);
            return $query;
        }

        public function transferIntern($id){
            $intern = "INSERT INTO working_interns(`id`, `name`, `email`, `gender`, `phone_no.`, `city`, `state`, `clg_name`, `i_domain`, `i_type`, `i_duration`, `resume`)
            SELECT `id`, `name`, `email`, `gender`, `phone_no.`, `city`, `state`, `clg_name`, `i_domain`, `i_type`, `i_duration`, `resume` FROM intern
            WHERE `id` = '".$id."';";
            $query = mysqli_query($this->db,$intern);
            return $query;
        }

        public function insertInternships($name,$type,$duration,$perks,$skills){
            $sql = "INSERT INTO `internships`( `name`, `type`, `duration`, `perks`, `skills`, `status`) VALUES ('".$name."','".$type."','".$duration."','".$perks."','".$skills."',1)";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function updateInternshipsStatus($id,$status){
            $sql="UPDATE `internships` SET
                            `status`='".$_GET['status']."' WHERE id='".$id."';";
             $query = mysqli_query($this->db,$sql);
             return $query;
        }

        

        public function getStudentByID($id){
            $sql = "SELECT * FROM stud_details where id =".$id.";";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }

        public function getStudentWithLimit($start,$limit){
            $fetch = "SELECT * FROM stud_details LIMIT $start, $limit"; 
                                
            $result = mysqli_query($this->db, $fetch);
            return $result;
        }
        public function getStudentWithLimitAndBatch($start,$limit,$batch){
            $fetch = "SELECT * FROM stud_details  where  `batch` = '".$batch."' LIMIT $start, $limit;"; 
                                
            $result = mysqli_query($this->db, $fetch);
            return $result;
        }

        public function countTotalStudents(){
            $user = "SELECT COUNT(*) as count_stud FROM stud_details ";
            $count = mysqli_query($this->db,$user);
            $assoc = mysqli_fetch_assoc($count);
            return $assoc['count_stud'];
        }

        public function deleteStudDetails($id){
            $delete = "DELETE FROM `stud_details` WHERE id =".$id."";
            $result = mysqli_query($this->db, $delete);
            return $result;
        }

        public function filterStudentWithBatch($id,$batch){
            $fetch = "SELECT * FROM stud_details where id =".$id." and `batch` = ".$batch.";";
            $result = mysqli_query($this->db, $fetch);
            return $result;
        }

        public function getEarning(){
            $amount = "SELECT * FROM `earning` ORDER BY id DESC LIMIT 1 ";
            $am = mysqli_query($this->db, $amount);
            $earn  = mysqli_fetch_assoc($am);
            return $earn['earning'];
        }

        public function getLastInternId(){
                $last = "SELECT * FROM intern ORDER BY id DESC LIMIT 1";
                $record = mysqli_query($this->db,$last);
                $res = mysqli_fetch_assoc($record);
                $num_rows = mysqli_num_rows($record);
                return $num_rows;
        }

        public function countInterns(){
            $user = "SELECT COUNT(*) as count_intern FROM intern ";
            $count = mysqli_query($this->db,$user);
            $assoc = mysqli_fetch_assoc($count);
            return $assoc['count_intern'];
        }
        public function countWFHInterns(){
            $user = "SELECT COUNT(*) as count_intern FROM intern  where `i_type` = 'work From Home'";
            $count = mysqli_query($this->db,$user);
            $assoc = mysqli_fetch_assoc($count);
            return $assoc['count_intern'];
        }
        public function insertIntern($name,$email, $gender,$phone,$city,$state,$clg,$domain,$type,$duration,$fileUpload){
             $sql = "INSERT INTO intern ( `name`, `email`, `gender`, `phone_no.`, `city`, `state`, `clg_name`,`i_domain`, `i_type`, `i_duration`,     `resume`) VALUES ('".$name."','".$email."','".$gender."','".$phone."','".$city."','".$state."','".$clg."','".$domain."','".$type."','".$duration."','".$fileUpload."')";
             $query = mysqli_query($this->db,$sql);
             return $query;
        }

        public function insertBatches($name,$start,$end){
            $sql = "INSERT INTO `batches`(`name`, `start_time`, `end_time`, `status`) VALUES ('".$name."','".$start."','".$end."','1')";
            mysqli_query($this->db, $sql);
        }

        public function updateBatchStatus($id,$status){
            $sql="UPDATE `batches` SET
                            `status`='".$status."' WHERE id='".$id."';";
            mysqli_query($this->db,$sql);
        }
        public function getAllBatches(){
            $fetch = "SELECT * FROM batches ";
            $result = mysqli_query($this->db, $fetch);
            return $result;
        }

        public function updateBalanceFees($balance,$id){
            $deposit = "UPDATE `stud_details` SET `balance_fees`='".$balance."' WHERE `id` = ".$id."";
            $result = mysqli_query($this->db, $deposit);
            return $result;
        }

        public function insertTransactionHistory($id,$name,$remain,$reason){
            $transaction = "INSERT INTO `transaction_history`( `user_id`, `name`, `amount`, `reason`) VALUES ('".$id."','".$name."','".$remain."','".$reason."')";
            mysqli_query($this->db,$transaction);
        }

        public function getTransactionWithId($id){
            $fetch = "SELECT * FROM transaction_history where user_id =".$id.";";
            $result = mysqli_query($this->db, $fetch);
            return $result;
        }

        public function getTransactionWithLimit($start,$limit){
            $fetch = "SELECT * FROM transaction_history ORDER BY id DESC  LIMIT $start, $limit";                
            $result = mysqli_query($this->db, $fetch);
            return $result;
        }

        public function getLastEarningMonth(){
            $amount = "SELECT * FROM `earning` ORDER BY id DESC LIMIT 1 ";
            $am = mysqli_query($this->db, $amount);
            return $am;
        }

        public function insertEarning($remain,$date){
            $earning = "INSERT INTO `earning`( `earning`, `month_year`) VALUES ('".$remain."','".$date."')";
            $am = mysqli_query($this->db, $earning);
            return $am;
        }

        public function updateEarning($remain,$id){
            $earning = "UPDATE `earning` SET `earning`='".$remain."' WHERE `id`='".$id."'";
             mysqli_query($this->db,$earning);
        }
    }        
?>
