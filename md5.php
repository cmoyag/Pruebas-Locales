<?php

//echo md5('openuc');


function generate_uuid() {
	return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
		mt_rand( 0, 0xffff ),
		mt_rand( 0, 0x0fff ) | 0x4000,
		mt_rand( 0, 0x3fff ) | 0x8000,
		mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
	);
}


 function generatePassword($length = 8) {
        $possibleChars = "abcdefghijklmnopqrstuvwxyz";
        $password = '';

        for($i = 0; $i < $length; $i++) {
            $rand = rand(0, strlen($possibleChars) - 1);
            $password .= substr($possibleChars, $rand, 1);
        }

        return $password;
    }

$uuid= generate_uuid();

$pass=generatePassword();


//$rut='!"#$%&/()=?¡abc.cdd9982-15';

//echo preg_replace('/[^a-zA-Z0-9 -]/','',$rut);
//echo md5('rclpbplsjz');
echo md5('lbfflkklmi');
//echo $pass;

/*
date_default_timezone_set('America/New_York');
$date=date("Y-m-d"); //YYYY-MM-DD
echo $date; 
echo '<br>';
$datatime = date("Y-m-d H:i:s");   
echo $datatime;
*/

$data='20173_O_EOPOPEN_CEJ,20152_C_LOG100_V1,20152_C_LOG100_V1';
//$data='{"rut":"16407930-9","email":"cristian8x@gmail.com","curso":"20173_O_MKTOPEN_CEJ","status":"6"}';
/*
$result=json_decode($data);
echo '<pre>';
var_dump($result);
echo '</pre>';
*/
$Arraycurso=explode(",",$data);
print_r($data);
foreach($Arraycurso as $d){
	echo $d;echo',';
}

?>