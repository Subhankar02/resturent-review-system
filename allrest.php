<?php include 'cont.php';
$m=getIMG1();
?>
<!doctype html>
<html>
    <head>
        <title>All Restaurants</title>
        <link rel="stylesheet" href="css/allrest01.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    </head>
    <body>
      <div class="heading">
      <h1>All Resturants</h1>
      <p>
        Here is all the restaurant, you can find your favorite.
      </p>
        </div>
<div class="hooom">
  <a href="form.php"><button type="button" class="btn btn-info" align="center">HOME</button></a>
</div>
        
      <!-- FIRST ROW -->
      <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($m as $i){?>
          <div class="col">
            <div class="card">
              <a href="piter_cat.php">
              <img src="upload/<?=$i['imgname']?>" class="card-img-top" alt="...">
            </a>
              <div class="card-body">
                <h5 class="card-title"><?=$i['title']?></h5>
                <p class="card-text"><?=$i['location']?><br>click to know more</p>
                <a class="btn btn-info" href="piter_cat.php?rest_id=<?=$i['id']?>">click to know more</a>
              </div>
            </div>
          </div>
          <?php } ?>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>