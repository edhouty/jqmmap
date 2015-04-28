<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
    
    
    <title>.:: Menampilkan Data ::.</title>
</head>
<body>

 
    <div data-role="page" id="<?php echo $pageid?>">

        <?php
        require("config.php");
        $id=$_GET['id'];
        // ----- menentukan nama tabel
        $tablename="data_tourism";
        // ----- perintah SQL dimasukkan ke dalam variable string
        $sql="SELECT * FROM $tablename where id='$id' LIMIT 1";
        $result = mysql_query ($sql) or die ("Terdapat kesalahan pada perintah SQL!");

        ?>
    </div>
    
    <div id="map_canvas" style="width: 100%; height: 200px;"></div>




<script type="text/javascript">
function initialize() {
    <?php
    //INI CODE YANG DITAMBAHKAN. PELAJARI YANG INI
    while($row = mysql_fetch_assoc($result)) { ?>
        var myLatLang = new google.maps.LatLng(<?= $row['lat']; ?>,<?= $row['lon']; ?>);
       
        var contentString = '<h1><?= $row['nama_tempat']; ?></h1>'+
        '<div>Contact: <?= $row['contact']; ?></div>';
    <?php } ?>
        
        
    
    
    var mapOptions = {
        center: myLatLang,
        zoom: 12
    };
    var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatLang,
        animation: google.maps.Animation.DROP,
        map: map,
        title:"Hello World!"
    });

    var infoWindow = new google.maps.InfoWindow({
        content: contentString
    });
      
    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.open(map,marker);
    });  
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

</body>
</html>