<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModernSite - Déconnexion</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS personnalisé -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navigation -->
     <?php
     include "menu.html.php"
     ?>
    <!-- Logout Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm text-center">
                    <div class="card-body p-5">
                        <div class="mb-4">
                            <i class="fas fa-sign-out-alt fa-5x text-primary mb-3"></i>
                            <h2 class="fw-bold">Déconnexion réussie</h2>
                            <p class="text-muted">Vous avez été déconnecté avec succès</p>
                        </div>
                        <p class="mb-4">Merci d'avoir utilisé notre service. Vous pouvez vous reconnecter à tout moment.</p>
                        <a href="login.html" class="btn btn-primary px-4">Se reconnecter</a>
                        <div class="mt-4">
                            <a href="index.html" class="text-decoration-none">Retour à l'accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-auto">
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