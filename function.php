<?php
//	error_reporting(0);

	//$num1=$_POST['firstvalue'];
	//$num2=$_POST['scndvalue'];
	//$opr="+";echo $num2;
$histry[5]=10;

if(isset($_POST['BTN+'])){
	$cal=new math('+' , 10 ,20 );
	if($fresult=$cal->calculat()){	
		for($i=1;$i<5;$i++){
			if($histry[$i]==""){
				$histry[$i]="hyy";
				
				break;
				
			}	
		}
		
	}
}
if(isset($_POST['BTN-'])){
	$cal=new math('-' , 10 ,20 );
	if($fresult=$cal->calculat()){
		for($i=1;$i<5;$i++){
			if($histry[$i]==""){
				$histry[$i]="hyy";
				
				break;
				
			}	
		}
		
	}
}
if(isset($_POST['BTN*'])){
	$cal=new math('*' , 2 ,10 );
	$fresult=$cal->calculat();	
}
if(isset($_POST['BTN/'])){
	$cal=new math('/' , 2 ,10 );
	$fresult=$cal->calculat();	
}


?>