<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModernSite - Admin</title>
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

    <!-- Admin Dashboard -->
    <div class="container-fluid mt-5 pt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">
                                <i class="fas fa-tachometer-alt me-2"></i>Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="fas fa-users me-2"></i>Utilisateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="fas fa-newspaper me-2"></i>Articles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="fas fa-cog me-2"></i>Paramètres
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tableau de bord administrateur</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Partager</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <i class="fas fa-calendar"></i> Cette semaine
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Visiteurs</h6>
                                        <h2 class="card-text">1,254</h2>
                                    </div>
                                    <i class="fas fa-users fa-3x"></i>
                                </div>
                                <p class="card-text"><small>+12.5% depuis hier</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Revenus</h6>
                                        <h2 class="card-text">$3,254</h2>
                                    </div>
                                    <i class="fas fa-dollar-sign fa-3x"></i>
                                </div>
                                <p class="card-text"><small>+8.2% depuis hier</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Commandes</h6>
                                        <h2 class="card-text">124</h2>
                                    </div>
                                    <i class="fas fa-shopping-cart fa-3x"></i>
                                </div>
                                <p class="card-text"><small>+5.7% depuis hier</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Taux de rebond</h6>
                                        <h2 class="card-text">32%</h2>
                                    </div>
                                    <i class="fas fa-chart-line fa-3x"></i>
                                </div>
                                <p class="card-text"><small>-2.4% depuis hier</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Activité récente</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Utilisateur</th>
                                        <th>Action</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#2456</td>
                                        <td>Jean Dupont</td>
                                        <td>Nouvel article créé</td>
                                        <td>2023-06-15 14:32</td>
                                        <td><span class="badge bg-success">Complété</span></td>
                                    </tr>
                                    <tr>
                                        <td>#2455</td>
                                        <td>Marie Martin</td>
                                        <td>Mise à jour du profil</td>
                                        <td>2023-06-15 12:45</td>
                                        <td><span class="badge bg-success">Complété</span></td>
                                    </tr>
                                    <tr>
                                        <td>#2454</td>
                                        <td>Pierre Lambert</td>
                                        <td>Suppression de commentaire</td>
                                        <td>2023-06-15 10:21</td>
                                        <td><span class="badge bg-danger">Échoué</span></td>
                                    </tr>
                                    <tr>
                                        <td>#2453</td>
                                        <td>Sophie Bernard</td>
                                        <td>Nouvel utilisateur inscrit</td>
                                        <td>2023-06-14 18:05</td>
                                        <td><span class="badge bg-success">Complété</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Actions rapides</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-plus me-2"></i>Créer un nouvel article
                                    </button>
                                    <button class="btn btn-success" type="button">
                                        <i class="fas fa-user-plus me-2"></i>Ajouter un utilisateur
                                    </button>
                                    <button class="btn btn-info" type="button">
                                        <i class="fas fa-cog me-2"></i>Paramètres du site
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Statistiques du site</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart-container" style="position: relative; height: 200px;">
                                    <canvas id="statsChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-4">
        <div class="container-fluid">
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
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- JS personnalisé -->
    <script src="assets/js/admin.js"></script>
</body>
</html>