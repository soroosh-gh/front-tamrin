<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/style.css">
    <script src="https://kit.fontawesome.com/fb07f5d177.js" crossorigin="anonymous"></script>
    <title>add a user</title>
</head>
<body>
    <form action="register.php" method="post">
   
        <div class="main">
            <h1>افزودن عضو</h1>
        <label for="name">نام و نام خانوادگی</label>
        <br>
            <input type="text" id="name" name="name">
        <br>
           <label for="username">نام کاربری</label>
        <br>
          <input id="username" name="username"></input>
        <br>
            <label for="password">کلمه عبور</label>
        <br>
            <input type="password" id="password" name="password">
        <br>
            <label for="idcode">کد ملی</label>
        <br>
            <input type="text" id="idcode" name="idcode">
        <br><br>
            <button class = "btn primary" type="submit">تایید</button>
        <br>
            <button  class = "btn" type="reset">لغو</button>
        
        </div>
    </form>
</body>
</html>