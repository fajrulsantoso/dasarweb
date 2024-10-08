<?php 
   // Cek apakah form sudah disubmit
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST['email'];
      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
         // Lanjutkan dengan pengolahan email yang aman
         echo "Email yang dimasukkan: $email";
      } else {
         // Tangani input yang tidak valid
         echo "Email tidak valid";
      }
   }
?>

<html>
   <body>
      <h2>Form Input Email PHP</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
         <label for="email">Email:</label>
         <input type="email" name="email" id="email"><br><br>
         <input type="submit" name="submit" value="Submit">
      </form>
   </body>
</html>