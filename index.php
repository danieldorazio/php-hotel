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

$parkingSelect = $_GET['parkingSelect'];
?>


<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>PHP Hotel</title>


    </head>

    <body>
        <form action="index.php" method="GET">
            <fieldset>
                <div class="mb-3">
                    <label for="parkingSelect" class="form-label">parking select menu</label>
                    <select id="parkingSelect" name="parkingSelect" class="form-select">
                        <option value="all">Disabled select</option>
                        <option value=1>available</option>
                        <option value=0>not available</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>




        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php foreach ($hotels[0] as $key => $hotel) { ?>
                        <th scope="col"><?php echo $key ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $key => $hotel) { ?>
                    <tr class="<?php
                                if ($parkingSelect == 'all') {
                                    echo 'd-table-row';
                                } elseif ($hotel['parking'] == $parkingSelect) {
                                    echo 'd-table-row';
                                } else {
                                    echo 'd-none';
                                };
                                ?>">
                        <th scope="row"><?php echo $key ?></th>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td><?php echo $hotel['parking'] ? 'available' : 'not available'; ?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel['distance_to_center']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </body>

    </html>