<?php

function des ($key,$message) {

$S[1][0]=array(14,4,13,1,2,15,11,8,3,10,6,12,5,9,0,7);
$S[1][1]=array(0,15,7,4,14,2,13,1,10,6,12,11,9,5,3,8);
$S[1][2]=array(4,1,14,8,13,6,2,11,15,12,9,7,3,10,5,0);
$S[1][3]=array(15,12,8,2,4,9,1,7,5,11,3,14,10,0,6,13);

$S[2][0]=array(15,1,8,14,6,11,3,4,9,7,2,13,12,0,5,10);
$S[2][1]=array(3,13,4,7,15,2,8,14,12,0,1,10,6,9,11,5);
$S[2][2]=array(0,14,7,11,10,4,13,1,5,8,12,6,9,3,2,15);
$S[2][3]=array(13,8,10,1,3,15,4,2,11,6,7,12,0,5,14,9);

$S[3][0]=array(10,0,9,14,6,3,15,5,1,13,12,7,11,4,2,8);
$S[3][1]=array(13,7,0,9,3,4,6,10,2,8,5,14,12,11,15,1);
$S[3][2]=array(13,6,4,9,8,15,3,0,11,1,2,12,5,10,14,7);
$S[3][3]=array(1,10,13,0,6,9,8,7,4,15,14,3,11,5,2,12);

$S[4][0]=array(7,13,14,3,0,6,9,10,1,2,8,5,11,12,4,15);
$S[4][1]=array(13,8,11,5,6,15,0,3,4,7,2,12,1,10,14,9);
$S[4][2]=array(10,6,9,0,12,11,7,13,15,1,3,14,5,2,8,4);
$S[4][3]=array(3,15,0,6,10,1,13,8,9,4,5,11,12,7,2,14);

$S[5][0]=array(2,12,4,1,7,10,11,6,8,5,3,15,13,0,14,9);
$S[5][1]=array(14,11,2,12,4,7,13,1,5,0,15,10,3,9,8,6);
$S[5][2]=array(4,2,1,11,10,13,7,8,15,9,12,5,6,3,0,14);
$S[5][3]=array(11,8,12,7,1,14,2,13,6,15,0,9,10,4,5,3);

$S[6][0]=array(12,1,10,15,9,2,6,8,0,13,3,4,14,7,5,11);
$S[6][1]=array(10,15,4,2,7,12,9,5,6,1,13,14,0,11,3,8);
$S[6][2]=array(9,14,15,5,2,8,12,3,7,0,4,10,1,13,11,6);
$S[6][3]=array(4,3,2,12,9,5,15,10,11,14,1,7,6,0,8,13);

$S[7][0]=array(4,11,2,14,15,0,8,13,3,12,9,7,5,10,6,1);
$S[7][1]=array(13,0,11,7,4,9,1,10,14,3,5,12,2,15,8,6);
$S[7][2]=array(1,4,11,13,12,3,7,14,10,15,6,8,0,5,9,2);
$S[7][3]=array(6,11,13,8,1,4,10,7,9,5,0,15,14,2,3,12);

$S[8][0]=array(13,2,8,4,6,15,11,1,10,9,3,14,5,0,12,7);
$S[8][1]=array(1,15,13,8,10,3,7,4,12,5,6,11,0,14,9,2);
$S[8][2]=array(7,11,4,1,9,12,14,2,0,6,10,13,15,3,5,8);
$S[8][3]=array(2,1,14,7,4,10,8,13,15,12,9,0,3,5,6,11);

$P=array(16,7,20,21,29,12,28,17,1,15,23,26,5,18,31,10,2,8,24,14,32,27,3,9,19,13,30,6,22,11,4,25);
	
	//1.2.1
	$n=str_split($key);
	$k = array ($n[57-1],$n[49-1],$n[41-1],$n[33-1],$n[25-1],$n[17-1],$n[9-1],$n[1-1],$n[58-1],$n[50-1],$n[42-1],$n[34-1],$n[26-1],$n[18-1],$n[10-1],	$n[2-1],	$n[59-1],	$n[51-1],	$n[43-1],	$n[35-1],	$n[27-1],	$n[19-1],	$n[11-1],	$n[3-1],$n[60-1],$n[52-1],$n[44-1],	$n[36-1],$n[63-1],$n[55-1],	$n[47-1],$n[39-1],$n[31-1],$n[23-1],$n[15-1],$n[7-1],$n[62-1],$n[54-1],$n[46-1],$n[38-1],$n[30-1],$n[22-1],$n[14-1],$n[6-1],$n[61-1],$n[53-1],$n[45-1],$n[37-1],$n[29-1],$n[21-1],$n[13-1],$n[5-1],$n[28-1],$n[20-1],$n[12-1],$n[4-1]) ;	
	//print_r($k);
	//1.2.2
	$C=array_slice($k,0,28);
	$D=array_slice($k,28);
	//print_r($C);
	//print_r($D);

	//1.2.3.1
	$shifts = array (1,1,2,2,2,2,2,2,1,2,2,2,2,2,2,1);
	   $sC[0] =$C;
       $sD[0] =$D;
       //$K[0]=array_merge($sC[0], $sD[0]);
       $K_ready[0] = array($K[0][14],$K[0][17],$K[0][11],$K[0][24],$K[0][1],$K[0][5],$K[0][3],$K[0][28],$K[0][15],$K[0][6],$K[0][21],$K[0][10],$K[0][23],$K[0][19],$K[0][12],$K[0][4],$K[0][26],$K[0][8],$K[0][16],$K[0][7],$K[0][27],$K[0][20],$K[0][13],$K[0][2],$K[0][41],$K[0][52],$K[0][31],$K[0][37],$K[0][47],$K[0][55],$K[0][30],$K[0][40],$K[0][51],$K[0][45],$K[0][33],$K[0][48],$K[0][44],$K[0][49],$K[0][39],$K[0][56],$K[0][34],$K[0][53],$K[0][46],$K[0][42],$K[0][50],$K[0][36],$K[0][29],$K[0][32]);

	   //1.2.3.3
	   for ($i=1; $i <= 16; $i++) {
		  //shift the keys either one or two bits to the left
		   $sC[$i] = shift ($sC[$i-1], $shifts[$i-1]);
		   $sD[$i] = shift ($sD[$i-1], $shifts[$i-1]);
		   //print_r($sC[$i]);
		   //print_r($sD[$i]);
		//Merge Arrays
		$K[$i]=array_merge($sC[$i], $sD[$i]);
		//print_r($K[16]);
		//1.2.3.2
		$K_ready[$i] = array($K[$i][14-1],$K[$i][17-1],$K[$i][11-1],$K[$i][24-1],$K[$i][1-1],$K[$i][5-1],$K[$i][3-1],$K[$i][28-1],$K[$i][15-1],$K[$i][6-1],$K[$i][21-1],$K[$i][10-1],$K[$i][23-1],$K[$i][19-1],$K[$i][12-1],$K[$i][4-1],$K[$i][26-1],$K[$i][8-1],$K[$i][16-1],$K[$i][7-1],$K[$i][27-1],$K[$i][20-1],$K[$i][13-1],$K[$i][2-1],$K[$i][41-1],$K[$i][52-1],$K[$i][31-1],$K[$i][37-1],$K[$i][47-1],$K[$i][55-1],$K[$i][30-1],$K[$i][40-1],$K[$i][51-1],$K[$i][45-1],$K[$i][33-1],$K[$i][48-1],$K[$i][44-1],$K[$i][49-1],$K[$i][39-1],$K[$i][56-1],$K[$i][34-1],$K[$i][53-1],$K[$i][46-1],$K[$i][42-1],$K[$i][50-1],$K[$i][36-1],$K[$i][29-1],$K[$i][32-1]);
		}
		//print_r($K_ready[1]);
		
		
		//2 Data block
		//2.1 Pad
		//$message=str_pad($message, 64, '0', STR_PAD_RIGHT);
		//Moved in main to print padded message
		
		//2.2
		$datablock=str_split($message);
		$DB_IP=array($datablock[58-1],$datablock[50-1],$datablock[42-1],$datablock[34-1],$datablock[26-1],$datablock[18-1],$datablock[10-1],$datablock[2-1],$datablock[60-1],$datablock[52-1],$datablock[44-1],$datablock[36-1],$datablock[28-1],$datablock[20-1],$datablock[12-1],$datablock[4-1],$datablock[62-1],$datablock[54-1],$datablock[46-1],$datablock[38-1],$datablock[30-1],$datablock[22-1],$datablock[14-1],$datablock[6-1],$datablock[64-1],$datablock[56-1],$datablock[48-1],$datablock[40-1],$datablock[32-1],$datablock[24-1],$datablock[16-1],$datablock[8-1],$datablock[57-1],$datablock[49-1],$datablock[41-1],$datablock[33-1],$datablock[25-1],$datablock[17-1],$datablock[9-1],$datablock[1-1],$datablock[59-1],$datablock[51-1],$datablock[43-1],$datablock[35-1],$datablock[27-1],$datablock[19-1],$datablock[11-1],$datablock[3-1],$datablock[61-1],$datablock[53-1],$datablock[45-1],$datablock[37-1],$datablock[29-1],$datablock[21-1],$datablock[13-1],$datablock[5-1],$datablock[63-1],$datablock[55-1],$datablock[47-1],$datablock[39-1],$datablock[31-1],$datablock[23-1],$datablock[15-1],$datablock[7-1]);
		//print_r($DB_IP);

		//2.3
		$L[0]=array_slice($DB_IP,0,32);
		$R[0]=array_slice($DB_IP,32);
		//print_r($L[0]);
		//print_r($R[0]);
		//$R[0]=array($R[0][32-1],$R[0][1-1],$R[0][2-1],$R[0][3-1],$R[0][4-1],$R[0][5-1],$R[0][4-1],$R[0][5-1],$R[0][6-1],$R[0][7-1],$R[0][8-1],$R[0][9-1],$R[0][8-1],$R[0][9-1],$R[0][10-1],$R[0][11-1],$R[0][12-1],$R[0][13-1],$R[0][12-1],$R[0][13-1],$R[0][14-1],$R[0][15-1],$R[0][16-1],$R[0][17-1],$R[0][16-1],$R[0][17-1],$R[0][18-1],$R[0][19-1],$R[0][20-1],$R[0][21-1],$R[0][20-1],$R[0][21-1],$R[0][22-1],$R[0][23-1],$R[0][24-1],$R[0][25-1],$R[0][24-1],$R[0][25-1],$R[0][26-1],$R[0][27-1],$R[0][28-1],$R[0][29-1],$R[0][28-1],$R[0][29-1],$R[0][30-1],$R[0][31-1],$R[0][32-1],$R[0][1]);
		//print_r($R[0]);
						
		//2.4
		for ($i=1; $i <= 16; $i++) {
			//2.4.1
			$temp_arr=array($R[$i-1][32-1],$R[$i-1][1-1],$R[$i-1][2-1],$R[$i-1][3-1],$R[$i-1][4-1],$R[$i-1][5-1],$R[$i-1][4-1],$R[$i-1][5-1],$R[$i-1][6-1],$R[$i-1][7-1],$R[$i-1][8-1],$R[$i-1][9-1],$R[$i-1][8-1],$R[$i-1][9-1],$R[$i-1][10-1],$R[$i-1][11-1],$R[$i-1][12-1],$R[$i-1][13-1],$R[$i-1][12-1],$R[$i-1][13-1],$R[$i-1][14-1],$R[$i-1][15-1],$R[$i-1][16-1],$R[$i-1][17-1],$R[$i-1][16-1],$R[$i-1][17-1],$R[$i-1][18-1],$R[$i-1][19-1],$R[$i-1][20-1],$R[$i-1][21-1],$R[$i-1][20-1],$R[$i-1][21-1],$R[$i-1][22-1],$R[$i-1][23-1],$R[$i-1][24-1],$R[$i-1][25-1],$R[$i-1][24-1],$R[$i-1][25-1],$R[$i-1][26-1],$R[$i-1][27-1],$R[$i-1][28-1],$R[$i-1][29-1],$R[$i-1][28-1],$R[$i-1][29-1],$R[$i-1][30-1],$R[$i-1][31-1],$R[$i-1][32-1],$R[$i-1][1-1]);
			//print_r($temp_arr);
			//2.4.2
			$xored[$i]= myxor($K_ready[$i],$temp_arr);
			//print_r ($xored[$i]);
			
			//2.4.3
			for ($j=0; $j <= 48; $j+=6) {
				$B[$j/6+1]=array_slice($xored[$i],$j,6);
				//print_r($B[$j/6+1]);
			}

			//2.4.4.4
			for ($j=1; $j <= 8; $j++) {
				
				//2.4.4.1-2
				$m=bindec($B[$j][0].$B[$j][5]);
				$n=bindec($B[$j][1].$B[$j][2].$B[$j][3].$B[$j][4]);
				//echo $B[$j][0].$B[$j][5]."*";
				//echo $B[$j][1].$B[$j][2].$B[$j][3].$B[$j][4]."|";
				
				//2.4.4.3
				$temp=decbin($S[$j][$m][$n]);
				//echo($temp."|");
				//fill with zeros	
			    $temp=str_pad($temp, 4, '0', STR_PAD_LEFT);
				$B[$j]=$temp;
				//print_r($B[$j]."\n");
			}	
			
			$B2=$B[1].$B[2].$B[3].$B[4].$B[5].$B[6].$B[7].$B[8];
			//echo $B2."|";

			//2.4.5
			$temp_arr2=array($B2[16-1],$B2[7-1],$B2[20-1],$B2[21-1],$B2[29-1],$B2[12-1],$B2[28-1],$B2[17-1],$B2[1-1],$B2[15-1],$B2[23-1],$B2[26-1],$B2[5-1],$B2[18-1],$B2[31-1],$B2[10-1],$B2[2-1],$B2[8-1],$B2[24-1],$B2[14-1],$B2[32-1],$B2[27-1],$B2[3-1],$B2[9-1],$B2[19-1],$B2[13-1],$B2[30-1],$B2[6-1],$B2[22-1],$B2[11-1],$B2[4-1],$B2[25-1]);
			//print_r($temp_arr2);
			
			$L[$i] = $R[$i-1];
			for ($k=0; $k < 32; $k++) {
				//echo($L[$i-1][$k]);
				if($L[$i-1][$k]==$temp_arr2[$k])
					$R[$i][$k]=0;
				else{ 
					$R[$i][$k]=1;
				}
			}
			//$R[$i]= myxor2($L[$i-1],$temp_arr2);
			//echo "<br>";
			//echo $i."<br>";
			//print_r($R[$i]);
		}
		
		//print_r($R[16]);
		//print_r($L[16]);
		
	//2.5
	$PRet=array_merge($R[16], $L[16]);
	//print_r($PRet);
	$Ret=array($PRet[40-1],$PRet[8-1],$PRet[48-1],$PRet[16-1],$PRet[56-1],
	$PRet[24-1],$PRet[64-1],$PRet[32-1],$PRet[39-1],
	$PRet[7-1],$PRet[47-1],$PRet[15-1],$PRet[55-1],
	$PRet[23-1],$PRet[63-1],$PRet[31-1],$PRet[38-1],
	$PRet[6-1],$PRet[46-1],$PRet[14-1],$PRet[54-1],
	$PRet[22-1],$PRet[62-1],$PRet[30-1],$PRet[37-1],
	$PRet[5-1],$PRet[45-1],$PRet[13-1],$PRet[53-1],
	$PRet[21-1],$PRet[61-1],$PRet[29-1],$PRet[36-1],
	$PRet[4-1],$PRet[44-1],$PRet[12-1],$PRet[52-1],
	$PRet[20-1],$PRet[60-1],$PRet[28-1],$PRet[35-1],
	$PRet[3-1],$PRet[43-1],$PRet[11-1],$PRet[51-1],
	$PRet[19-1],$PRet[59-1],$PRet[27-1],$PRet[34-1],
	$PRet[2-1],$PRet[42-1],$PRet[10-1],$PRet[50-1],
	$PRet[18-1],$PRet[58-1],$PRet[26-1],$PRet[33-1],
	$PRet[1-1],$PRet[41-1],$PRet[9-1],$PRet[49-1],
	$PRet[17-1],$PRet[57-1],$PRet[25-1]);
		
		
		//Glorious return
		return $Ret;
}
function myxor2 ($arr, $arr2) {
	
	for ($i=0; $i < 32; $i++) {
			if($arr[$i]==$arr2[$i])
				$xored2[$i]=0;
			else{ 
				$xored2[$i]=1;
			}
		}

	
	return $xored2;
}


