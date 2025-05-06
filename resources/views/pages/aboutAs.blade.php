<x-layout>
    <div class="container py-5">
      <h1 class="text-center mb-5">À propos de nous</h1>
  
      <!-- First teacher: French (image left, text right) -->
      <div class="row align-items-center mb-5">
        <div class="col-md-5">
          <img src="{{ asset('images/blank-profile-picture-coming-soon.png') }}" class="img-fluid rounded shadow" alt="Professeure de français">
        </div>
        <div class="col-md-7">
          <h3>Professeure de français</h3>
          <p>
            Retraitée passionnée, elle a consacré plus de 30 ans à l'enseignement du français dans le secondaire.
            Reconnue pour sa pédagogie innovante et son amour pour la littérature francophone, elle continue aujourd'hui à partager ses connaissances à travers des activités de tutorat, de traduction et de rédaction.
          </p>
        </div>
      </div>
  
      <!-- Second teacher: English (text left, image right) -->
      <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-5">
          <img src="{{ asset('images/blank-profile-picture-coming-soon.png') }}" class="img-fluid rounded shadow" alt="Professeur d'anglais">
        </div>
        <div class="col-md-7">
          <h3>Professeur d'anglais</h3>
          <p>
            Enseignant d’anglais à la retraite, il a marqué des générations d’élèves par sa bienveillance et sa maîtrise de la langue.
            Avec plus de 35 ans d’expérience, il met aujourd’hui son expertise au service des jeunes en les aidant à préparer des tests, des entretiens et à améliorer leur expression orale.
          </p>
        </div>
      </div>
    </div>
  </x-layout>
  