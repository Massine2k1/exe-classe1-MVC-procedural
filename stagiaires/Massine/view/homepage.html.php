<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModernSite - Accueil</title>
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
    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-white mb-4">Bienvenue sur notre site moderne</h1>
                    <p class="lead text-white mb-4">Découvrez une expérience utilisateur exceptionnelle avec notre design épuré et fonctionnel.</p>
                    <a href="#features" class="btn btn-primary btn-lg me-2">En savoir plus</a>
                    <a href="login.html" class="btn btn-outline-light btn-lg">Se connecter</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="display-5 fw-bold">Nos fonctionnalités</h2>
                    <p class="lead text-muted">Découvrez ce qui nous rend unique</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-primary bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4">
                                <i class="fas fa-bolt fa-2x text-white"></i>
                            </div>
                            <h3 class="h4 mb-3">Rapide</h3>
                            <p class="text-muted">Optimisé pour des performances exceptionnelles et un chargement ultra-rapide.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-success bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4">
                                <i class="fas fa-mobile-alt fa-2x text-white"></i>
                            </div>
                            <h3 class="h4 mb-3">Responsive</h3>
                            <p class="text-muted">Design parfaitement adapté à tous les appareils, du smartphone à l'écran large.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-info bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4">
                                <i class="fas fa-shield-alt fa-2x text-white"></i>
                            </div>
                            <h3 class="h4 mb-3">Sécurisé</h3>
                            <p class="text-muted">Protection avancée des données et authentification sécurisée.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Prêt à commencer?</h2>
                    <p class="lead mb-0">Rejoignez-nous dès maintenant et profitez de toutes nos fonctionnalités.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="login.html" class="btn btn-light btn-lg">S'inscrire maintenant</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2023 ModernSite. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-decoration-none me-3">Mentions légales</a>
                    <a href="#" class="text-decoration-none me-3">Politique de confidentialité</a>
                    <a href="#" class="text-decoration-none">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS personnalisé -->
    <script src="assets/js/main.js"></script>
</body>
</html>