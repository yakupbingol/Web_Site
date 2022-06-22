<!doctype html>
<html>

<head>
      <meta charset="UTF-8">

      <title> ANA SAYFA - KAN BAĞIŞI HAYAT KURTARIR</title>
      <link rel="icon" href="favicon.ico" />

      <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
      <link href="anasayfa.css" rel="stylesheet">
</head>

<body>
      

      <div id="sayfa">
            <div id="ust">
                  <div class="ust-sag">
                        <img src ="kızılay.jpeg" width="120" height="120">
            
                  </div>

                  <a id="baslik" href="anasayfa.php">
                        <h1>KAN BAĞIŞI HAYAT KURTARIR</h1>


                  </a>
                  <div class="temizle"></div>
                  <ul id="menu">

                        <li><a href="sayfahakkında.php"><i class="fas fa-info-circle"></i>Sayfa Hakkında</a></li>
                        <li><a href="anasayfa.php"><i class="fas fa-home"></i>Anasayfa</a></li>
                        <li><a href="guncel.php"><i class="fas fa-bullhorn"></i></i>Güncel</a></li>
                        <li><a href="mailto:yakup8463@gmail.com"><i class="fas fa-id-card-alt"></i>Bize Ulaşın</a></li>
                  </ul>
            </div>
            <div id="orta-sol">
                  <h3>


                        <form class="" action="baglanti.php" method="post">

                              <h2>Ad / Soyad : </h2>
                              <input type="text" name="name" placeholder="Ad ve soyadınızı giriniz :" value="" required>

                              <br><br>
                              <h2> İletişim Bilgileri :</h2>
                              <input type="text" name="contact" placeholder="Telefon numaranızı giriniz :" value="" maxlength="10" minlength="10" required>

                              <br><br>
                              <h2>Hastane Adı :</h2>
                              <select name="hospital" required>
                                    <option>Bartın Devlet Hastanesi</option>
                                    <option>Bartın Kadın Doğum ve Çocuk Hastanesi</option>
                                    <option>Bartın Göğüs Hastanesi</option>
                                    <option>Özel Ak Tıp Merkezi </option>
                                    <option>Özel Bartın Yaşam Tıp Merkezi</option>                                    
                                    <option>Özel Gözde Tıp Merkezi </option>
                                    <option selected>Hastane Seçiniz</option>
                              </select>
                              

                              <br><br>
                              <h2>Mesaj :</h2>
                              <textarea name="comment" rows="5" cols="50" placeholder=" İletmek istediğiniz mesajı giriniz : "></textarea>
                             
                              <h2>Kan Grubu : </h2>

					<select name="blood" required> 
						 <option>0 RH -</option>
						 <option>0 RH +</option>
						 <option>A RH -</option>
						 <option>A RH +</option>
						 <option>B RH -</option>
						 <option>B RH +</option>
						 <option>AB RH -</option>
						 <option>AB RH +</option>
						 <option selected>Kan Grubu Seçiniz</option>
					</select></td>

                              <br><br>
                              <h2>Cinsiyet :</h2>
                              <input type="radio" name="gender" value="Erkek">Erkek
                              <input type="radio" name="gender" value="Kadın">Kadın
                              <input type="radio" name="gender" value="Diğer">Diğer
                              <br><br>

                              <input type="submit" class="btn" name="gonder" value="YAYINLAYINIZ">


            </div>
            </form>


            <div class="temizle"></div>
            <div id="alt">
                  <p>www.kanbagisi.com</p>

</body>

</html>