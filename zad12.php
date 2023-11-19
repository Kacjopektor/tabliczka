<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        #b {
            color: white;
            background-color: black;
        }
    </style>
<table border=1>
    <?php
    $m;
    $max = 15;
    for($i=0;$i<=$max;$i++)
    {
        echo "<tr>";
        for($j=0;$j<=$max;$j++)
        {
            if($i==0 && $j==0)
            {
                echo "<th id='b'></th>";
            }
            else if($i==0)
            {
                echo "<th id='b'>$j</th>";
            }
            else if($j==0)
            {
                echo "<th id='b'>$i</th>";
            }
            else
            {
                $m=$i*$j;
                echo "<th>$m</th>";
            }
        }
    }
    ?>
    </table>
</body>
</html>