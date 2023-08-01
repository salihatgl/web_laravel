<!DOCTYPE html>
<html lang="en" >
    <head>
        
        <title>Bootstrap 5</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body >
    <nav class="navbar navbar-expand-lg bg-dark text-white">
  <div class="container-fluid">
    <a class="navbar-brand text-white ms-5" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white" >
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled ">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 bg-dark show" type="search" placeholder="Search" aria-label="Search">
      </form>
      <div>
      <button class="btn btn-dark border-white  me-2" type="submit">Login</button>
      <button class="btn btn-warning border-warning  me-2" type="submit">Sign-up</button>
      </div>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

   
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
   
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/id/51/1600/500" alt="carousel" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/id/51/1600/500" alt="carousel" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/id/51/1600/500" alt="carousel" class="d-block" style="width:100%">
      </div>
    </div>
    
    
    <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
<hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 mt-5">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
       <div style="width: 400px; height:400px;" class="bg-dark"></div>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 ">
      <div style="width: 400px; height:400px;" class="bg-dark"></div>
      </div>
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Anasayfa</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">Hakkımızda</a></li>
            <li class="nav-item"><a href="project.html" class="nav-link px-2 text-muted">Projelerimiz</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">İletiişim</a></li>
          </ul>
        </footer>
      </div>



</body>
</html>