<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kodutöö nr2</title>
</head>
<body>
    <!-- Navi -->
    <style>
      .navbar {
          padding-top: 10px; /* Adjust the top padding */
          padding-bottom: 10px; /* Adjust the bottom padding */
      }
  </style>
  
    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container-fluid">
            <img src="ikoon.png" width="40" height="40" alt="">
          <a class="navbar-brand fs-6"  href="#">Avaleht</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-6 color: text-body-secondary" aria-current="page" href="tooted.html">Tooted</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 color: text-body-secondary" href="teenused.php">Teenused</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 color: text-body-secondary" href="kontakt.php">Kontakt</a>
              </li>
    
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Otsi" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Otsi</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- Hero section -->
      <div class="container">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="https://picsum.photos/id/1025/700/500" alt="">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Tõestan, et oskan Bootstrappi</h1>
          <p class="lead">Tegelikult oskan täiega HTML, CSS ja Bootstrap APIt. Kahjuks olen liiga laisk!</p>
          <div class="row gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-success btn-lg px-4 me-md-2">
                Kontakt</button> 
            <button type="button" class="btn btn-warning btn-lg px-4">
                Vaata demo</button>
          </div>
        </div>
      </div>
    </div>
<!-- FEatures -->
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 text-center fs-6 text-danger">Meie teenused</h2>
    <h2 class="pb-2 text-center">Lorem ipsum dolor sit amet.</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon">
          <img src="HTML.png" height="50" alt="">
        </div>
        <h3 class="fs-2 text-body-emphasis">Lorem ipsum</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque eum dignissimos repudiandae, fugit laborum, ut cupiditate similique totam minus ea labore eius dolores ab pariatur maiores fuga alias unde molestias!</p>
      </div>
      <div class="feature col">
        <div class="feature-icon">
          <img src="HTML.png" height="50" alt="">
        </div>
        <h3 class="fs-2 text-body-emphasis">Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam mollitia consectetur at, cupiditate iusto architecto odit iure reiciendis sed non velit dolores, iste suscipit esse in. Necessitatibus quae sed aperiam.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon">
          <img src="HTML.png" height="50" alt="">
        </div>
        <h3 class="fs-2 text-body-emphasis">Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi odit temporibus ex reprehenderit nulla? Dolorum sit commodi ratione sunt! Voluptatem dolorum amet rem voluptate placeat dignissimos eius deleniti tempora voluptas.</p>
      </div>
    </div>
  </div>
<!-- Footer -->
<div class="container px-4 py-5" id="featured-4">
    <h2 class="pb-2 text-center fs-12">Kontakt</h2>
<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
<form>
    <div class="mb-3">
      <label class="form-label">Nimi</label>
      <input type="text" class="form-control" placeholder="Nimi siia">
    </div>
    <div class="mb-3">E-mail
      <input type="email" class="form-control" placeholder="Email">
    </div>
    <div class="mb-3">Sõnum
        <textarea class="form-control" placeholder="Sõnum" rows="8"></textarea>
    </div>
    <button type="submit" class="btn btn-primary w-100">Saada</button>
  </form>
  
</div>
<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506845.5966187801!2d22.842609578125!3d60.2491413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468dbf39d68819b7%3A0xc97dc07d7e787ca8!2sTiny%20Dogs!5e0!3m2!1set!2see!4v1707421347978!5m2!1set!2see" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
</div>

</div>


<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Krista Kutsar ITS-23</span>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
 
</body>

</html>