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
// var_dump($hotels);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <style>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <h1 class="text-center">Lista degli Hotel</h1>

    <table class="table bg-dark">
        <tbody>
            <tr>
                <th class="text-danger" scope="row">Name</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td class="bg-primary text-white"> <?php echo $hotel["name"] ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="text-danger" scope="row">Description</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td class="bg-info text-white"> <?php echo $hotel["description"] ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="text-danger" scope="row">Parking</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td class="bg-success text-white"> <?php echo $hotel["parking"] ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="text-danger" scope="row">Vote</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td class="bg-secondary text-white "> <?php echo $hotel["vote"] ?> <i class="fa-solid fa-star" style="color: #fbff00;"></i></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="text-danger" scope="row">Distance</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td class="bg-light text-dark "> <?php echo $hotel["distance_to_center"] ?> Km </td>
                <?php endforeach; ?>
            </tr>




        </tbody>
    </table>
</body>

</html>