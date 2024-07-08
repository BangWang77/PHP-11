<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица истинности</title>
</head>
<body>
    <h1>
        <p>
            Таблица гибкого сравнения
        </p>
        <table border='10', >
        <tr id = 'title'>
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
    <tr >
      <td class = "title">
        true
      </td>
      <td><?php
      $a = true;
      $b = true;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = false;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = 1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = 0;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = -1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = "1";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = true;
      $b = null;
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = true;
      $b = "php";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
    </tr>
    <tr>
      <td>
        false
      </td>
      <td><?php
      $a = false;
      $b = true;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = false;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = 1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = 0;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = -1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = "1";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = false;
      $b = null;
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = false;
      $b = "php";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
</tr>
    <tr>
      <td>
        1
      </td>
      <td><?php
      $a = 1;
      $b = true;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = false;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = 1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = 0;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = -1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = "1";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = 1;
      $b = null;
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = 1;
      $b = "php";
      echo ($a == $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        0
      </td>
      <td><?php
      $a = 0;
      $b = true;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = false;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = 1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = 0;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = -1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = "1";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = 0;
      $b = null;
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = 0;
      $b = "php";
      echo ($a == $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        -1
      </td>
      <td><?php
      $a = -1;
      $b = true;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = false;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = 1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = 0;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = -1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = "1";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = -1;
      $b = null;
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = -1;
      $b = "php";
      echo ($a == $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        "1"
      </td>
      <td><?php
      $a = "1";
      $b = true;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = false;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = 1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = 0;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = -1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = "1";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = "1";
      $b = null;
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = "1";
      $b = "php";
      echo ($a == $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        null
      </td>
      <td><?php
      $a = null;
      $b = true;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = false;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = 1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = 0;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = -1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = "1";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = null;
      $b = null;
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = null;
      $b = "php";
      echo ($a == $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        "php"
      </td>
      <td><?php
      $a = "php";
      $b = true;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = false;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = 1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = 0;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = -1;
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = "1";
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = "php";
      $b = null;
      echo ($a == $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = "php";
      $b = "php";
      echo ($a == $b) ? 'true' : 'false';
      ?>

      </td>
    </tr>
        </table>
    </h1>
    

    <h1>
        <p>
            Таблица жёсткого сравнения
        </p>
        <table border='10'>
        <tr id = 'title'>
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
      <td id = 'title'>
        true
      </td>
      <td><?php
      $a = true;
      $b = true;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = false;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = 1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = 0;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = -1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = true;
      $b = "1";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = true;
      $b = null;
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = true;
      $b = "php";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
    </tr>
    <tr>
      <td id ='title'>
        false
      </td>
      <td><?php
      $a = false;
      $b = true;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = false;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = 1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = 0;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = -1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = false;
      $b = "1";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = false;
      $b = null;
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = false;
      $b = "php";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
</tr>
    <tr>
      <td>
        1
      </td>
      <td><?php
      $a = 1;
      $b = true;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = false;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = 1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = 0;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = -1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 1;
      $b = "1";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = 1;
      $b = null;
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = 1;
      $b = "php";
      echo ($a === $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        0
      </td>
      <td><?php
      $a = 0;
      $b = true;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = false;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = 1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = 0;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = -1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = 0;
      $b = "1";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = 0;
      $b = null;
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = 0;
      $b = "php";
      echo ($a === $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        -1
      </td>
      <td><?php
      $a = -1;
      $b = true;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = false;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = 1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = 0;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = -1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = -1;
      $b = "1";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = -1;
      $b = null;
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = -1;
      $b = "php";
      echo ($a === $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        "1"
      </td>
      <td><?php
      $a = "1";
      $b = true;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = false;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = 1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = 0;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = -1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "1";
      $b = "1";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = "1";
      $b = null;
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = "1";
      $b = "php";
      echo ($a === $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td>
        null
      </td>
      <td><?php
      $a = null;
      $b = true;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = false;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = 1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = 0;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = -1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = null;
      $b = "1";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = null;
      $b = null;
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = null;
      $b = "php";
      echo ($a === $b) ? 'true' : 'false';
      ?></td>
    </tr>
    <tr>
      <td id = 'title'>
        "php"
      </td>
      <td><?php
      $a = "php";
      $b = true;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = false;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = 1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = 0;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = -1;
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
      <td>
      <?php
      $a = "php";
      $b = "1";
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td><?php
      $a = "php";
      $b = null;
      echo ($a === $b) ? 'true' : 'false';
      ?>
      </td>
      <td>
      <?php
      $a = "php";
      $b = "php";
      echo ($a === $b) ? 'true' : 'false';
      ?>

      </td>
    </tr>
        </table>
    </h1>
    <link rel='stylesheet' href='style.css'>
</body>
</html>