<?php

$y1 = true;
$y2 = false;
$y3 = 1;
$y4 = 1;
$y5 = -1;
$y6 = "1";
$y7 = null;
$y8 = "php";

$x1 = true;
$x2 = false;
$x3 = 1;
$x4 = 0;
$x5 = -1;
$x6 = "1";
$x7 = null;
$x8 = "php";

$result1 = $y1 == $x1;
$result2 = $y1 == $x2;
$result3 = $y1 == $x3;
$result4 = $y1 == $x4;
$result5 = $y1 == $x5;
$result6 = $y1 == $x6;
$result7 = $y1 == $x7;
$result8 = $y1 == $x8;

$result9 = $y2 == $x1;
$result10 = $y2 == $x2;
$result11 = $y2 == $x3;
$result12 = $y2 == $x4;
$result13 = $y2 == $x5;
$result14 = $y2 == $x6;
$result15 = $y2 == $x7;
$result16 = $y2 == $x8;

$result17 = $y3 == $x1;
$result18 = $y3 == $x2;
$result19 = $y3 == $x3;
$result20 = $y3 == $x4;
$result21 = $y3 == $x5;
$result22 = $y3 == $x6;
$result23 = $y3 == $x7;
$result24 = $y3 == $x8;

$result25 = $y4 == $x1;
$result26 = $y4 == $x2;
$result27 = $y4 == $x3;
$result28 = $y4 == $x4;
$result29 = $y4 == $x5;
$result30 = $y4 == $x6;
$result31 = $y4 == $x7;
$result32 = $y4 == $x8;

$result33 = $y5 == $x1;
$result34 = $y5 == $x2;
$result35 = $y5 == $x3;
$result36 = $y5 == $x4;
$result37 = $y5 == $x5;
$result38 = $y5 == $x6;
$result39 = $y5 == $x7;
$result40 = $y5 == $x8;

$result41 = $y6 == $x1;
$result42 = $y6 == $x2;
$result43 = $y6 == $x3;
$result44 = $y6 == $x4;
$result45 = $y6 == $x5;
$result46 = $y6 == $x6;
$result47 = $y6 == $x7;
$result48 = $y6 == $x8;

$result49 = $y7 == $x1;
$result50 = $y7 == $x2;
$result51 = $y7 == $x3;
$result52 = $y7 == $x4;
$result53 = $y7 == $x5;
$result54 = $y7 == $x6;
$result55 = $y7 == $x7;
$result56 = $y7 == $x8;

$result57 = $y8 == $x1;
$result58 = $y8 == $x2;
$result59 = $y8 == $x3;
$result60 = $y8 == $x4;
$result61 = $y8 == $x5;
$result62 = $y8 == $x6;
$result63 = $y8 == $x7;
$result64 = $y8 == $x8;

?>

<html>
<head>
    <title>lesson2</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
    <div class="container">
        <table class="my-table">
        <tbody>
		<tr>
			<td></td>
			<td>true</td>
			<td>false</td>
			<td>1</td>
			<td>0</td>
			<td>-1</td>
			<td>"1"</td>
			<td>null</td>
			<td>"php"</td>
		</tr>
		<tr>
		  <td>true</td>
		  <td><?php echo var_export($result1, true); ?></td>
		  <td><?php echo var_export($result2, true); ?></td>
		  <td><?php echo var_export($result3, true); ?></td>
		  <td><?php echo var_export($result4, true); ?></td>
		  <td><?php echo var_export($result5, true); ?></td>
		  <td><?php echo var_export($result6, true); ?></td>
		  <td><?php echo var_export($result7, true); ?></td>
		  <td><?php echo var_export($result8, true); ?></td>
		</tr>
		<tr>
		  <td>false</td>
		  <td><?php echo var_export($result9, true); ?></td>
		  <td><?php echo var_export($result10, true); ?></td>
		  <td><?php echo var_export($result11, true); ?></td>
		  <td><?php echo var_export($result12, true); ?></td>
		  <td><?php echo var_export($result13, true); ?></td>
		  <td><?php echo var_export($result14, true); ?></td>
		  <td><?php echo var_export($result15, true); ?></td>
		  <td><?php echo var_export($result16, true); ?></td>
		</tr>
		<tr>
		  <td>1</td>
		  <td><?php echo var_export($result17, true); ?></td>
		  <td><?php echo var_export($result18, true); ?></td>
		  <td><?php echo var_export($result19, true); ?></td>
		  <td><?php echo var_export($result20, true); ?></td>
		  <td><?php echo var_export($result21, true); ?></td>
		  <td><?php echo var_export($result22, true); ?></td>
		  <td><?php echo var_export($result23, true); ?></td>
		  <td><?php echo var_export($result24, true); ?></td>
		</tr>
		<tr>
		  <td>0</td>
		  <td><?php echo var_export($result25, true); ?></td>
		  <td><?php echo var_export($result26, true); ?></td>
		  <td><?php echo var_export($result27, true); ?></td>
		  <td><?php echo var_export($result28, true); ?></td>
		  <td><?php echo var_export($result29, true); ?></td>
		  <td><?php echo var_export($result30, true); ?></td>
		  <td><?php echo var_export($result31, true); ?></td>
		  <td><?php echo var_export($result32, true); ?></td>
		</tr>
		<tr>
		  <td>-1</td>
		  <td><?php echo var_export($result33, true); ?></td>
		  <td><?php echo var_export($result34, true); ?></td>
		  <td><?php echo var_export($result35, true); ?></td>
		  <td><?php echo var_export($result36, true); ?></td>
		  <td><?php echo var_export($result37, true); ?></td>
		  <td><?php echo var_export($result38, true); ?></td>
		  <td><?php echo var_export($result39, true); ?></td>
		  <td><?php echo var_export($result40, true); ?></td>
		</tr>
		<tr>
		  <td>"1"</td>
		  <td><?php echo var_export($result41, true); ?></td>
		  <td><?php echo var_export($result42, true); ?></td>
		  <td><?php echo var_export($result43, true); ?></td>
		  <td><?php echo var_export($result44, true); ?></td>
		  <td><?php echo var_export($result45, true); ?></td>
		  <td><?php echo var_export($result46, true); ?></td>
		  <td><?php echo var_export($result47, true); ?></td>
		  <td><?php echo var_export($result48, true); ?></td>
		</tr>
		<tr>
		  <td>null</td>
		  <td><?php echo var_export($result49, true); ?></td>
		  <td><?php echo var_export($result50, true); ?></td>
		  <td><?php echo var_export($result51, true); ?></td>
		  <td><?php echo var_export($result52, true); ?></td>
		  <td><?php echo var_export($result53, true); ?></td>
		  <td><?php echo var_export($result54, true); ?></td>
		  <td><?php echo var_export($result55, true); ?></td>
		  <td><?php echo var_export($result56, true); ?></td>
		</tr>
		<tr>
		  <td>"php"</td>
		  <td><?php echo var_export($result57, true); ?></td>
		  <td><?php echo var_export($result58, true); ?></td>
		  <td><?php echo var_export($result59, true); ?></td>
		  <td><?php echo var_export($result60, true); ?></td>
		  <td><?php echo var_export($result61, true); ?></td>
		  <td><?php echo var_export($result62, true); ?></td>
		  <td><?php echo var_export($result63, true); ?></td>
		  <td><?php echo var_export($result64, true); ?></td>
		</tr>
		</tbody>
      </table>
    </div>
</body>
</html>

