<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="" method="GET">
        Toode 1: <input type="number" name="Toode1"> <br>
        Toode 2: <input type="number" name="Toode2"> <br>
        Toode 3: <input type="number" name="Toode3"> <br>

        <input type="submit" value="Arvuta">
    </form>
<?php
//      Kui GET'iga saatsin siis tuleb GET'iga vastu võtta
        if (!empty($t1 = $_GET['Toode1']) && 
        !empty($t2 = $_GET['Toode2']) &&
        !empty ($t3 = $_GET['Toode3'])) {
            
                


        $t1 = $_GET['Toode1'];
        $t2 = $_GET['Toode2'];
        $t3 = $_GET['Toode3'];
        $kokku = $t1 + $t2 + $t3;

        echo "Toode1: $t1 tk <br>";
        echo "Toode2: $t2 tk <br>";
        echo "Toode3: $t3 tk <br>";
        echo "Kõik kokku: $kokku tk";
    }


    ?>

</body>
</html>