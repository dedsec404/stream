
<?php
$ID_File = $_SERVER['QUERY_STRING'];
session_start();
$VideoHash = md5(uniqid());
$_SESSION[$VideoHash] = "video.mp4";
?> 


<head>
  <link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
</head>

<body>
  <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
  poster="1.png" data-setup="{}">
    <source src="stream.php?h=<?php echo $VideoHash;?>" type='video/mp4'>
  </video>
  
  
  
  <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>

</body>