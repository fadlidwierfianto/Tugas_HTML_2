<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<h2> Post Test Mengenai Form HTML dan Form Handling PHP </h2>

<?php
$Nama=$NIM=$Prodi=$No_HP=$Alamat=$Email="";
$NamaErr=$NIMErr=$ProdiErr=$No_HPErr=$AlamatErr=$EmailErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST" 
  && isset($_POST["Nama"])
  && isset($_POST["NIM"])
  && isset($_POST["Prodi"])
  && isset($_POST["No_HP"]) 
  && isset($_POST["Alamat"])
  && isset($_POST["Email"]) ) {
    $Nama = $_POST ["Nama"];
    $NIM = $_POST ["NIM"];
    $Prodi = $_POST ["Prodi"];
    $No_HP = $_POST ["No_HP"];
    $alamat = $_POST ["Alamat"];
    $email = $_POST["Email"];
  }
?>

<?php
$Nama=$NIM=$Prodi=$No_HP=$Alamat=$Email="";
$NamaErr=$NIMErr=$ProdiErr=$No_HPErr=$AlamatErr=$EmailErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST"
  && isset($_POST["Nama"])
  && isset($_POST["NIM"])
  && isset($_POST["Prodi"])
  && isset($_POST["No_HP"]) 
  && isset($_POST["Alamat"])
  && isset($_POST["Email"]) ) {
    if (empty($_POST["Nama"])) {
        $NamaErr = "Nama anda masih kosong";
      } else {
        $Nama = Input($_POST["Nama"]);
    }
    if (empty($_POST["NIM"])) {
        $NIMErr = "NIM anda masih kosong";
    } else {
        $NIM = Input($_POST["NIM"]);
    }
    if (empty($_POST["Prodi"])) {
        $ProdiErr = "Prodi anda masih kosong";
    } else {
        $Prodi = Input($_POST["Prodi"]);
    }
    if (empty($_POST["No_HP"])) {
        $No_HPErr = "Nomer HP anda masih kosong";
    } else {
        $No_HP = Input($_POST["No_HP"]);
    }
    if (empty($_POST["Alamat"])) {
        $AlamatErr = "Alamat anda masih kosong";
    } else {
        $Alamat = Input($_POST["Alamat"]);
    }
    if (empty($_POST["Email"])) {
        $EmailErr = "Email anda masih kosong";
      } else {
        $Email = Input($_POST["Email"]);
    }

}
function Input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form action ="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method = "POST">
  Nama : <input type ="text" name="Nama"><span class="error">* <?php echo $NamaErr;?></span><br><br>
  NIM : <input type="text" name="NIM"><span class="error">* <?php echo $NIMErr;?></span><br><br>
  Prodi : <input type="text" name="Prodi"><span class="error">* <?php echo $ProdiErr;?></span><br><br>
  Nomer HP: <input type="text" name="No_HP"><span class="error">* <?php echo $No_HPErr?></span><br><br>
  Alamat : <input type = "text" name="Alamat"><span class="error">* <?php echo $AlamatErr;?></span><br><br>
  Email : <input type ="text" name="Email"><span class="error">* <?php echo $EmailErr;?></span><br><br>
<input type="submit">
</form>

<?php

    echo "Nama: ";
    echo $Nama;
    echo "<br>";
    echo "NIM: ";
    echo $NIM;
    echo "<br>";
    echo "Prodi: ";
    echo $Prodi;
    echo "<br>";
    echo "Nomer HP: ";
    echo $No_HP;
    echo "<br>";
    echo "Alamat: "; 
    echo $Alamat;
    echo "<br>";
    echo "Email: "; 
    echo $Email;
    echo "<br>";
?>


</body>
</html>