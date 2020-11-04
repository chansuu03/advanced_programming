<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Christian Lazaro</h1>
    <form class="" action="index.php" method="post">
      <h3>Calculator</h3>
      <p>Input first number:</p>
      <input type="number" name="num1" value="">
      <p>Input second number:</p>
      <input type="number" name="num2" value="">
      <br>
      <br>
      <input type="submit" name="add" value="+">
      <input type="submit" name="min" value="-">
      <input type="submit" name="mul" value="*">
      <input type="submit" name="div" value="/">
      <br>
      <p id="answer">
        <?php
          if(isset($_POST['add']))
          {
            if (!empty($_POST['num1']) && !empty($_POST['num2']))
            {
              $num1 = $_POST['num1'];
              $num2 = $_POST['num2'];
              $add = $num1 + $num2;
              echo $num1 . " + " . $num2 . " = " . $add;
            }
            elseif(empty($_POST['num2']) && empty($_POST['num1']))
            {
              echo "no data inputted please try again";
            }
            elseif (empty($_POST['num2']))
            {
              echo "no data in 2nd number";
            }
            elseif (empty($_POST['num1']))
            {
              echo "no data in 1st number";
            }
          }
          elseif(isset($_POST['min']))
          {
            if (!empty($_POST['num1']) && !empty($_POST['num2']))
            {
              $num1 = $_POST['num1'];
              $num2 = $_POST['num2'];
              $add = $num1 - $num2;
              echo $num1 . " - " . $num2 . " = " . $add;
            }
            elseif(empty($_POST['num2']) && empty($_POST['num1']))
            {
              echo "no data inputted please try again";
            }
            elseif (empty($_POST['num2']))
            {
              echo "no data in 2nd number";
            }
            elseif (empty($_POST['num1']))
            {
              echo "no data in 1st number";
            }
          }
          elseif(isset($_POST['mul']))
          {
            if (!empty($_POST['num1']) && !empty($_POST['num2']))
            {
              $num1 = $_POST['num1'];
              $num2 = $_POST['num2'];
              $add = $num1 * $num2;
              echo $num1 . " * " . $num2 . " = " . $add;
            }
            elseif(empty($_POST['num2']) && empty($_POST['num1']))
            {
              echo "no data inputted please try again";
            }
            elseif (empty($_POST['num2']))
            {
              echo "no data in 2nd number";
            }
            elseif (empty($_POST['num1']))
            {
              echo "no data in 1st number";
            }
          }
          elseif(isset($_POST['div']))
          {
            if (!empty($_POST['num1']) && !empty($_POST['num2']))
            {
              $num1 = $_POST['num1'];
              $num2 = $_POST['num2'];
              $add = $num1 / $num2;
              echo $num1 . " / " . $num2 . " = " . $add;
            }
            elseif(empty($_POST['num2']) && empty($_POST['num1']))
            {
              echo "no data inputted please try again";
            }
            elseif (empty($_POST['num2']))
            {
              echo "no data in 2nd number";
            }
            elseif (empty($_POST['num1']))
            {
              echo "no data in 1st number";
            }
          }
        ?>
      </p>
    </form>

    <form class="" action="index.php" method="post">
      <h3>GCD</h3>
      <p>Input first number:</p>
      <input type="number" name="num1" value="">
      <p>Input second number:</p>
      <input type="number" name="num2" value="">
      <br>
      <br>
      <input type="submit" name="gcd" value="Submit">
    </form>

    <?php

    if(isset($_POST['gcd']))
    {
      if (!empty($_POST['num1']) && !empty($_POST['num2']))
      {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num1 > $num2)
        {
          $temp = $num1;
          $num1 = $num2;
          $num2 = $temp;
        }
        for($i = 1; $i < ($num1+1); $i++)
        {
          if ($num1%$i == 0 and $num2%$i == 0)
            $gcd = $i;
        }
        echo "GCD of $num1 and $num2 is: $gcd";
      }
      elseif(empty($_POST['num2']) && empty($_POST['num1']))
      {
        echo "no data inputted please try again";
      }
      elseif (empty($_POST['num2']))
      {
        echo "no data in 2nd number";
      }
      elseif (empty($_POST['num1']))
      {
        echo "no data in 1st number";
      }
    }
    ?>
  </body>
</html>
