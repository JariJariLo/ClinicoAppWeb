<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>LOGIN PACIENTES</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src='main.js'></script>
  <link rel="shortcut icon" href="logo.ico" />
</head>

<body>
  <nav id="barranav" class="navbar navbar-expand-lg navbar-light bg-light text-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <svg viewBox="0 0 960 200">
          <symbol id="s-text">
            <text text-anchor="middle" x="0%" y="80%">Hospital Clínico</text>
          </symbol>
          <g class="g-ants">
            <use xlink:href="#s-text" class="text-copy"></use><!--Cada uno de los colores del titulo animado-->
            <use xlink:href="#s-text" class="text-copy"></use><!--Cada uno de los colores del titulo animado-->
            <use xlink:href="#s-text" class="text-copy"></use><!--Cada uno de los colores del titulo animado-->
            <use xlink:href="#s-text" class="text-copy"></use><!--Cada uno de los colores del titulo animado-->
            <use xlink:href="#s-text" class="text-copy"></use><!--Cada uno de los colores del titulo animado-->
          </g>
        </svg>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button bg color="red" class="btn btn-outline-success" type="submit">BUSQUEDA</button>
        </form>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <html lang="en">

  <head>
    <div class="wrapper">
      <div class="logo">
        <img
          src="https://png.pngtree.com/template/20190422/ourmid/pngtree-cross-plus-medical-logo-icon-design-template-image_145195.jpg"
          alt="">
      </div>
      <div class="text-center mt-4 name">
        HOSPITAL CLINICO PACIENTES
      </div>
      <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center">
          <span class="far fa-user"></span>
          <input type="text" name="userName" id="userName" placeholder="Nº TARJETA SANITARIA">
        </div>
        <div class="form-field d-flex align-items-center">
          <span class="fas fa-key"></span>
          <input type="password" name="password" id="pwd" placeholder="CONTRASEÑA">
        </div>
        <button class="btn mt-3">ENTRAR</button>
      </form>
      <div class="text-center fs-6">
        <a href="#">¿Olvidaste la contraseña?</a> or <a href="#">Registrate</a>
  </head>
  </div>
  </div>
</body>

</html>