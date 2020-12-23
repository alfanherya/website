<?php
include_once './database.php';

header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$nama_depan = '';
$nama_belakang = '';
$email = '';
$no_wa = '';
$password = '';
$conn = null;

$databaseService = new DatabaseService();
$conn = $databaseService->getConnection();

$data = json_decode(file_get_contents("php://input"));

$nama_depan = $data->nama_depan;
$nama_belakang = $data->nama_belakang;
$email = $data->email;
$no_wa = $data->no_wa;
$password = $data->password;


$table_name = 'tbl_login';

$query = "INSERT INTO " . $table_name . "
                SET nama_depan = :nama_depan,
                    nama_belakang = :nama_belakang,
                    email = :email,
                    no_wa = :no_wa,
                    password = :password";

$stmt = $conn->prepare($query);

$stmt->bindParam(':nama_depan', $nama_depan);
$stmt->bindParam(':nama_belakang', $nama_belakang);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':no_wa', $no_wa);

$password_hash = password_hash($password, PASSWORD_BCRYPT);

$stmt->bindParam(':password', $password_hash);


if($stmt->execute()){

    http_response_code(200);
    echo json_encode(array("message" => "User was successfully registered."));
}
else{
    http_response_code(400);

    echo json_encode(array("message" => "Unable to register the user."));
}
?>