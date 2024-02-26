<!DOCTYPE html>
<html lang="en">
<?php
$a = $_REQUEST['aValue'];
$b = $_REQUEST['bValue'];
$cal = $_REQUEST['caculate'];
include('process.php');
$p = new caculate();
$result;
if (isset($a) && isset($b)) {
        if ($cal == '+')
                $result = $p->sum($a, $b);
        if ($cal == '-')
                $result = $p->minus($a, $b);
        if ($cal == '*')
                $result = $p->add($a, $b);
        if ($cal == '/')
                $result = $p->divide($a, $b);
}
?>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                div {
                        margin-top: 20px;
                        text-align: center;
                }

                .userInput {
                        border: 1px solid black;
                        padding: 10px;
                }
        </style>
</head>


<body>
        <div>
                <form method="get">
                        <span class="userInput">
                                <label for="">a= </label>
                                <input type="number" name="aValue" value="<?php echo $a; ?>">
                        </span>
                        <span class="userInput">
                                <label for="">b= </label>
                                <input type="number" name="bValue" value="<?php echo $b; ?>">
                        </span>
                        <span class="userInput">
                                <input type="submit" name="caculate" value="+">
                                <input type="submit" name="caculate" value="-">
                                <input type="submit" name="caculate" value="*">
                                <input type="submit" name="caculate" value="/">
                        </span>
                        <div>
                                Kết quả: <?php echo $result; ?>
                        </div>
                </form>
        </div>
</body>

</html>