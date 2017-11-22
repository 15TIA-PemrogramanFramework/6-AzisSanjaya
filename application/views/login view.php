<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url('assets2/') ?>css/style.css">

  
</head>

<body>
  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
    <div id="login">
      <form method="post" action="<?php echo site_url('login'); ?>">
        <span class="fontawesome-user"></span>
          <input type="text" name="Username" id="user" placeholder="Username">
       
        <span class="fontawesome-lock"></span>
          <input type="password" name="Password" id="pass" placeholder="Password">
        
        <input type="submit" value="Login">

</form>
  
  
</body>
</html>
