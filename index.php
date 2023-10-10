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

foreach ($hotels as $allhotel) {
    echo "$array";
}

// var_dump($allhotel);
var_dump($hotels);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>

<body>
    <h1> Hotel</h1>

    <h1>
        <?php foreach ($hotels as $hotel) : ?>
            <?php $hotel["name"] ?>
            <?php echo $hotel["name"] ?>
        <?php endforeach; ?>
    </h1>

    <h1>
        <?php foreach ($hotels as $hotel) : ?>
            <?php $hotel["description"] ?>
            <?php echo $hotel["description"] ?>
        <?php endforeach; ?>
    </h1>

    <h1>
        <?php foreach ($hotels as $hotel) : ?>
            <?php $hotel["parking"] ?>
            <?php echo $hotel["parking"] ?>
        <?php endforeach; ?>
    </h1>
    <h1>
        <?php foreach ($hotels as $hotel) : ?>
            <?php $hotel["vote"] ?>
            <?php echo $hotel["vote"] ?>
        <?php endforeach; ?>
    </h1>
    <h1>
        <?php foreach ($hotels as $hotel) : ?>
            <?php $hotel["distance_to_center"] ?>
            <?php echo $hotel["distance_to_center"] ?>
        <?php endforeach; ?>
    </h1>






</body>

</html>