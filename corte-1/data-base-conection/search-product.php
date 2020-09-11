

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        //1. Data base connection data
        $dbhost 	= "localhost";
	    $dbname		= "supermercado";
	    $dbuser		= "root";
	    $dbpass		= "";

        $name = null;
        $price = null;
        $categoryId =null;

        $where ="";
        //2. Get REQUEST data
        if((isset($_POST["search"]) && $_POST['search']== "search"){
            $name = $_REQUEST["name"];
            $price = $_REQUEST["price"];
            $categoryId = $_REQUEST["categoryId"];
                
        }
        
        $parameters = array();
        
        foreach ($_POST as $parameter) {

            if ($_POST[$key] && $key!=="search") {
                $parameters[":$key"]= $value;
                $where = $where . "$key=$key OR ";
            }    
        }
        
        //3. Connect to database
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

        //4. Prepare SQL INSERT statement
        $sql = "SELECT id, nombre FROM categoria";
        
        $sqlProductos = "SELECT id,nombre,precio FROM Productos $where ";
        //5. Execute SQL statement
        $q = $conn->prepare($sql);
        $result = $q->execute();

        
        //6. Load database results in memory
        $categories = $q->fetchAll();            
    ?>

    <form action="" method="POST">
        
        Category 
        <select name="categoryId" >
            <option value="">todos</option>
            <?php
                for($i=0; $i < count($categories); $i++){
            ?>
                <option 
                    value="<?php echo ategories[$i]["id"];  ?>">
                    <?  php echo $categories[$i]["nombre"];  ?>
                </option>
            <?php
                }
            ?>
        </select> 
        <br/>
        <input type="submit" name ="search" value="search-value">

    </form>
    

    
</body>
</html>