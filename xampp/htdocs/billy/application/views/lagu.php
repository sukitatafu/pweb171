<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>lagu anak</title>
    <link href="https://fonts.googleapis.com/css?family=Merienda|Short+Stack" rel="stylesheet">
    <link rel="stylesheet" href="cssa/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <h1 class ="judulutama">Koleksi Lagu Anak</h1>

    <div class="sidemenu">
      <ul class="menu">
        <li><a href="#"onclick="tampilLagu('pelangi')">Pelangi <span id="cpelangi"></span> </a></li>
        <li><a href="#"onclick="tampilLagu('balon')">Balonku <span id="cbalon"></span></a></li>
        <li><a href="#"onclick="tampilLagu('kereta')">Naik Kereta Api <span id="ckereta"></span></a></li>
        <li><a href="#"onclick="tampilLagu('cicak')">Cicak di dinding <span id="ccicak"></span></a></li>
        <li><a href="#"onclick="tampilLagu('kebun')">Kebunku <span id="ckebun"></span></a></li>
      </ul>
    </div>

    <div id="info">
      &lt;&lt; Klik menu untuk melihat lagu
    </div>

    <div class="content">
      <div class="bloklagu" id="pelangi">
        <div class="boxgambar">
          <img class="gambarlagu" src="img/pelangi.jpg">
        </div>

        <h1 class="judullagu">pelangi</h1>

        <p class="tekslagu">
          pelangi-pelangi <br>
          alangkah indahmu <br>
          merah , kuning ,hujau <br>
          dilangit yang biru <br>
          pelukismu agung <br>
          siapa gerangan <br>
          pelangi-pelangi <br>
          Ciptaan Tuhan <br>
        </p>

      </div>

      <div class="bloklagu" id="balon">
          <div class="boxgambar">
              <img class="gambarlagu" src="img/balon.jpg">
          </div>

          <h1 class="judullagu">Balonku</h1>

          <p class="tekslagu">
              balonku ada lima <br>
              rupa-rupa warnanya <br>
              hijau-kuning-kelabu <br>
              merah muda dan biru <br>
              meletus balon hijau <br>
              hatiku sangat kacau <br>
              balonku sisa empat <br>
              kupegang erat-erat <br>
          </p>
      </div>

      <div class="bloklagu" id="cicak">
          <div class="boxgambar">
              <img class="gambarlagu" src="img/cicak.jpg">
          </div>

          <h1 class="judullagu">cicak-cicak didinding</h1>

          <p class="tekslagu">
            Cicak-cicak di dinding <br>
            Diam-diam merayap <br>
            Datang seekor nyamuk <br>
            happpp <br>
            tidak ditangkap <br>
          </p>
      </div>

      <div class="bloklagu" id="kebun">
          <div class="boxgambar">
              <img class="gambarlagu" src="img/kebun.jpg">
          </div>

          <h1 class="judullagu">Lihat kebunku</h1>

          <p class="tekslagu">
            Lihat kebunku <br>
            Penuh dengan bunga <br>
            Ada yang putih dan ada yang merah <br>
            Setiap hari kusiram semua <br>
            mawar melatih semuanya indah <br>
          </p>
      </div>

      <div class="bloklagu" id="kereta">
          <div class="boxgambar">
              <img class="gambarlagu" src="img/kereta.jpg">
          </div>

          <h1 class="judullagu">kereta api</h1>
          <p class="tekslagu">
            naik kereta api <br>
            tu tu tu <br>
            siapa hendak turun <br>
            kebandung surabaya <br>
            bolelah naik kereta berkuda <br>
            ayo kawanku lekas naik <br>
            kretaku tak berhenti lama <br>
          </p>
      </div>

      <div id="copyright">
        <marquee behavior="alternate"
         style="border:white 2px SOLID"><h1>didesain oleh : billy tanyawan ;2017an</h1>
        </marquee>
      </div>
    </div>

    <script type="text/javascript" src="js/lagu.js"></script>
  </body>
