<?php 
include 'cont.php';
if(isset($_GET['rest_id'])){
  $id=$_GET['rest_id'];
}
$res=getRes($id);
$rate=avgRate($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Piter Cat</title>
        <link rel="stylesheet" href="css/piter_cat01.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <!-- FONT ICON -->
    <script src="https://kit.fontawesome.com/aab6347ebb.js" crossorigin="anonymous"></script>
      </head>


    
    <body>
     


      <!-- <div class="col"> -->
        <div class="cat">
      <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount=-40  direction="left">
          Welcome to Pitter Cat
      </marquee>
      </div>
        <!-- </div> -->
        




     
    
      <div class="picb">
       <div class="row row-cols-1 row-cols-md-6 g-4">
        <div class="col">
          <div class="card">
            <div class="hov">
            <img src="pitter_cat/th.jpg" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="hov">
            <img src="pitter_cat/th1.jpg" class="card-img-top" alt="...">
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="hov">
            <img src="pitter_cat/th 2.jpg" class="card-img-top" alt="...">
          </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="hov">
            <img src="pitter_cat/th3.jpg" class="card-img-top" alt="...">
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="hov">
            <img src="pitter_cat/th4.jpg" class="card-img-top" alt="...">
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="hov">
            <img src="pitter_cat/th5.jpg" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </div>
      <br>
      </div>
      <center>
        <div class="cls">
      <div class="card" style="width: 40rem;">
        <div class="card-body" baclg>
          <div class="cent">
          <h3 class="card-title"><?=$res['title']?><a href="form.php"><button type="button" class="btn btn-info" align="center">HOME</button></a></h3>
          <p class="card-text">
            Rating: <?=round($rate,1)?> <i class="fa-solid fa-star"></i><br>
            <i class="fa-solid fa-location-dot"></i>
            <a><?=$res['location']?></a><br>
            <i class="fa-solid fa-phone"></i>
            <a href=""><?=$res['number']?></a><br>
            <i class="fa-solid fa-clock"></i>
            11.00-23.20<br>
            <i class="fa-solid fa-earth-asia"></i>
            website: <a href="https://tanyamunshi.com/"><?=$res['link']?></a><br>
           <form action="cont.php" method="post">
            Review: <input type="radio" name="rate" value="1">1   
            <input type="radio" name="rate" value="2">2   
            <input type="radio" name="rate" value="3">3   
            <input type="radio" name="rate" value="4">4    
            <input type="radio" name="rate" value="5">5<br>
            Enter your feedback:<br>
            <input type="text" name="cmnt" placeholder="Entre your opinion"><br></p>
            <input type="hidden" name="rest_id" value="<?=$res['id']?>">
         <input type="submit" name="rating" value="submit">
        </form>
          <div class="btnm">
            
          </div>
          
        </div>
        </div>
      </div>
      </div>
      </center>
    
      

      <!-- <div class="name">
        Pitter Cat
      </div> -->
        
        
        

        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </body>
      
</html>