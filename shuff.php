<?php
//<form name="test" action="" method="POST">
//	Please select you preferences: <select name="Alpha">
//		<option value="0">Not Selected</option>
//		<option value="aplha">A-Z</option>
//	</select>
//	<input type="submit" value="Genrate Password" />
//</form>



//echo @$_POST['Alpha'], "<br>";
$string = 'abcdefghijklmnopqrtsuvwxyzABCDEFGHIJKLMNOPQRSTUVWVYZ1234567890!@#$%^&*()_+';
$string_suff = str_shuffle($string);
$pass = substr($string_suff, 1, 20);
echo MD5($pass),"<br>";
echo $pass ,"<br>","<br>";


echo "Start Here<br>";
$s1= "abcdefghijklmnopqrtsuvwxyz";
$s11 = str_shuffle($s1);

$s2= strtoupper($s1);
$s22 = str_shuffle($s2);

$s3= '0123456789';
$s33 = str_shuffle($s3);

$s4= '~!@#$%^&*()_+';
$s44 = str_shuffle($s4);

$s5 = $s11.$s22.$s33.$s44;
$s55 = str_shuffle($s5);

$final = substr($s55, 5, 25);
echo  $final;

$arr1 = str_split($final);
$arr2 =array('a'=>'alpha','b'=>'bravo','c'=>'charli','d'=>'dan','e'=>'engine','f'=>'fan','g'=>'gun');
echo '<br>';
foreach($arr2 as $arr1){
	echo $arr1,"<br>";
}
//$result = array_intersect_assoc($arr2,$arr1);
//print_r($result);


?>
