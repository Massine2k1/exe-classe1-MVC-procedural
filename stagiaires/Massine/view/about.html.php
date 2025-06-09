<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModernSite - À propos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS personnalisé -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
     <?php
     include "menu.html.php"
     ?>

    <!-- Page Header -->
    <header class="about-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold text-white">À propos de nous</h1>
                    <p class="lead text-white">Notre histoire, notre mission et notre équipe</p>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Notre histoire</h2>
                    <p class="lead">Fondé en 2020, ModernSite est né d'une passion pour le design web et l'expérience utilisateur.</p>
                    <p>Nous avons commencé comme une petite équipe de développeurs passionnés et avons grandi pour devenir une référence dans la création de sites web modernes et performants.</p>
                    <p>Notre approche centrée sur l'utilisateur nous permet de créer des solutions qui répondent parfaitement aux besoins de nos clients tout en offrant une expérience exceptionnelle.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Notre équipe" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="display-5 fw-bold">Notre équipe</h2>
                    <p class="lead text-muted">Les talents derrière ModernSite</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card team-card border-0 shadow-sm h-100">
                        <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Membre de l'équipe">
                        <div class="card-body text-center">
                            <h3 class="h5 card-title">Jean Dupont</h3>
                            <p class="text-muted">CEO & Fondateur</p>
                            <div class="social-links">
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card team-card border-0 shadow-sm h-100">
                        <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Membre de l'équipe">
                        <div class="card-body text-center">
                            <h3 class="h5 card-title">Marie Martin</h3>
                            <p class="text-muted">Designer UX/UI</p>
                            <div class="social-links">
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card team-card border-0 shadow-sm h-100">
                        <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Membre de l'équipe">
                        <div class="card-body text-center">
                            <h3 class="h5 card-title">Pierre Lambert</h3>
                            <p class="text-muted">Développeur Full-Stack</p>
                            <div class="social-links">
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-decoration-none mx-2"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2023 ModernSite. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-decoration-none text-white me-3">Mentions légales</a>
                    <a href="#" class="text-decoration-none text-white me-3">Politique de confidentialité</a>
                    <a href="#" class="text-decoration-none text-white">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>