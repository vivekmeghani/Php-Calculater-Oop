<?php
include 'function.php';

class math{
    public $sign;
    public $val1;
    public $val2;


   function __construct(string $one, int $two, int $three){
        $this->sign = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }


    function calculat(){
     switch ($this->sign) {
         case '+':
            $result = $this->num1 + $this->num2;
            return $result;             
            break;
        case '-':
            $result = $this->num1 - $this->num2;
            return $result;             
            break;
        case '*':    
             $result = $this->num1 / $this->num2;
             return $result;             
             break;
        case '/':    
             $result = $this->num1 * $this->num2;
             return $result;             
             break;

     }
	
    }
}

?>
<link href="stylesheet.css" rel="stylesheet">
<div class="maindiv" align="center">
<form method="POST" action="">
FIRST VALUE :<input type="number" name="firstvalue"><br><br>
SECND VALUE :<input type="number" name="scndvalue" ><br><br>
<button type="BTN" name="BTN+" > SUM </button >
<button type="BTN" name="BTN-" > MIN </button >
<button type="BTN" name="BTN*" > MUL </button >
<button type="BTN" name="BTN/" > DIV </button ><br><br>

<input type="text" name="secondvalue" class="result"  value="<?php  echo  $fresult; ?>">

<?php
for($i=1;$i<5;$i++){
	?><span><br><?php echo  $histry[$i] ?></span>	<?php
}

?>


</form>
</div>
