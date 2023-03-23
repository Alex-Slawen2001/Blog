<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="blog.rtl.css">
    <link rel="stylesheet" type="text/css" href="blog.css">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>

<!-- <div class="pagination">
  <a href="#">&NestedLessLess;</a>
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">&NestedGreaterGreater;</a>
 
</div> -->

    <!-- Шапка -->
    <?php require "blocks/header.php"?>


<!-- Черный фон -->
<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Место, где вы сможете немного больше узнать о мире IT.</h1>
      <p class="lead my-3">С уважением, администрация сайта itProger.</p>
     
    </div>
  </div>


  <!-- Статьи -->
<div class="container mt-5">
  

  <div class="row">
    <div class="col-md-9">
     <div class="page-header">
      <h1>Наши статьи</h1>
     </div>
     <div class="d-flex flex-wrap">
  <?php
  for ($i = 0; $i < 3; $i++):
  ?>
  <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Языки программирования</h4>
          </div>
          <div class="card-body">
            <img src="img/images.jpg" class="thumbnail">
            <h3 class="card-title pricing-card-title"><small class="text-muted fw-light">Здесь вы получите базовые представления о том,что такое языки программирования.</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li><i class="glyphicon glyphicon-calendar"></i><?php echo $today = date("Y-m-d H:i:s");?> </li>
            
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary"><a href="/myProject/about.php">Подробнее</a></button>
          </div>
        </div>
        <?php endfor;?>
        </div>
    </div>
   
  </div>
 
</div>
 
<div class="pagination1">
  <a href="#">&NestedLessLess;</a>
  <a href="/myProject/index.php">1</a>
  <a href="/myProject/index2.php">2</a>
  <a href="/myProject/index3.php">3</a>
  <a href="/myProject/index4.php">4</a>
  <a href="#">&NestedGreaterGreater;</a>
 
</div>
</main>

<?php require "blocks/footer.php"?>


    
  </body>
</html>
