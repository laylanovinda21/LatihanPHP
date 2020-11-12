<?php
    $akun = [["username" => "Novinda Layla R", "password" => "dhaniayla"]];
    if (isset($_POST["submit"])) {
        $cekemail = FALSE;
        foreach ($akun as $account) {
            if ($account["username"] == $_POST["username"]) {
                if ($account["password"] == $_POST['password']) {
                    echo 'Login berhasil!<br><br>';
                } else {
                    echo 'Password salah<br><br>';
                }
                $cekemail = TRUE;
            break;
            }
        }
        if ($cekemail === FALSE) {
            echo 'Username salah<br><br>';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <fieldset>
        <label>L O G I N</label>
            <form method="POST" action="">
                <p>Nama     : <input type = "text" name = "username"></p>
                <p>Password : <input type = "password" name = "password"></p>
                <p><input type = "submit" value = "Login" name = "submit"></p>
                </form>
    </fieldset>
</body>
</html>