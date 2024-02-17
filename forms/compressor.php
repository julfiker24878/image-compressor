<?php
session_start();

function compress_image($source_url, $destination_url, $quality) {
    $info = getimagesize($source_url);
     
    if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
    elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
    elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
    elseif ($info['mime'] == 'image/jpg') $image = imagecreatefromjpeg($source_url);
     
    //save it
    imagejpeg($image, $destination_url, $quality);
         
    //return destination file url
    return $destination_url;    
}
$imname =$_FILES["image"]["tmp_name"];         
$source_photo =$imname;
$namecreate= "compressed_".time();
$namecreatenumber= rand(1000 , 10000);
$picname= $namecreate.$namecreatenumber;
$finalname= $picname.".jpeg";
$dest_photo = '../uploaded/'.$finalname;
$compressimage = compress_image($source_photo, $dest_photo, 30);

$_SESSION['img_compressed'] = "<a href='uploaded/$finalname' download='$finalname' style='background: #ff0000; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 6px; position: absolute; top: 3%; right:3%;'>Download</a>";
header('location: ../image-compress.php');