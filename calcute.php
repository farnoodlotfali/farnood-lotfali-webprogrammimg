
<?php
// $string = "aa"; 
// $str = "2-2*250"; 
// ;
// echo !$answer;
// echo '<br>';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $fname =$_POST['fname'];
    $answer=preg_match('/[^0-9\/\-+*]/i', $fname);
    if (empty($fname) || $answer) {
            echo "invalid try again";

    }else{
        echo 'result: ';
        echo  eval("return $fname;");
    }
    echo '<br>';
    echo '<a href="./index.html">back</a>';

}
?>