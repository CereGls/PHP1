<?php
$input;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['hide'] == "") {
        $input = $_POST['num1'] . $_POST['oper'];
    } else {
        $input = $_POST['hide'] . $_POST['num1'] . $_POST['oper'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <h1>Calcolatrice</h1>
    <hr>
    <h3>Inserisci i due numeri e seleziona l'operazione da svolgere</h3>
    
    <form action="index.php" method="post">
        <input type="number" name="num1" id="num1" value="<?php echo $_POST['num1']; ?>" required>
            <label for="showexp"><?php echo $input ?? ""; ?></label>
            <?php echo $_POST['num1']; ?>
        </input>
        <input type="text" name="hide" id="hide" value="<?php echo $input; ?>" hidden>
        <button type="submit" id="summ" name="oper" Value="+">+</button>
        <button type="submit" id="sottr" name="oper" value="-">-</button>
        <button type="submit" id="moltip" name="oper" value="*">*</button>
        <button type="submit" id="divi" name="oper" value="/">/</button>
        <input type="submit" value="=">
    </form>
</body>
</html>