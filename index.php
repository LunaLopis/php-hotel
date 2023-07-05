<?php
include __DIR__.'/partials/vars.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">distanza dal centro</th>
            </tr>
        </thead>
            <tbody>
               <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                    <td><?php echo $hotel['name'];?></td>
                    <td><?php echo $hotel['description'];?></td>
                    <td><?php echo $hotel['parking']? 'si': 'no';?></td>
                    <td><?php echo $hotel['vote'];?></td>
                    <td><?php echo $hotel['distance_to_center'];?></td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>




    </div>
</body>
</html>