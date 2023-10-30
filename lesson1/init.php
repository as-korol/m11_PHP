<?php

$a1 = 0;
$a2 = 0;
$a3 = 1;
$a4 = 1;
$b1 = 0;
$b2 = 1;
$b3 = 0;
$b4 = 1;

$resultDontA1 = !$a1; // Первая и вторая ячейки
$resultDontA3 = !$a3; // Третья и четвертая ячейки

$resultOrA1B1 = $a1 || $b1;
$resultOrA2B2 = $a2 || $b2;
$resultOrA3B3 = $a3 || $b3;
$resultOrA4B4 = $a4 || $b4;

$resultWorkingA1B1 = $a1 && $b1;
$resultWorkingA2B2 = $a2 && $b2;
$resultWorkingA3B3 = $a3 && $b3;
$resultWorkingA4B4 = $a4 && $b4;

$resultXorA1B1 = $a1 ^ $b1;
$resultXorA2B2 = $a2 ^ $b2;
$resultXorA3B3 = $a3 ^ $b3;
$resultXorA4B4 = $a4 ^ $b4;

?>

<html>
<head>
    <title>lesson1</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
    <div class="container">
        <table class="my-table">
            <tbody>
                <tr>
                    <td>A</td>
                    <td>B</td>
                    <td>!A</td>
                    <td>A || B</td>
                    <td>A && B</td>
                    <td>A xor B</td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><?php echo var_export($resultDontA1, true); ?></td>
                    <td><?php echo var_export($resultOrA1B1, true); ?></td>
                    <td><?php echo var_export($resultWorkingA1B1, true); ?></td>
                    <td><?php echo var_export($resultXorA1B1, true); ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><?php echo var_export($resultDontA1, true); ?></td>
                    <td><?php echo var_export($resultOrA2B2, true); ?></td>
                    <td><?php echo var_export($resultWorkingA2B2, true); ?></td>
                    <td><?php echo var_export($resultXorA1B1, true); ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><?php echo var_export($resultDontA3, true); ?></td>
                    <td><?php echo var_export($resultOrA3B3, true); ?></td>
                    <td><?php echo var_export($resultWorkingA3B3, true); ?></td>
                    <td><?php echo var_export($resultXorA1B1, true); ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><?php echo var_export($resultDontA3, true); ?></td>
                    <td><?php echo var_export($resultOrA4B4, true); ?></td>
                    <td><?php echo var_export($resultWorkingA4B4, true); ?></td>
                    <td><?php echo var_export($resultXorA1B1, true); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

