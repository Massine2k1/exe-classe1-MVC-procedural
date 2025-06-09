<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModernSite - Connexion</title>
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

    <!-- Login Form -->
    <div class="container py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold">Connexion</h2>
                            <p class="text-muted">Connectez-vous pour accéder à votre espace personnel</p>
                        </div>
                        
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="login" class="form-label">Login :</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input name="userlogin" type="text" class="form-control" id="login" placeholder="Votre Login" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe : </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Votre mot de passe" required>
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                                <a href="#" class="text-decoration-none">Mot de passe oublié?</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 mb-3">Se connecter</button>
                            <div class="text-center">
                                <p class="mb-0">Pas encore de compte? <a href="#" class="text-decoration-none">S'inscrire</a></p>
                            </div>
                        </form>

                        <div class="separator my-4">ou</div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-dark" type="button">
                                <i class="fab fa-google me-2"></i>Continuer avec Google
                            </button>
                            <button class="btn btn-outline-primary" type="button">
                                <i class="fab fa-facebook-f me-2"></i>Continuer avec Facebook
                            </button>
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fab fa-github me-2"></i>Continuer avec GitHub
                            </button>
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
    <!-- JS personnalisé -->
    <script src="assets/js/login.js"></script>
</body>
</html>