function myxor ($arr, $arr2) {
	
	for ($i=0; $i < 48; $i++) {
			if($arr[$i]==$arr2[$i])
				$xored2[$i]=0;
			else{ 
				$xored2[$i]=1;
			}
		}
	return $xored2;
}

function shift ($arr, $shift) {
	
	if ($shift==1){
	$shifted=array($arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],$arr[7],$arr[8],$arr[9],$arr[10],$arr[11],$arr[12],$arr[13],$arr[14],$arr[15],$arr[16],$arr[17],$arr[18],$arr[19],$arr[20],$arr[21],$arr[22],$arr[23],$arr[24],$arr[25],$arr[26],$arr[27],$arr[0]);
		}
	else{
	$shifted=array($arr[2],$arr[3],$arr[4],$arr[5],$arr[6],$arr[7],$arr[8],$arr[9],$arr[10],$arr[11],$arr[12],$arr[13],$arr[14],$arr[15],$arr[16],$arr[17],$arr[18],$arr[19],$arr[20],$arr[21],$arr[22],$arr[23],$arr[24],$arr[25],$arr[26],$arr[27],$arr[0],$arr[1]);
		}
	 //print_r($shifted);
	return $shifted;
}


//$key = "0001001100110100010101110111100110011011101111001101111111110001";
//$key = "1110000110100100101110111001101111000010111000110010010010111011";
//$key="0011101100111000100110000011011100010101001000001111011101011110";
//$message = "0000000100100011010001010110011110001001101010111100110111101111";
//$message = "0001011010111101010000001001010010110100010100111000101001111011";
//$message = "1001001000101111101101010001000011000111000111110100001101101110";
//$message="1001001000101111101101010001101011000111000111110100001101101110";
//$message= "1001001000101111101101010001110100100100010110100011101001101110";
//$message=str_pad($message, 64, '0', STR_PAD_RIGHT);
//$ciphertext = des ($key, $message);



