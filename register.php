<?php
/**
 * Created by PhpStorm.
 * User: Huri
 * Date: 20.7.2016
 * Time: 13:35
 */

/**
 * Created by PhpStorm.
 * User: Murat Saygılı
 * Date: 19.7.2016
 * Time: 10:12
 */

require_once 'function.php';
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<!-- HEAD START -->
<?php

print getHead("Kayıt Ol");

?>
<!-- HEAD END -->
<body>

<h1>Kayıt Ol</h1>
<p>
    <?php

    if(isset($_POST['submit'])){ // submit butonuna tıklandı mı diye kontrol eder

        $ad=$_POST['ad'];
        $soyad=$_POST['soyad'];
        $password=$_POST['pass'];
        $email=$_POST['eposta'];

        $result=mysqli_query($conn,"INSERT INTO uyeler (ad,soyad,email,password) VALUES ('$ad','$soyad','$email','$password')");

        if($result){
            echo "{$ad} {$soyad} adlı kullanıcı başarıyla kaydedildi !";
        }
        else{
            echo "kayıt başarısız!!".mysqli_error($conn);
        }


    }else
        echo "gönderilmedi";

    ?>
</p>

<form action="" method="post">
    <p>Email</p><input type="email" name="eposta" required="required" placeholder="E-mail giriniz">
    <p>Ad</p><input type="ad" name="ad" required="required" placeholder="Ad giriniz">
    <p>Soyad</p><input type="soyad" name="soyad" required="required" placeholder="Soyad giriniz">
    <p>Şifre</p><input type="password" name="pass" required="required" placeholder="Şifre giriniz">

    <input type="submit" name="submit" value="Gönder">
</form>





</body>
</html>

