<?php

# Memulakan fungsi session
session_start();

# memanggil fail header.php
include('header.php');
?>

<!-- Tajuk antaramuka log masuk staff -->
<h3>Login staff</h3>

<!-- borang daftar masuk (log in/sign in) staff-->
<form action='staff-login-proses.php' method='POST'>
  
    Nokp staff      <input type='text'      name='nokp'style="width:30%"><br>
    Katalaluan      <input type='password'  name='katalaluan'style="width:30%"><br>
                    <input type='submit'    value='Login'style="width:7%">
</form>
<?php include ('footer.php'); ?>