//	for ($j=0; $j < 32; $j++) {
	//		echo '$R[$i][floor($P['.$j.']/4)][4-$P['.$j.']%4], ';
    //	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<title>DES online encryption tool</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="A small sentence describing your website's subject" />
	<meta name="keywords" content="some, keywords, separated, by, comas" />
	<meta name="Robots" content="index, follow" />
	<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'/>
	<script src="js/share.js" type="text/javascript" ></script>
</head>

<body>
	<a id="top" name="top"></a>
		
	<div id="topNavigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="http://en.wikipedia.org/wiki/Data_Encryption_Standard" target="_blank">DES</a></li>
			<li><a href="examples.php">Examples</a></li>
			<li><a href="links.php">Links</a></li>
			<li><a href="http://mavroudisv.eu/contact">Contact</a></li>
		</ul>
	</div>

<p style="font-family:verdana,arial,sans-serif;font-size:10px;"></p>

	<div id="mainWrapper">
		<div id="main">
		<br/>
			<h2>DES encryption</h2>
			
				<div class="highlight">The Data Encryption Standard (DES) is a block cipher that uses shared secret encryption. DES is the archetypal block cipher — an algorithm that takes a fixed-length string of plaintext bits and transforms it through a series of complicated operations into another ciphertext bitstring of the same length. In the case of DES, the block size is 64 bits. DES also uses a key to customize the transformation, so that decryption can supposedly only be performed by those who know the particular key used to encrypt.</div>
		<br />
		<br/>
				<ol>
					<li>Insert the 64-bit key in binary form.</li>
					<li>Insert the 64-bit (or less) plaintext in binary form.</li>
					<li>All spaces will be removed by default.</li>
					<li>If plaintext is less than 64 bit it would be padded with zeros on the right side.</li>
					<li>Submit and get the ciphertext.</li>
				</ol>
			<br />
	
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">		
<?php
//GUI
 if (isset($_POST['submit'])) {
	 $key = $_POST['key'];
	 $message = $_POST['message'];
	 $key = str_replace (" ", "", $key);
	 $message = str_replace (" ", "", $message);
	 $message=str_pad($message, 64, '0', STR_PAD_RIGHT);
	 $ciphertext = des ($key, $message);
	 $cipherprint=implode($ciphertext);
 }
echo '<br/><p style="text-align: left;">Plaintext: <br/><input type="text" size="64" name="message" value="'.$message.'"/><br/></p>';
echo '<p style="text-align: left;">64-bit Key: <br/><input type="text" size="64" name="key" value="'.$key.'"/><br/></p>';
echo '<div style="text-align: left;">
			<br/><p class="submit"> <input type="submit" name="submit" value="submit" /></p><br />
	</div>';
 if (isset($_POST['submit'])) {
echo '<p style="text-align: left;">Ciphertext: <br/><textarea name="ciphertext" rows="2" cols="65">'.$cipherprint.'</textarea><br/></p>';
}
echo '</br></br>';
//echo "<br> Vasilis Mavroudis </br>";
?>
</form>	

	</div>
</div>	

<div id="footer">
	Copyright &copy; Mavroudis Vasilis. All rights reserved. | Design by <a href="http://www.mavroudisv.eu/" target="_blank">Mavroudis Vasilis</a>
</div>
	
</body>

</html>
