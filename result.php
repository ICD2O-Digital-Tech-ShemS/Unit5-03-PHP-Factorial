<?php
    $result = 1;
    $counter = 1;

    $userNum = $_POST['userNumber'];
    if (!ctype_digit($userNum)) {
    echo "Invalid input. ";
    exit;
}

    do {
        $result = $result * $counter;
        $counter++;
    } while ($counter <= $userNum);

?>
    <?php echo $userNum . "!" . " = " . $result ?>