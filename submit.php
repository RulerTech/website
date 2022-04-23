<?php


// $method = $_SERVER['REQUEST_METHOD'];
// if ($method == 'PUT') {
//     // parse_str(file_get_contents('php://input'), $_PUT);
//     print_r($_PUT); exit;  
//   }
    // echo "<pre>"; print_r($_POST); exit("jhdfkjdsjfk");
$name = isset($_POST['name'])? htmlspecialchars($_POST['name']) : '' ;
$emailPost = isset($_POST['email'])? htmlspecialchars($_POST['email']) : '' ;
$email = filter_var($emailPost, FILTER_SANITIZE_EMAIL);
$phone = isset($_POST['phone'])? htmlspecialchars($_POST['phone']) : '' ;
$message = "Thank You ".$name;
header('Location: http://127.0.0.1/Web_Resume/resume.php?message='.$message);


?>