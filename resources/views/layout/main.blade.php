<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/color.css') }}">
    <style>
      .dropdown-menu{
        position: absolute !important;
        transform: translateX(-10%) translateY(5%);
      }

      .active{
        background-color: #997AFC;
        color: white !important;

      }

      .opacity-1{
        opacity: 0.9;
      }
    </style>
    @yield('style')
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top dark flex-md-nowrap py-3 opacity-1 ">
      <div class="relative w-25 form-inline justify-content-center search-bar">
        <span><i class="fas fa-lg fa-search"></i></span>
        <input class=" search form-control form-control-no-border form-control-sm w-75 justify-content-center mx-2" type="text" placeholder="Search" aria-label="Search">
      </div>

      <ul class="navbar-nav px-3 mx-5">
        <li class="nav-item text-nowrap dropdown">
          <a class=" text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas  fa-lg  fa-user mx-2"></i> Gus Agung <i class="fas fa-caret-down text-dark mx-1"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">log out</a>
          </div>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row dark-gradient">
        <nav class="col-md-1 d-none d-md-block sidebar purple-gradient">
          <div class="sidebar-sticky pt-0">
            <div class="d-block py-3 text-center text-white border-bottom pb-3 border-purple" style="transform :translateY(11%)" >
              <i class="fas fa-lg fa-bars"></i>
            </div>
            <ul class="nav text-center mt-5 flex-column" style="font-size : 0.4rem">
              <li class="nav-item mb-3 mx-2">
                <a class="nav-link  active" href="#">
                  <i class="fas fa-3x fa-home"></i>
                </a>
              </li>
              <li class="nav-item mb-3">
                <a class="nav-link text-purple" href="#">
                  <i class="fas fa-3x fa-users"></i>
                </a>
              </li>
              <li class="nav-item mb-3">
                <a class="nav-link text-purple" href="#">
                  <i class="fas fa-3x fa-hand-holding-usd"></i>
                </a>
              </li>
                <li class="nav-item mb-3">
                <a class="nav-link text-purple" href="#">
                  <i class="fas fa-3x fa-cog"></i>
                </a>
              </li>
            </ul>

          </div>
        </nav>

        <main role="main" class="col-md-11 ml-sm-auto col-lg-11 px-4 bg-main">
            @yield('content')
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
