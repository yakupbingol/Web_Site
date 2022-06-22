<!DOCTYPE html>
<html lang="tr">

<head>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
background-color: white;
  border: 1px solid #9F1C1E;
  padding: 8px;
}

#customers tr:nth-child(even){
    background-color: #f2f2f2;}
#customers tr:hover {
    background-color: #9F1C1E;}

#customers th {/* */
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: aqua;
  color: white;
}
</style>
    <meta charset="UTF-8">

    <title>GÜNCEL-KAN VER HUZULUR YAŞA</title>
    <link rel="icon" href="favicon.ico" />
    <link href="guncel.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="sayfa">
        <div id="ust">
                    <div class="ust-sag">
                        <img src ="kızılay.jpeg" width="120" height="120">
            
                    </div>
            <a id="baslik" href="guncel.php">
                <h1>KAN VER HUZURLU YAŞA</h1>
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
            <table id="customers">
                <tr>
                    <th> Ad-Soyad </th>
                    <th> İletişim Bilgileri </th>
                    <th> Hastane Bilgileri </th>
                    <th> Mesaj </th>
                    <th> Cinsiyeti </th>
                    <th> Kan Grubu </th>


                </tr>
                <?php
                include("verialma.php");

                $verial = "SELECT * FROM users";

                $sonuc = $connect->query($verial);
                if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {

                        echo "<tr>
                        <td>".$cek['name']."</td>
                        <td>".$cek['contact']."</td>
                        <td>".$cek['hospital']."</td>
                        <td>".$cek['comment']."</td>
                        <td>".$cek['gender']."</td>
                        <td>".$cek['blood']."</td>
                      </tr>
                        
                        
                        ";
                    }
                }
else{
    echo "VERİTABANINDA VERİ BULUNAMAMIŞTIR...";

            }

?>

            </table>


        </div>

    </div>
    <div class="temizle"></div>
    <div id="alt">
        <p>www.kanbagisi.com</p>

</body>

</html>
