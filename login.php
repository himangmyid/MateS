<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Masuk</title>
      <link rel="stylesheet" type="text/css" href="css/log-style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

      <div class="content">
         <div class="text">
            Masuk
         </div>
         <form action="" method="POST">
            <div class="field">
               <input type="text" name="user" required>
               <span class="fas fa-user"></span>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" name="pass" required>
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <button type="submit" name="submit">Masuk</button>
         </form>
         <?php
         if(isset($_POST['submit'])){
            session_start();
            include 'db.php';

            $user = mysqli_real_escape_string($conn, $_POST['user']);
            $pass = mysqli_real_escape_string($conn, $_POST['pass']);

            $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."' ");
            if(mysqli_num_rows($cek) > 0){
               $d = mysqli_fetch_object($cek);
               $_SESSION['status_login'] = true;
               $_SESSION['a_global'] = $d;
               $_SESSION['id'] = $d->id_admin;
               echo '<script>window.location="dashboard.php"</script>';
            }else{
               echo '<script>alert("Username atau Password Yang Dimasukan Salah")</script>';
            }

         }
         ?>
</body>
</html>