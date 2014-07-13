<html>
	<title>Password-Generator</title>
	<body>
		<center><b>Secure Password Generator</b></center>
		<form action="" method="post">
		<b>Password Length:</b>	<select name="length">
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
		</select> <br><br>
			<div><b>Include Symbols:</b> <input type="checkbox" name="symbols" value="symbols">( e.g. @#$% )<br></div><br><br>
			<div><b>Include Numbers:</b> <input type="checkbox" name="numbers" value="numbers">( e.g. 123456 )<br></div><br><br>
			<div><b>Include Lowercase Characters:</b> <input type="checkbox" name="lowercase" value="lowercase">( e.g. abcdefgh )<br></div><br><br>
			<div><b>Include Uppercase Characters:</b> <input type="checkbox" name="uppercase" value="uppercase">( e.g. ABCDEFGH )<br></div><br><br>
			<input type="submit" name="submit" value="Generate Password">
			</form>
	</body>
	<?php
	ini_set('error_reporting','0' );
	$length = $_POST['length'];
	if (isset($_POST['symbols'])) { $symbols ='!@#$%^&*()!@#$%^&*()!@#$%^&*()!@#$%^&*()!@#$%^&*()'; }
	if (isset($_POST['numbers'])) { $numbers ='01234567890123456789012345678901234567890123456789'; }
	if (isset($_POST['lowercase'])) { $lowercase ='abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz'; }
	if (isset($_POST['uppercase'])) { $uppercase ='ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ'; }
	//echo $symbols.$numbers.$lowercase.$uppercase;
	//echo $length;
	echo "<br>";
	$s11 = str_shuffle($symbols);
	$s22 = str_shuffle($numbers);
	$s33 = str_shuffle($lowercase);
	$s44 = str_shuffle($uppercase);
	
	$s5 = $s11.$s22.$s33.$s44;
	$s55 = str_shuffle($s5);
	$final = substr($s55,0,$length);
	$password = str_shuffle($final);
	
	echo $password;
	$phonetics = array("a"=>"alfa","b"=>"bravo","c"=>"charlie","d"=>"delta","e"=>"echo","f"=>"foxtrot","g"=>"golf","h"=>"hotel","i"=>"india","j"=>"juliett","k"=>"kilo","l"=>"lima","m"=>"mike","n"=>"november","o"=>"oscar","p"=>"papa","q"=>"quebec","r"=>"romeo","s"=>"sierra","t"=>"tango","u"=>"uniform","v"=>"victor","w"=>"whisky","x"=>"x-ray","y"=>"yankee","z"=>"zulu");
	$phonetic = array();
	for ($i = 0; $i < strlen($password); $i++) {
    $char = substr($password, $i, 1);
    $phonetic[] = (ctype_upper($char) ? strtoupper(strtr(strtolower($char), $phonetics)) : strtolower(strtr($char, $phonetics)));
}
$phonetic = join(' ', $phonetic);
echo "<br>";
echo $phonetic;
	
	?>
</html>

