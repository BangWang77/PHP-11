<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица истинности</title>
</head>
<body>
    <h1>
        <table border='10'>
        <tr id = 'title'>
           <td>A</td>
           <td>B</td>
           <td>!A</td>
           <td>A||B</td>
           <td>A&&B</td>
           <td>A xor B</td>
    </tr>
    <tr>
           <td>
            <?php
              $a = 0;
              echo $a; ?></td>
           <td>
            <?php 
            $b = 0;
            echo $b;
            ?>
           </td>
           <td>
            <?php
             $a = 0;
             echo !$a;
             ?>
           </td>
           <td>
           <?php $a = 0; 
           $b = 0; 
           echo (int)($a || $b); 
            ?>
           </td>
           <td>
            <?php
            $a = 0;
            $b = 0;
            echo (int)($a && $b);
            ?>
           </td>
           <td><?php
           $a = 0;
           $b = 0;
           echo (int)($a xor $b);
           ?> 
           </td>
    </tr>
    <tr>
           <td>
            <?php
              $a = 0;
              echo $a; ?></td>
           <td>
            <?php 
            $b = 1;
            echo $b;
            ?>
           </td>
           <td>
            <?php
             $a = 0;
             echo !$a;
             ?>
           </td>
           <td>
            <?php
            $a = 0;
            $b = 1;
            echo (int)($a || $b);
            ?>
           </td>
           <td>
            <?php
            $a = 0;
            $b = 1;
            echo (int)($a && $b);
            ?>
           </td>
           <td><?php
           $a = 0;
           $b = 1;
           echo (int)($a xor $b);
           ?> 
           </td>
    </tr>      
    <tr>
           <td>
            <?php
              $a = 1;
              echo $a; ?></td>
           <td>
            <?php 
            $b = 0;
            echo $b;
            ?>
           </td>
           <td>
            <?php
             $a = 1;
             echo (int)(!$a);
             ?>
           </td>
           <td>
            <?php
            $a = 1;
            $b = 0;
            echo (int)($a || $b);
            ?>
           </td>
           <td>
            <?php
            $a = 1;
            $b = 0;
            echo (int)($a && $b);
            ?>
           </td>
           <td><?php
           $a = 1;
           $b = 0;
           echo (int)($a xor $b);
           ?> 
           </td>
    </tr>   
    <tr>
           <td>
            <?php
              $a = 1;
              echo $a; ?></td>
           <td>
            <?php 
            $b = 1;
            echo $b;
            ?>
           </td>
           <td>
            <?php
             $a = 1;
             echo (int)(!$a);
             ?>
           </td>
           <td>
            <?php
            $a = 1;
            $b = 1;
            echo (int)($a || $b);
            ?>
           </td>
           <td>
            <?php
            $a = 1;
            $b = 1;
            echo (int)($a && $b);
            ?>
           </td>
           <td><?php
           $a = 1;
           $b = 1;
           echo (int)($a xor $b);
           ?> 
           </td>
    </tr>               
        </table>
    </h1>
    <link rel='stylesheet' href='style.css'>
</body>
</html>