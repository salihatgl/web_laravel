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
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
  <li class="nav-item">
          <a class="nav-link active text-dark me-2" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark me-2" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-dark me-2 " href="#">CONTACTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-dark me-2"href="#">TYPOGRAPHY</a>
        </li>
  </ul>
</nav>

      <div class="row">
<div class="col-8">
<img src="https://picsum.photos/id/236/900/600" alt="hotel" class="mt-5 mb-5 ms-5 me-1">
</div>
  <div class="col-4 ">
     <div style="width: 450px; height:600px; background-color:#f1f1f1" class=" pe-5">
     <form class="mt-5 mb-5 ms-5 " >
     <div class="mb-3 mt-3">
      <br>
      <h1><b> Book a Room</b></h1>
      <label for="name" class="mt-4 ">YOUR NAME</label>
      <input type="name" class="form-control border-dark" id="name" placeholder="Your Full Name" name="name">
    </div>
    <div class="mb-3 mt-3">
    <label for="ARRIVAL">ARRIVAL</label><br>
  <input type="date" id="ARRIVAL" style="height:37px; width:100%;" name="ARRIVAL" value="Chech-in Date">
    </div>
    <div class="mb-3 mt-3">
  <label for="ARRIVAL">ARRIVAL</label><br>
  <input type="date" id="ARRIVAL" style="height:37px; width:100%;" name="ARRIVAL" value="Chech-in Date">
    </div>
    <div class="btn-group f-left ms-5">
  <button class="btn border-dark  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
  ADULTS
  </button>
  <ul class="dropdown-menu">
    <li class="dropdown-item">1</li>
    <li class="dropdown-item">2</li>
    <li class="dropdown-item">3</li>
    <li class="dropdown-item">4</li>
    <li class="dropdown-item">5</li>
  </ul>
</div>
<div class="btn-group  ms-5">
<button class="btn border-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
CHILDREN
  </button>
  <ul class="dropdown-menu">
    <li class="dropdown-item">1</li>
    <li class="dropdown-item">2</li>
    <li class="dropdown-item">3</li>
    <li class="dropdown-item">4</li>
    <li class="dropdown-item">5</li>
  </ul>
</div>
    
<div class="d-grid mt-5">
  <button type="button" class="btn btn-lg btn-block" style="background-color:#8f859e">Full-Width Button</button>
</div>
    </div>  
  </form>
     </div>
     </div>
     </div>
     <div class="row">
      <div class="col-7">
      <img src="https://picsum.photos/id/236/400/400" alt="hotel" class="m-5" style="float: right; margin-right:100px; width:89%; height:300px;">
      </div>
      <div class="col-5 mt-5">
        <div style="height: 300px; background-color:#8f859e; width:580px; color:white;"><br><br>
        <h1 class="ms-5"><b> About Us</b></h1>
        <p class="text-white ms-5">Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.</p> <br>
        <button type="button" class="btn btn-lg ms-5 border-white text-white" style="background-color:#8f859e">BOOK NOW</button>
        </div>

      </div>
     </div>
     <div style="width: 1500; height:500px; background-color:#f1f1f1; " class=" me-5 ms-5">
     <pre class="p-5" style="float: left;"><br><br>
       <h1>  Indoor Hotel Pool</h1>
      The indoor heated pool has vaulted wood beam ceilings. The whirlpool
      features bay windows and overlooks the pond and the north face of the
      local beauty spot. For the safety and health reasons, children must be
      accompanied by an adult when visiting the pool.

      The serene pool at Royal Villas spa resort and hotel boasts sleek décor 
      that features striking floor-to-ceiling teak columns set against a cool 
      black tile floor. Poolside dining is also available, featuring a selection 
      of dishes from any cuisine you desire that are both healthy and delicious. 
      Daily aqua aerobics classes help keep guests fit while on the road.
     </pre>
     <img src="https://picsum.photos/id/236/400/400" alt="hotel" class="mt-5 mb-5 ms-5 " style="float: right; margin-right:100px;">

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