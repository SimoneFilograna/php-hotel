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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h1 class="display-1 text-center">Hotel</h1>

        <form action="index.php" method="GET">

            <label for="parking" class="mb-2"> 
                <h2>Parking</h2> 
            </label>

            <select name="parking" class="form-select" id="parking">
                <option value="null" selected></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <label for="vote" class="mb-2"> 
                <h2>Vote</h2> 
            </label>

            <select name="vote" id="vote">
                <option value="null" hidden selected></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>


            <button type="submit" name="submit" class="btn btn-primary mt-3">Cerca</button>
        </form>
        
        
        <div class="cont-table mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance to Center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php   
                    foreach($hotels as $hotel){   
                        if( !$_GET ||$_GET["parking"] == $hotel["parking"]){ 
                
                    ?>
                    <tr>
                        <td><?php echo $hotel["name"] ?> </td>
                        <td><?php echo $hotel["description"] ?> </td>
                        <td><?php echo ($hotel["parking"] ? "Yes" : "No" ) ?> </td>
                        <td><?php echo $hotel["vote"] ?> </td>
                        <td><?php echo $hotel["distance_to_center"] . " Km" ?> </td>
                    </tr>


                        <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
</body>
</html>