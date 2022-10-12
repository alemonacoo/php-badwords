<?php
    $text = 'la bella lavanderina lava i fazzoletti per i poveretti';
    echo 'PHRASE: ' . $text;
?>

<div>
<?= 'PHRASE LENGTH: ' . strlen($text)?>
</div>

<?php
    $toCensor = $_GET['censor'];
    echo 'WORD TO CENSOR: ' . $toCensor;
    $text = str_replace($toCensor, '***', $text);
    echo '<div>' . 'NEW PHRASE: ' . $text . '</div>';
?>



