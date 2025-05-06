<x-layout>
    <div class="container py-5">
  
      <!-- Hero Section -->
      <div class="text-center mb-5">
        <img src="{{ asset('images/blank-profile-picture-coming-soon.png') }}" class="img-fluid rounded shadow mb-4" style="max-height: 400px;" alt="Couple de professeurs">
        <h1 class="display-5 fw-bold">Bienvenue dans notre univers éducatif</h1>
        <p class="lead">Deux enseignants passionnés au service des apprenants de tous âges.</p>
        <a href="{{ route('portfolio') }}" class="btn btn-primary mt-3">Découvrir notre histoire</a>
      </div>
  
      <!-- Présentation -->
      <div class="row mb-5">
        <div class="col-md-10 offset-md-1">
          <div class="p-4 bg-light rounded shadow-sm">
            <h2 class="h4 mb-3">Qui sommes-nous ?</h2>
            <p>
              Nous sommes un couple de professeurs à la retraite, unis par l'amour de l'enseignement et des langues. 
              Avec plus de 60 ans d'expérience combinée dans l'enseignement du français et de l'anglais, 
              nous poursuivons notre mission en aidant les étudiants, les chercheurs et les professionnels à atteindre leurs objectifs linguistiques.
            </p>
          </div>
        </div>
      </div>
  
      <!-- Services -->
      <div class="mb-5">
        <h2 class="text-center mb-4">Nos services</h2>
        <div class="row g-4">
          @php
            $services = [
              'Tutorat',
              'Dissertation universitaire',
              'Traduction',
              'Préparation aux tests',
              'Préparation aux interviews',
              'Art oratoire'
            ];
          @endphp
  
          @foreach($services as $service)
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">{{ $service }}</h5>
                <p class="card-text">Un accompagnement personnalisé pour {{ strtolower($service) }}.</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
  
      <!-- Témoignages -->
      <div class="my-5">
        <h2 class="text-center mb-4">Ils nous font confiance</h2>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <blockquote class="blockquote text-center">
              <p class="mb-0">"Grâce à leur soutien, j'ai pu réussir mon entretien en anglais sans stress !"</p>
            </br>
              <footer class="blockquote-footer">Amira, étudiante en licence</footer>
            </blockquote>
          </div>
        </div>
      </div>
  
      <!-- Appel à l’action -->
      <div class="text-center my-5">
        <h2>Prêt(e) à progresser avec nous ?</h2>
        <p class="lead">Contactez-nous ou explorez nos services pour commencer l'aventure.</p>
        <a href="{{ url('/contact') }}" class="btn btn-outline-primary me-2">Nous contacter</a>
        <a href="{{ url('/#services') }}" class="btn btn-primary">Voir les services</a>
      </div>
  
    </div>

  <!-- Section Contact -->
<div id="contact" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Contactez-nous</h2>
  
      <!-- Coordonnées -->
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="p-3 border rounded bg-white shadow-sm h-100">
            <h5 class="fw-bold">M. Jomaa Souissi</h5>
            <p class="mb-1"><strong>Matière :</strong> Français</p>
            <p class="mb-1"><strong>Téléphone :</strong> <a href="tel:+21690123456">+216 90 123 456</a></p>
            <p class="mb-1"><strong>Email :</strong> <a href="mailto:jomaa.souissi@email.com">jomaa.souissi@email.com</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="p-3 border rounded bg-white shadow-sm h-100">
            <h5 class="fw-bold">Mme Faten Kacem</h5>
            <p class="mb-1"><strong>Matière :</strong> Anglais</p>
            <p class="mb-1"><strong>Téléphone :</strong> <a href="tel:+21698234567">+216 98 234 567</a></p>
            <p class="mb-1"><strong>Email :</strong> <a href="mailto:faten.kacem@email.com">faten.kacem@email.com</a></p>
            <p class="mb-0"><strong>Facebook :</strong> 
              <a href="https://www.facebook.com/faten.kacem.984" target="_blank">facebook.com/faten.kacem</a>
            </p>
          </div>
        </div>
      </div>
  
      <!-- Formulaire -->
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form method="POST" action="#">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nom</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Adresse e-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  </x-layout>
  