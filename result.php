<!-- <!DOCTYPE html> -->
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Risultato tiro dadi</title>
</head>

<body>
    <div id="blank_box"> </div>
    <div id="card">
        <h1>Random Number Result</h1>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $num_dice = $_POST['num_dice'];
                $dice_type = $_POST['dice_type'];
            
            
            echo "<p>Numero dei dadi: $num_dice</p>";
            echo "<p>Tipo di dadi: $dice_type</p>";
            $total = 0;

            $rolls = array();

            for ($i = 0; $i < $num_dice; $i++) {
                $roll = rand(1, $dice_type);
                $rolls[] = $roll;
                $total += $roll;
            }
            echo "<p>Totale: $total</p>";
            echo "<h2>Lanci individuali:</h2>";

        }
        ?>
        <div id="container">
            <?php 
            echo "<ul>";
            foreach ($rolls as $roll) {

                echo "<li>$roll</li>";
    
                }
            ?>
        </div>
    </div>
</body>

</html>