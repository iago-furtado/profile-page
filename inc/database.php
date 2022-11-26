<?php
class database{
    private $servername = "172.31.22.43";
    private $username = "Iago200507139";
    private $password = "3AoppHwZNO";
    private $database = "Iago200507139";
    public $con;

    // connect the database
    public function __construct(){
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if(mysqli_connect_errno()){
            trigger_error("Fail to connect " . mysqli_connect_error());
        }else{
            return $this->con;
        }
    }
    // insert the recotd into the table (Create)
    public function insertData($post){
        $name = $this->con->real_escape_string($_POST['name']);
        $email = $this->con->real_escape_string($_POST['email']);
        $bio = $this->con->real_escape_string($_POST['bio']);
        $query = "INSERT INTO user_profile(name,email,bio) VALUES ('$name','$email','$bio')";
        $sql = $this->con->query($query);
        if($sql == true){
            header("Location:index.php?msg1=insert");
        }else{
            echo "Could not add the record";
        }
    }
    public function displayData()
    {
        $query = "SELECT * FROM user_profile";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
        }else{
        echo "No found records";
        }
    }

    // fetch record by id(Read and  Update)
  public function displyaRecordById($id)
  {
    $query = "SELECT * FROM user_profile WHERE id = '$id'";
    $result = $this->con->query($query);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row;
    }else{
      echo "Record not found";
    }
  }

  // Update information
  public function updateRecord($postData)
  {
    $name = $this->con->real_escape_string($_POST['name']);
    $email = $this->con->real_escape_string($_POST['email']);
    $bio = $this->con->real_escape_string($_POST['bio']);
    $id = $this->con->real_escape_string($_POST['id']);
    if (!empty($id) && !empty($postData)) {
      $query = "UPDATE portfolio SET name = '$name', email = '$email', bio = '$bio' WHERE id = '$id'";
      $sql = $this->con->query($query);
      if ($sql==true) {
        header("Location:index.php?msg2=update");
      }else{
        echo "Registration updated failed try again!";
      }
    }
  }

  // Delete portfolio data from portfolio table
  public function deleteRecord($id)
  {
      $query = "DELETE FROM user_profile WHERE id = '$id'";
      $sql = $this->con->query($query);
      if ($sql==true) {
        header("Location:index.php?msg3=delete");
      }else{
        echo "Record does not delete try again";
      }
  }
}
?>