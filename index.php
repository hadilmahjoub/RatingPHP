<?php 
    $po = isset($_POST["rate"]);
    $cook = isset($_COOKIE["rate"]);

    if ($po) {
        if (!$cook) {
            setcookie('rate',$_POST["rate"], time()+120);
?>
        <div class="accept"><?= "Evaluation bien reçu!" ?></div>
<?php 
    } else {
?>
        <div class="reject">
            <?= "Désolé vous avez déjà évalué! C'est le contenu de votre réponse:".$_COOKIE["rate"] ?>
            <!-- <?php print_r($_COOKIE)?> -->
        </div>
<?php 
        }
        
    }
?>



    
