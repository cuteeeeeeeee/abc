<?php
# Memulakan fungsi session
session_start();

# memanggil fail header.php
include('header.php');
?>

<!-- Tajuk antaramuka log masuk pembeli -->
<h3>Login pembeli</h3>

<!-- borang daftar masuk (log in/sign in) pembeli-->
<form action='pembeli-login-proses.php' method='POST'>

Nokp staff      <input type='text'      name='nokp' style="width:30%"><br>
    Katalaluan      <input type='password'  name='katalaluan'style="width:30%"><br>
                    <input type='submit'    value='Login'style="width:7%">
</form>
<?php include ('footer.php'); ?>