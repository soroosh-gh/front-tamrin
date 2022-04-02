<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/style.css">
    <script src="https://kit.fontawesome.com/fb07f5d177.js" crossorigin="anonymous"></script>
    <title>Edit yout info</title>
</head>
<body>
    <form action="edit.php" method="post">
        <div class="main">
        <h1>تغییر اطلاعات</h1>
        <label for="name">نام و نام خانوادگی</label>
        <br>
            <input type="text" id="name" name="name" value = "<?php if(isset($row['name']) ) echo $row['name'];?>">
        <br>
           <label for="username">نام کاربری</label>
        <br>
          <input id="username" name="username" value = "<?php if(isset($row['username']) ) echo $row['username'];?>" >
        <br>
            <label for="password">کلمه عبور</label>
        <br>
            <input type="password" id="password" name="password" value = "<?php if(isset($row['password']) ) echo $row['password'];?>">
        <br>
            <label for="idcode">کد ملی</label>
        <br>
            <input type="text" id="idcode" name="idcode" value = "<?php if(isset($row['idcode']) ) echo $row['idcode'];?>">
        <br>   <br>
            <button  class = "btn primary" type="submit">تایید</button>
        <br>
            <button class = "btn"  type="reset">لغو</button>
        
        </div>
    </form>
</body>
</html>