<?php
include "conn.php";

$email = $_POST["email"];
$phoneNo = $_POST["phoneNo"];
$nama = $_POST["nama"];
$noIc = $_POST["noIc"];
$currYear = date("Y");

if(empty($email) || empty($phoneNo))
  echo "{\"daftar\":[{\"code\":2, \"message\":\"error\"}]}";
else {
  // json response
  $jsonResponse = array();
  $jsonResponse["daftar"] = array();

  $sqlDaftarID = "SELECT Auto_increment AS next_id FROM information_schema.tables WHERE table_name='daftar'";
  $queryDaftarID = mysqli_query($conn, $sqlDaftarID) or die(mysql_error());

  if(mysqli_num_rows($queryDaftarID) > 0) {
    $data = mysqli_fetch_assoc($queryDaftarID);
    $uid = date("y-") . sprintf("%07d", $data["next_id"]);

    $daftarDate = date("Y-m-d");
    $sqlDaftar = "INSERT INTO daftar(daftarUID, daftarDate, daftarEmail, daftarPhoneNo, daftarNama, daftarNoIc) VALUES('$uid', '$daftarDate', '$email', '$phoneNo', '$nama', '$noIc')";
    $queryDaftar = mysqli_query($conn, $sqlDaftar);

    if($queryDaftar) {
      $sqlGetCurrData = "SELECT * FROM daftar ORDER BY daftarID DESC LIMIT 1";
      $queryGetCurrData = mysqli_query($conn, $sqlGetCurrData);

      if($queryGetCurrData) {
        while($data = mysqli_fetch_assoc($queryGetCurrData)) {
          $result = array(
            "code" => 0,
            "message" => "Successful",
            "daftarUID" => $data["daftarUID"],
            "daftarDate" => $data["daftarDate"],
            "daftarEmail" => $data["daftarEmail"],
            "daftarPhoneNo" => $data["daftarPhoneNo"],
            "daftarNama" => $data["daftarNama"],
            "daftarNoIc" => $data["daftarNoIc"]
          );
        }
      }
    } else
      $result = array(
        "code" => 2,
        "message" => "error"
      );
  }

  array_push($jsonResponse["daftar"], $result);
  echo json_encode($jsonResponse);
}

mysqli_close($conn);
?>
