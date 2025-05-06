<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Site de M. Professeur' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fc;
        }
        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link:focus {
      color: #e6e6e6;
    }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <!-- Website Name -->
          <a class="navbar-brand" href="{{url('/')}}">Mon Site</a>
    
          <!-- Toggler Button for Mobile -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <!-- Navbar Links -->
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="{{ route('portfolio') }}">À propos</a></li>
    
              <!-- Dropdown Menu: Services -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Tutorat</a></li>
                  <li><a class="dropdown-item" href="#">Dissertation universitaire</a></li>
                  <li><a class="dropdown-item" href="#">Traduction</a></li>
                  <li><a class="dropdown-item" href="#">Préparation aux tests</a></li>
                  <li><a class="dropdown-item" href="#">Préparation aux interviews</a></li>
                  <li><a class="dropdown-item" href="#">Art oratoire</a></li>
                </ul>
              </li>
    
              <li class="nav-item"><a class="nav-link" href="#">Médias</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contacts</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Connexion</a></li>
            </ul>
          </div>
        </div>
      </nav>
    
      <!-- Bootstrap 5 JS Bundle -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <main class="container">
        {{ $slot }}
    </main>

    <footer class="text-center text-muted py-4">
        <div class="container">
            &copy; {{ date('Y') }} Tous droits réservés.
        </div>
    </footer>


</body>
</html>
