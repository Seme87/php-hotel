<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap -->

    <title>Php-hotel</title>
</head>

<body>


    <h2>Lista Hotel</h2>

    <ul>
        <?php foreach($hotels as $hotel ){ ?>
            <li>
                <h3> <?php echo $hotel['name'] ?> </h3>
                <h4> <?php echo $hotel['description'] ?> </h4>
                <h4> <?php echo $hotel['parking'] ?> </h4>
                <h5> <?php echo $hotel['vote'] ?> </h5>
                <h5> <?php echo $hotel['distance_to_center'] ?> </h5>
            </li>
        <?php } ?>
   </ul>
    
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Name  </th>
                <th scope="col">description</th>
                <th scope="col">parking</th>
                <th scope="col">vote</th>
                <th scope="col">Distance-to-center(km)</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach($hotels as $hotel ){ ?>
                <tr>
                    <th scope="row"> <?php echo $hotel['name'] ?></th>
                    <td> <?php echo $hotel['description'] ?> </td>
                    <td> <?php echo $hotel['parking'] ?> </td>
                    <td> <?php echo $hotel['vote'] ?> </td>
                    <td> <?php echo $hotel['distance_to_center'] ?> </td>
                 </tr>
            <?php } ?>    
            
        </tbody>
    </table>        

</body>


</html>