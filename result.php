<?php
    $result = 1;
    $counter = 1;

    $userNum = $_POST['userNumber'];
    if (!ctype_digit($userNum)) {
    echo "Please enter a non-negative whole number without decimals.";
    exit;
}

    do {
        $result = $result * $counter;
        $counter++;
    } while ($counter <= $userNum);

?>
    <h4>Results:</h4>
    <?php echo $userNum . "!" . " = " . $result ?>