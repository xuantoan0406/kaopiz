<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // define("NAME", "Dat");
  // echo "<br>";
  // echo NAME;
  // echo "<br>";
  // $name = "Dat";
  // $name = "Tuan";
  // $name = "Hoang";
  // echo $name . "<br>";
  // echo $name;
  // echo "<br>";
  // $age = 8;
  // $age = $age + 10;
  // echo $age;
  // $a = 1;
  // $b = "1";
  // if ($a !== $b)
  //   echo "um";
  // else echo "sai";
  // $age = array("peter" => "20", "ben" => "12");
  // foreach ($age as $x => $x_value) {
  //   echo "key =" . $x . ", value =" . $x_value;
  //   echo "<br";
  // }

  // $cars = array(
  //   array("volo", 22, 18),
  //   array("bwm", 12, 13),
  //   array("sala", 5, 2),
  // );
  // for ($row = 0; $row < 3; $row++) {
  //   echo "<p> <b> Row number $row </b> </p>";
  //   echo "<ul>";
  //   for ($col = 0; $col < 2; $col++); {
  //     echo "<li>" . $cars[$row][$col] . "<li>";
  //   };
  //   echo "<ul>";
  // }

  // $cars = array("ab", "Aa", "abc");
  // sort($cars);
  // print_r($cars);

  // $t = date("h");
  // if ($t < "10") {
  //   echo "good";
  // } elseif ($t < 20) {
  //   echo "bad";
  // } else echo "noooo";

  // $color = "red";
  // switch ($color) {

  //     // break;
  //   case "red":
  //     echo "red";
  //     // break;
  //   case "blue":
  //     echo "blue";
  //     break;
  //   default:
  //     echo "no color";
  // }
  //$i = 1;
  // while ($i < 5) {
  //   echo $i . "<br>";

  //   $i++;
  // do {
  //   echo "$i <br>";
  //   $i++;
  // } while ($i < 1);

  #b1
  //   $a = 5;
  //   if ($a % 2 == 0) echo "so chan";
  //   else echo "so le";
  //   echo "<br>";

  //   #b2
  //   $x = "1";
  //   $y = "6";
  //   $z = "0";

  //   $m = array($x, $y, $z);
  //   echo max($m);

  // $A=array(1,3,5,3,7,9,1,4,5,6)
  // setcookie("user", "hung", time() + 300);
  // echo $_COOKIE["user"];
  // echo "<hr>";


  // // echo $_SESSION["user"];
  // session_start();
  // $_SESSION["user"] = "xt";
  // echo var_dump($_SESSION);
  // session_destroy();
  // if (isset($_SESSION["name"])) {
  //   return view("");
  // }
  // if (isset($_post["submit"])) {
  //   $name = $_post["name"];
  //   $password = $_post["password"];
  //   if ($name == "xt" && $password == "1") {
  //     setcookie("name", $name, time() + 10);
  //     $_SESSION["name"] = $name;
  //     return view("home");
  //   }
  // }


  ?>
  <form action="home" method="post">
    @csrf
    <!-- nhap thu: <input name="name"><br> -->
    nhap so w : <input name="dien">
    <button type="submit" name="submit"> login</button>
  </form>

</body>

</html>