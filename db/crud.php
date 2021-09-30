<?php 
class crud{
    private $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function insert($fname, $lname, $dob, $email, $contact, $spec)
    {
        try {
            $sql = "INSERT INTO attendee (firstName, lastName, dateOfBirth, email, phone, special) VALUES (:fname, :lname, :dob, :email, :contact, :spec)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam('fname', $fname);
            $stmt->bindparam('lname', $lname);
            $stmt->bindparam('dob', $dob);
            $stmt->bindparam('email', $email);
            $stmt->bindparam('contact', $contact);
            $stmt->bindparam('spec', $spec);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
           echo $e->getMessage();
           return false;
        }
    }

    public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $spec)
    {

        try 
        {
            $sql = "UPDATE `attendee` 
            SET `firstName`=:fname,`lastName`=:lname,`dateOfBirth`=:dob,`email`=:email,`phone`=:contact,`special`=:spec 
            WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindparam('id', $id);
            $stmt->bindparam('fname', $fname);
            $stmt->bindparam('lname', $lname);
            $stmt->bindparam('dob', $dob);
            $stmt->bindparam('email', $email);
            $stmt->bindparam('contact', $contact);
            $stmt->bindparam('spec', $spec);

            $stmt->execute();
            return true;

        } catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false;
        }


    }
 
    public function getAttendence(){
        try 
        {
            $sql = "SELECT * FROM `attendee`";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAttendDetails($id){
        try 
        {
            $sql = "SELECT * FROM attendee WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false;
        }

    }

    public function deleteAttendee($id){
        try 
        {
            $sql = "DELETE FROM attendee WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false;
        }

    }
}
?>