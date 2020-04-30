 
<?php 
$string = 'A man, a plan, a canal: Panama';
echo $string  = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
if ( strtolower($string) == strtolower( strrev($string) ) ){
      echo 'Palindrome string';
}else{      
	 echo 'Not a palindrome string';
}die;

?>
