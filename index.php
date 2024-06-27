<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <?php include __DIR__  . "/partials/hotel.php";    ?>


</head>


<body>

<div class="container">
    <header class="d-flex justify-content-center mt-5">
        <h1>Hotel</h1>
    </header>

    <div class="provaPhp mt-5">
    <p>prova</p>

    <?php

    foreach ($hotels as $hotel => $data) {

        echo $data["name"] . " " . $data["description"] . " " . $data["parking"] . " " . $data["vote"] . " " . $data["distance_to_center"] . '<br>';


    }


    ?>
<br>

<hr>


    </div>

<div>




<?php

foreach ($hotels as $hotel) {
    foreach ($hotel as $key => $value) {

        echo "$key: $value";

    }

}


?>
</div>

    <main>

    <table class="table">


    <thead>

    <tr>
      <th scope="col">#</th>
      
      



    <?php
    
    foreach ($hotels[0] as $key => $value) {
        echo "<th scope=\"col\">" . ucfirst($key) . "</th>";
    }
    
    ?>



    </tr>
    </thead>


    <tbody>
        <?php
        foreach ($hotels as $index => $hotel) {
            echo "<tr>";
            echo "<th scope=\"row\">" . ($index + 1) . "</th>";
            foreach ($hotel as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>

    
</table>
    </main>
    </div>

</body>



</html>