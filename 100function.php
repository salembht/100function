<?php 
#1
function my_length($text){
 $length=0;
 while(true){
    if(! isset($text[$length])){
         break;
    }
    $length++;
 }
 return $length;
} 
#2
function my_similar_text($text1 ,$text2 ){ 
    $length_of_small=0;
    $larg_text='';
    $small_text='';
    $smallerpoint=0;
    if($text1 <=> $text2 ){
       
         $length_of_small=my_length($text2);
         $larg_text=$text1;
         $small_text=$text2;
    }else{
        $length_of_small=my_length($text1);
        $larg_text=$text2;
        $small_text=$text1;
    } 
 for ($i=0;$i<$length_of_small;$i++){
    if($larg_text[$i] === $small_text[$i]){
        $smallerpoint++;
    }
 }
 return $smallerpoint ;
}
#3
function my_substring($text, $length ){ 
    $resulte='';
    if($length < 0){
        $length=my_length($text)+$length;
    }
    for($i=$length ;$i<my_length($text);$i++){
        $resulte.=$text[$i];
    }
    return $resulte;
}
#4
function my_substr($text, $start, $length ){ 
   $resulte='';
    for($i=$start ;$i<$length;$i++){
        $resulte.=$text[$i];
    }
    return $resulte;
}
#5
function my_end_with($orignal_text, $comalelation ){
  $length =my_length($comalelation);
  if($length ==0){
    return true;
  }
  return my_substring($orignal_text ,-$length) ===$comalelation;
}
#6
function my_startwith($orignal_text, $comalelation ){
    $length =my_length($comalelation);
 return my_substr($orignal_text,0,$length) === $comalelation;
}
#7
function my_repeate($text ,$times){
    $repatedtext='';
    for($i=0;$i<$times;$i++){
        $repatedtext.=$text;
    }
    return $repatedtext;
}
#8
function my_rev($text){
    $textrvs='';
 for($i=strlen($text)-1;$i>=0;$i--){
    $textrvs.= $text[$i];
 }
 return $textrvs;
}
#9
function toupper($text) { 
 $uppercasestr='';
 for($i=0;$i<my_length($text);$i++){
    $char=$text[$i];
    $ascivalue=myscall($char);
    if($ascivalue>=97&&$ascivalue<=122){
        $uppercasestr.=mychr($ascivalue-32);
    }else{
        $uppercasestr.=$char;
    }
 }
  return $uppercasestr;
}
#10
function tolower($text){
    $lowercasstr='';
    for($i=0;$i<my_length($text);$i++){
        $char=$text[$i];
        $ascivalue=myscall($char);
        if($ascivalue>=65&&$ascivalue<=90){
            $lowercasstr.=mychr($ascivalue+32);
        }else{
            $lowercasstr.=$char;
        }
    }
    return $lowercasstr;  
}
#11
function myscall($char){
    $value=unpack('C',$char);
    return $value[1] ;
}
#12 
function mychr($asci){
    return pack('C',$asci);
}
#13
function mcount($arr){ 
    $length=0;
    for($i=1;$i <= my_length($arr);$i++){
        $length++;
    }
    return $length;
}
#14
function splitstr($text){
 $arr=array();
 for($i=0;$i<my_length($text);$i++){
    $arr[$i]=$text[$i];
 }
 return $arr;
}
#15
function nmin($arr){
    $min =$arr[0];
    for($i=1;$i<my_length($arr);$i++){
        if($arr[$i] < $min){
            $min=$arr[$i];
        }
    }
    return $min;
}
#16
function nmax( $arr){
    $max=$arr[0];
    for($i=1;$i<my_length($arr);$i++){
        if($arr[$i] > $max){
            $max=$arr[$i];
        }
    }
}
#17
function avg($arr){
 return sum($arr)/my_length($arr);
}
#18
function sum($arr){
 $sum=0;
 for($i=0;$i<my_length($arr);$i++){
  $sum+=$arr[$i];
 }
 return $sum;
}
#19 
function perstag($arr,$all){
    return (sum($arr)/$all)*100;
}
#20 
function custrpos($string ,$char){
 $index='';
 for($i=0;$i<my_length($string );$i++){
    if($string[$i]==$char){
        $index =$i;
        break;
    }
 }
 return $index;
} 
#21
function custrrchr($string,$char){
    $text='';
    for($i=0;$i<my_length($string );$i++){
        if($string[$i] ==$char[0]){
            for($j=$i; $j<my_length($string );$j++){
                $text.=$string[$j];
            }
        }
    }
    return $text;
}
#22
function custrripos($string ,$char){
    $index='';
    for($i=0;$i<my_length($string );$i++){
       if($string[$i]==$char){
           $index =$i;
       }
    }
    return $index;
}
#23
function custrtr($string ,$from,$to ){
    for($i=0;$i<my_length($string );$i++){
        if($string[$i] ==$from[0]){
            $string[$i]=$to;
        }
    }
    return $string;
}
#24
function cuscaptalfirst($text){
    $text[0]=toupper($text[0]);
    return $text;
}
#25
function cucapt($string){
 $words=explode(' ',$string);
 $capword=cusarraymap('cuscaptalfirst',$words);
 $resulte=implode(' ',$capword);
 return $resulte;
}
#26 
function cusarraymap($function,$paramter){
    $resulte=array();
    for($i=0;$i<my_length($paramter);$i++){
        $resulte[$i]=$function($paramter[$i]);
    }
    return $resulte;
}
#27
function cusarraypop(&$arr){
  $result=$arr[my_length($arr)-1];
  $arr[my_length($arr)-1]=null;
  return $result;
}
#28
function cusarraypush(&$arr ,...$elements ){
 foreach($elements as $element){
    $arr[]=$element;
 }
}
#29
function cusarray_column(array $arr,int$num){
    $array =array();
    for($i=0;$i<my_length($arr);$i++){
        $array[$i]=$arr[$i][$num];
    }
    return $array;
}
#30
function month($date){
   $date=explode('/',$date);
   return $date[1];
}
#31
function year($date){
    $date=explode('/',$date);
    return $date[0];
}
#32
function daydate($date){
    $date=explode('/',$date);
    return $date[2];
}
#33
function dayname($date){
    $date=explode('/',$date);
     $date=explode(' ',$date[3]);
     return $date[0];
}
#34 
function hour($date){
    $date=explode('/',$date);
    $date=explode(' ',$date[3]);
    $date=explode(':',$date[1]);
    return $date[0];
}
#35
function minute($date){
    $date=explode('/',$date);
    $date=explode(' ',$date[3]);
    $date=explode(':',$date[1]);
    return $date[1];
}
#36
function seconde($date){
    $date=explode('/',$date);
    $date=explode(' ',$date[3]);
    $date=explode(':',$date[1]);
    return $date[2];
}
#37
function timing($date){
    $date=explode('/',$date);
    $date=explode(' ',$date[3]);
     return $date[1];
}
#38 
function thedate($date){
    $date=explode(' ',$date); 
    return $date[0];
}
#39 
 function cusarray_rev( array $arr ){
    $arrrev=array();
    $index=0;
    for($i=count($arr)-1;$i >=0 ;$i--){
       $arrrev[$index++]=$arr[$i]; 
    }
    return $arrrev;
 }
 #40
