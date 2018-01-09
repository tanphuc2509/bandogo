<?php
	//Định nghĩa các hằng số cơ sở dữ liệu
    define("SERVER","localhost");
    define("DATABASE","bandogo");
    define("USERNAME","root");
    define("PASSWORD","");
	
	class DataProvider
	{
		public static function execQuery($sql)
		{
            $connection = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE) or 
			die("Could not connect to" ."localhost". " .");
			
            mysqli_query($connection,"set names 'utf8'");
            $result = mysqli_query($connection,$sql);
            if(!$result) die("Query failed: ".mysql_error());
            
            mysqli_close($connection);
            return $result;
        }
        
        public static function ChangeURL($path)
        {
            echo '<script type = "text/javascript">';
            echo 'location = "'.$path.'";';
            echo '</script>';
        }
    }
?>