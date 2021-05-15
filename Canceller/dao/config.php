<?Php
$config = array('host'=>'sql6.freesqldatabase.com',
				'username'=>'sql6411658',
				'password'=>' PcNU1Cnu1N',
				'database'=>'sql6411658');
$db = new mysqli($config['host'],
				 $config['username'],
				 $config['password'],
				 $config['database']);
if(mysqli_connect_error()){
	echo"error: could not connect to database".mysqli_connect_error();
}
else{
	echo "Database connection established successfully";
}
?>
