<!DOCTYPE html PUBLIC >
<html >
<head>
<title>BRO-NIS</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>

</head>

<body>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
      <h1 id="logo"><a href="#">BRO-NIS</a></h1>
      <div id="navigation">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li class="last"><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Slider -->
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <li><a href="#"><img src="css/images/slide-1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide-2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide-3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide-1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide-2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide-3.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
    </div>
    <!-- End Slider -->
  </div>
</div>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
    <!-- Search, etc -->
    <div class="options">
      <div class="search">
        <form action="#" method="post">
          <span class="field">
          <input type="text" class="blink" value="SEARCH" title="SEARCH" />
          </span>
          <input type="text" class="search-submit" value="GO" />
        </form>
      </div>
      <div class="right"> <span class="cart"> <a href="#" class="cart-ico">&nbsp;</a> <strong>$0.00</strong> </span> <span class="left more-links"> <a href="#">Checkout</a> <a href="#">Details</a> </span> </div>
    </div>
    <!-- End Search, etc -->
    <!-- Content -->
    <div id="content">
      <!-- Tabs -->
      <div class="tabs">
        <ul>
          <li><a href="#" class="active"><span>Varian Rasa</span></a></li>
          <li><a href="#"><span>Varian Topping</span></a></li>
        </ul>
      </div>
      <!-- Tabs -->
      <!-- Container -->
      <div id="container">
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                <?php
                include ('konek.php');
                $select="SELECT * from rasa";
                $hasil=$mysqli->query($select);
                while ($row=$hasil->fetch_assoc()){
                ?>
                <li>
                  <div class="image"> <a href="#">
                  <img src="css/images/<?php echo $row['foto'] ?>" id="foto"></div>
                  <br>
                  <p> Item Number: <span><?php echo $row['kode'];?></span><br />
                    Brand Name : <span><?php echo $row['nama']; ?></span><br />
                    Description: <span><?php echo $row['deskripsi']; ?></span> </p>
                  <p class="price">Wholesale Price: <strong>Rp <?php echo $row['harga']; ?></strong></p>  
                </li>
               <?php } ?>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End First Tab Content -->
          <!-- Second Tab Content -->
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                <?php
                include ('konek.php');
                $select="SELECT * from topping";
                $hasil=$mysqli->query($select);
                while ($row=$hasil->fetch_assoc()){
                ?>
                <li>
                  <div class="image"> <a href="#">
                  <img src="css/images/<?php echo $row['foto'] ?>" id="foto"></div>
                  <br>
                  <p> Item Number: <span><?php echo $row['kode'];?></span><br />
                    Brand Name : <span><?php echo $row['nama']; ?></span><br />
                    Description: <span><?php echo $row['deskripsi']; ?></span> </p>
                  <p class="price">Wholesale Price: <strong>Rp <?php echo $row['harga']; ?></strong></p>  
                </li>
               <?php } ?>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Second Tab Content -->
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Third Tab Content -->
        </div>
        <!-- Footer -->
        <div id="footer">
          <div class="left"> <a href="#">Home</a> <span>|</span> <a href="#">About</a> <span>|</span> <a href="#">Contact</a> </div>
          <div class="right"> &copy; bronis.com. Design by <a href="http://chocotemplates.com">Nur Intan Harahap</a> </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>
