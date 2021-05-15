<?Php


class crudDAO
{

    public function register($lname,$fname,$username,$password,$email)
    {
        global $db;
        $hashpass = md5($password);

        $sql="SELECT * FROM users WHERE email = '$email'";
		$result=$db->query($sql);
		
        if(mysqli_num_rows($result) > 0){
			return false;
		}
        else{
			$sql="INSERT INTO users (lname, fname, username, password, email) VALUES ('$lname','$fname','$username','$hashpass','$email')";
			$result=$db->query($sql);
        }

        if($result){
            return $result;
        }
        else{
            return false;
        }

    }
}

?>