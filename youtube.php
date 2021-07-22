<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YT-Download</title>
  <style>

@font-face {
    font-family: font1;
    src: url(font1.woff);
  }


body{

    border: 0px;
    margin: 0px;
    padding: 0px;

}

#llll{

    height: fit-content;
    width: 600px;
    background-color: #E91E63;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 50px;

}

#jjj{

    height: 300px;
    width: 600px;
    border-radius: 5px;

}

#kokkk{

    color: #fff;
    font-size: 25px;
    font-family: 'font1';
    font-weight: 800;
    width: 600px;
    margin-left: 40px;

}

#hii{

    width: 470px;
    height: 20px;
    border: none;
    border-radius: 3px;
    outline: none;
    padding: 10px;
    font-size: 16px;
    font-family: 'font1';
    margin-top: 40px;
    float: left;

}

#ekk{

    width: 80px;
    height: 40px;
    float: left;
    margin-top: 40px;
    border-radius: 3px;
    border: none;
    margin-left: 25px;
    font-family: 'font1';
    font-size: 20px;
    background: #fff;
    color: #E91E63;
    font-weight: 500;

}


#text01{

    color: #fff;
    font-size: 23px;
    font-family: 'font1';
    font-weight: 800;
    width: 600px;
    text-align: center;
    margin-top: 120px;

}


#text02{

    color: #fff;
    font-size: 16px;
    font-family: 'font1';
    margin-left: 20px;
    width: 600px;

}


#text03{

    color: #fff;
    font-size: 16px;
    font-family: 'font1';
    margin-left: 20px;
    width: 600px;

}

#text04{

    color: #fff;
    font-size: 25px;
    font-family: 'font1';
    text-align: center;
    font-weight: 800;
    margin-bottom: 25px;
    
}

.btn{
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

  </style>
</head>
<body>
  
<!-- YouTube thumbnail downloader -->
<?php

if(isset($_POST["submit"])){

$url = $_POST["url"];
$value = explode ('v=',$url);
$videoId = $value[1]; 

}

?>
<style type="text/css">

</style>

<div id="llll">
<samp id="kokkk" >YouTube Thumbnail Viewer and Downloader!</samp>

<form method="post" >

<input placeholder="Youtube URL" id="hii" type="text" name="url" required />
<input id="ekk" type="submit" name="submit" />

</form>

<p id="text01">How to download a YouTube thumbnail preview image</p>
<p id="text02" > </p>
<p id="text03" > </p>

<br>

<?php if(!empty ($videoId)){ 
    
    $maxresdefault ="https://img.youtube.com/vi/$videoId/maxresdefault.jpg";
    $sddefault ="https://img.youtube.com/vi/$videoId/sddefault.jpg";
    $hqdefault ="https://img.youtube.com/vi/$videoId/hqdefault.jpg";
    $mqdefault ="https://img.youtube.com/vi/$videoId/mqdefault.jpg";



    
    ?>

<h1  id="text04" >Max resolution 1080p</h1>
<img src="<?php echo $maxresdefault ; ?>" 
alt="thumbnail full resolution" alt="thumbnail full resolution" id="jjj">
<a class="btn" href="down.php?file=<?php echo $maxresdefault; ?>" alt="thumbnail full resolution" download="<?php echo( uniqid()  );?>">



download


</a>


<br><br>

<h1 id="text04" >HD 720p </h1>

<img src="<?php echo $hqdefault;?>" 
alt="thumbnail full resolution" alt="thumbnail SMALL resolution" id="jjj">

<a  class="btn"  href="down.php?file=<?php echo $hqdefault ;?>" alt="thumbnail SMALL resolution" download="<?php echo( uniqid()  );?>" >
download


</a>



<br><br>

<h1 id="text04">Standard quality 480p</h1>

<img src="<?php echo $sddefault;?>" 
alt="thumbnail full resolution" alt="thumbnail MEDIUM resolution" id="jjj">


<a class="btn" href="down.php?file=<?php echo $sddefault;?>" alt="thumbnail MEDIUM resolution"  download="<?php echo( uniqid()  );?>">
download


</a>


<br><br>

<h1 id="text04" >Medium 360p</h1>

<img src="<?php echo $mqdefault;?>" 
alt="thumbnail full resolution" alt="thumbnail MEDIUM resolution" id="jjj">

<a class="btn" href="down.php?file=<?php echo $mqdefault;?>" alt="thumbnail MEDIUM resolution" download="<?php echo( uniqid()  );?>">


download
</a>




</form>
<?php }?> 
</div>

<!-- YouTube thumbnail downloader end -->

</body>
</html>

