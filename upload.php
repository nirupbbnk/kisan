<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
 $name = $_POST['name'];
 $shop_name = $_POST['shop_name'];
 $city = $_POST['city'];
 
 require_once 'include/DB_Connect.php';
 
 $sql ="SELECT id FROM fertilizer_data ORDER BY id ASC";
 
 if($res = mysqli_query($con,$sql);)
  echo "Connection ok":
 else
  echo "connection fail";
 
 $id = 0;
 
 while($row = mysqli_fetch_array($res)){
 $id = $row['id'];
 }
 
 $path = "uploads/$id.png";
 
 $actualpath = "http://kisanmitra.gear.host/$path";
 
 $sql = "INSERT INTO fertilizer_data (photo,name1,shop_name,city) VALUES ('$actualpath','$name','$shop_name','$city')";
 
 if(mysqli_query($con,$sql)){
 //file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }
  else 
  {
  echo "error store";
  }
 
 mysqli_close($con);
 }else{
 echo "Error";
 }
