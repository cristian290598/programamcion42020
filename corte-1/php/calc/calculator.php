<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Styles.css">
    <title>calculator</title>
</head>
<body>
    <div class= "border-element" >
        <div>
            <span>
                
                <center>IN THIS PLACE YOU CAN MAKE ANY ADDITION, SUBTRACTION, MULTIPLICATION AND DIVISION</center> 
            </span>
        </div>
        <div class= "border-element main_frame">
            
            <?php 

                $n1= $_REQUEST['n1'];
                $n2= $_REQUEST['n2'];
                $variable= $_REQUEST['variable'];

                if ($_REQUEST["variable"]== "sum" ) {
                    
                    $result=  $_REQUEST["n1"]+ $_REQUEST["n2"];
                    print"the result is...:";
                    print $result; 
                }elseif($_REQUEST["variable"]== "sub"){

                    $result=  $_REQUEST["n1"] - $_REQUEST["n2"];
                    print"the result is....:";
                    print $result;   
                }elseif ($_REQUEST["variable"]== "mult") {
                    $result=  $_REQUEST["n1"] * $_REQUEST["n2"];
                    print "the result is:...."; 
                    print $result;

                }elseif ($_REQUEST["variable"]== "div") {
                    if ($_REQUEST["n1"] == '0') {
                        print "the number must be different from 0";
                    }else {
                        $result=  $_REQUEST["n1"] / $_REQUEST["n2"];
                        print "the result is:...."; 
                        print $result; 
                    }
                }
            ?>
            <div class="second_frame border-element" >
                <?php
                    if ($result<0) {

                        print'<imag src="./imag/descarga.jpeg" width="500" height="300" alt="portrait">';
                    }else {
                        print'<imag src="./imag/feliz.jpeg" width="500" height="300" alt="portrait">';
                    }

                ?>
            </div>
        </div>    
    </div>    
</body>
</html>