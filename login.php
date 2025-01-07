<?php 
function loginLogic() {
    $user = [
        [
            "username" => "admin",
            "password" => "admin123",
            "level" => "admin",
        ],
        [
            "username" => "user",
            "password" => "user123",    
            "level" => "user",
        ]
    ];
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userDetek = 0;
	$userLevel = 0;

    for ($input = 0; $input < count($user); $input++) {
        if ($user[$input]['username'] == $username && $user[$input]['password'] == $password) {
            $userDetek = 1;
			if($user[$input]['level'] == "admin"){
				$userLevel = 1;
			}
			else{
				$userLevel = 0;
			}
            break;
        }
    }

    if ($userDetek == 1 && $userLevel == 1) {
        // echo '<script>alert("Login berhasil sebagai admin!");</script>';
		header("location:index.php");

    }elseif($userDetek == 1 && $userLevel == 0){
		// echo '<script>alert("Login berhasil sebagai user!");</script>';
		header("location:index.php");
	}
	else {
        echo '<script>alert("Login gagal. Username atau password salah.");</script>';
    }
}

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    loginLogic();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    <div class="contact-form">
        <img alt="" class="avatar" src="./asset/pp.jpg">
        <h2>Silahkan Login</h2> <br><br>
        <form action="" method="post">
            <p>Username</p>
            <input placeholder="Enter Username" name="username" type="text">
            <p>Password</p>
            <input placeholder="Enter Password" name="password" type="password"> 
            <input type="submit" value="Masuk">
        </form>
    </div>
</body>
</html>
