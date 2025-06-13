<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModernSite - Inscription</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding-top: 60px;
        }

        .register-card {
            max-width: 600px;
            margin: 2rem auto;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .register-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem;
            text-align: center;
        }

        .btn-primary {
            background-color: #667eea;
            border-color: #667eea;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php
    include "menu.html.php";
    ?>


    <!-- Formulaire -->
    <div class="container">
        <div class="register-card">
            <div class="register-header">
                <h3><i class="fas fa-user-plus me-2"></i>Inscription</h3>
            </div>

            <div class="card-body p-4">
            <form method="post" action="" class="g-3">
                <div class="row align-items-center mb-3">
                    <label for="login" class="col-4 col-form-label">Identifiant</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <label for="username" class="col-4 col-form-label">Nom d'utilisateur</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <label for="userpwd" class="col-4 col-form-label">Mot de passe</label>
                    <div class="col-8">
                        <input type="password" class="form-control" id="userpwd" name="userpwd" required>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <label for="email" class="col-4 col-form-label">Adresse e-mail</label>
                    <div class="col-8">
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0">Déjà inscrit ? <a href="login.html">Se connecter</a></p>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 mt-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2023 ModernSite</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>