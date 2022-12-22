<?php
    class crud{
        private $db;

        function __construct($dbconn){
            $this->db = $dbconn;
        }

        public function insert($fname, $lname, $gender, $email, $address1, $address2, $image_path){
            try {
                $sql ="INSERT INTO subscribers (first_name,last_name,gender,email,address1,address2,image_path) 
                VALUE (:fname, :lname, :gender, :email, :address1, :address2, :image_path)";
                $stmt = $this -> db->prepare($sql);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':address1',$address1);                                
                $stmt->bindparam(':address2',$address2);
                $stmt->bindparam(':image_path',$image_path);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 
        
        public function getSubs(){
            try{
            $sql = "SELECT * FROM `subscribers`";
            $result  = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        }

        public function getDetails($id){
            try{
            $sql = "SELECT * FROM subscribers WHERE subscriber_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editDetails($id, $fname, $lname, $gender, $email, $address1, $address2){
            try{
            $sql = "UPDATE `subscribers` SET `first_name`=:fname, `last_name`=:lname,
            `gender`=:gender,`email`=:email,`address1`=:address1,
            `address2`=:address2 WHERE subscriber_id = :id";
            $stmt = $this -> db->prepare($sql);
            $stmt->bindparam(':id',$id);           
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':gender',$gender);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':address1',$address1);                                
            $stmt->bindparam(':address2',$address2);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }
    public function deleteDetails($id){
        try{
        $sql = "DELETE FROM `subscribers` WHERE subscriber_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }


    }

    }
?>