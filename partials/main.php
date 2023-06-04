<?php

include_once __DIR__ . '/../database/db.php';

?>


<main>
    <div class="container d-flex justify-content-around mb-4">
        <?php foreach( $arrayGenres as $elem ) { ?>
        <div class="card text-center" style="width: 18rem;">
            <img src="<?php echo $elem->foto ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $elem->nome ?></h5>
                <p class="card-text"> <?php echo $elem-> tipologia ?></p>
                <span> <?php echo $elem-> prezzo ?></span>
            </div>
        </div>
        <?php } ?>
    </div>

</main>