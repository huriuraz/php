<?php
/**
 * Created by PhpStorm.
 * User: Huri
 * Date: 20.7.2016
 * Time: 13:35
 */

require_once 'config.php';
require_once 'function.php';

print getHead("giris yap");


?>

<h1>giriş yap<h1>
        <p>
            <?php
            if(isset($_POST['submit']))
            {

                $password=$_POST['pass'];
                $email=$_POST['email'];
                $uyeler=mysqli_query($conn,"SELECT * FROM uyeler WHERE email='$email' AND password='$password' ");
                $sonuc=mysqli_num_rows($uyeler);
                if($sonuc>0)
                {
                    echo "kullanıcı kayitli";

                    $user=$_SESSION['user']=$email;

                    header("location: index2.php");


                }
            }
            /*else
            echo "giris yapilamadi";*/
            ?>
        <form action="" method="post">
            <table>

                <td align="right">email::</td><td><input type="email" name="eposta" required="required" placeholder="email giriniz"></td>
                </tr>

                <tr>
                    <td align="right">sifre:</td><td><input type="password" name="pass" placeholder="şifre giriniz<"></td>
                </tr>

                <td align="right"><input type="submit" name="gonder" value="Gönder"></td>

                </tr>
            </table>
        </form>
        <p>
