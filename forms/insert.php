<?php 
    $sentiment=3;
    $servername="localhost";
    $username="root";
    $password="";
    $database="mega";
    $post=$_POST['review']; 
    
    $conn = new mysqli($servername,$username,$password,$database);
    if($conn!=null){
    $sql="INSERT INTO post(post,sentiment) VALUES('$post','$sentiment')";
    mysqli_query($conn,$sql);
}
else{
    echo "connection error!";
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
<style>

body { 
  margin: 0;
  font-family: Arial, Helvetica;
  background-color: #eddcd9;
}

.header {
  overflow: hidden;
  background-color: #f2ebe9;
  padding: 10px 10px;
}

.header a {
  float: left;
  color: #de5499;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color:#e99f4c ;
  color: #de5499;
}

.header a.active {
  background-color: #eddcd9;
  color: #de5499;
}

.header-right {
  float: right;
}
.result{
    margin-top: 40vh;
    margin-left:40%;
}
</style>

</head>
 <title>Sentiment Analysis</title>
<body>

<div class="header">
  <a class="logo">Sentiment Analysis</a>
  <div class="header-right">
    <a class="active" href="index.html">Home</a>
    <a href="#about">About</a>
  </div>
</div>

<div class="result">
        <h3>Sentiment for give post is <?php echo $sentiment; ?></h3>
</div>
</body>
</html>