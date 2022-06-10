<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Admin | Login</title>
      <link rel="stylesheet" href="../css/style_admin_login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Admin Login
         </div>
         <form action="process_login.php" method="post">
            <div class="field">
               <input type="text" name="email">
               <label>Email</label>
            </div>
            <div class="field">
               <input type="password" name="password">
               <label>Mật khẩu</label>
            </div>
            <div class="field">
               <input type="submit" value="Đăng nhập">
            </div>
         </form>
      </div>
   </body>
</html>