function cuscount(array $arr){
    $count=0;
    foreach($arr as $element){
        $count++;
    }
    return $count;
}
#41
function arraysortasc(array $arr){
    $length =cuscount($arr);
    for($i=0;$i<$length-1;$i++){
        for($j=0;$j<$length-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
        }
    }
    return $arr;
}
#42
function arraysortdsc(array $arr){
    $length =cuscount($arr);
    for($i=0;$i<$length-1;$i++){
        for($j=0;$j<$length-$i-1;$j++){
            if($arr[$j]<$arr[$j+1]){
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
        }
    }
    return $arr;
}
#43
function creatarrfromcoomn($arr1,$arr2){
    $commnelemnt=array();
    foreach($arr1 as $element){
        if(inarray($element,$arr2) && ! inarray($element,$commnelemnt) ){
            $commnelemnt[]=$element;
        }
    } 
    return $commnelemnt;
}
#44
function inarray($elment,$arr){
    foreach($arr as $value){
        if($elment ===$value){
            return true;
        }
    }
}

$date=date('Y/m/d/l h:m:s a');
$arr=array(3,1,1,2,3);
$arrst=array('a','b','c','f');
$arras=array(
    array('a','b','c','f'),
    array(4,2,5,2,3)
);
session_start();
?>
<p>Welcom , <b> <?php echo  $_SESSION['username']?? 'anymouse' ?></b> </p>