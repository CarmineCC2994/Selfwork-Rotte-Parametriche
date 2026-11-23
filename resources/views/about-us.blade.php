
<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi siamo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="/style.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <i class="bi bi-joystick"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{route('homepage')}}">Home</a>
                    </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('aboutUs')}}">Chi siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('contacts')}}">Contatti</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                I nostri servizi              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('game.list')}}">Tutti i nostri giochi</a></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
        
      <div class="container-fluid header">
        <div class="row h-100 justify-content-around align-items-center">

          <div class="col-6">
            <h2 class="text-white text-color text-center">Chi siamo</h2>

            <p class="text-white text-color">
              Siamo una squadra di appassionati cresciuti a pane, pixel e nottate davanti allo schermo. Questo spazio nasce con un obiettivo semplice: raccontare il mondo dei videogiochi senza filtri, unendo la competenza tecnica di chi vive il settore ogni giorno alla passione autentica di chi non vede l'ora di premere Start. Dalle grandi produzioni AAA alle perle indie nascoste, esploriamo ogni genere per offrire notizie, approfondimenti e un punto di ritrovo per tutta la community.
            </p>
          </div>

   

          <div class="col-6">
            <img src="/media/team.jpg" alt="teamgame" class="shadow rounded">
          </div>

        </div>
      </div>
    </header>
           <section>
            <div class="container userHeight">
                <div class="row h-100 just-content-around align-items-center">
                    @foreach ($users as $user)
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$user['name']}} {{$user['surname']}} </h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
    <a href="{{route('aboutUsDetail', ['name'=>$user['name']])}}" class="card-link">Leggi di più</a>
    </div>
</div>
                    </div>
                        
                    @endforeach
                </div>
            </div>
          </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>

  </body>
</html>
