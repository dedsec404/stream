<?php
$ID_File = $_SERVER['QUERY_STRING'];
session_start();
$VideoHash = md5(uniqid());
$_SESSION[$VideoHash] = "https://www.googleapis.com/drive/v3/files/$ID_File?key=AIzaSyBDxIV0cTa6fpeHzkZ5B763dcA7FhjoTYs&alt=media";
?> 

<head>
<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
</head>

<body>
<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
poster="ChiisaiNime.png" data-setup="{}">
<source src="stream.php?h=<?php echo $VideoHash;?>" type='video/mp4'>
</video>

<body>
  <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
  poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
    <source src="stream.php?h=<?php echo $VideoHash;?>" type='video/mp4'>
  </video>


 <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>

</body>
