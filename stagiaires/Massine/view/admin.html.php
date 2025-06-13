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
    <div class="container-fluid mt-4 pt-4">
        <div class="row">

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
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
                                <h5 class="mb-0">Insérer un article</h5>
                            </div>
                            <div class="card-body">
                                <div class="p-3">
                                    <?php
                                    if (isset($error)):
                                    ?>
                                        <p class="text-danger"><?= $error ?></p>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <input type="text" name="articletitle" class="form-control" placeholder="Votre titre" required>
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" name="articletext" rows="8" placeholder="Message" required=""></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-check-input" type="checkbox" name="articlePublished" id="publishCheckbox" value="1">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Publié ?
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3" id="dateContainer">
                                                <label for="publishDate" class="form-label">Date de publication :</label>
                                                <input name="articledatepublished" type="datetime-local" class="form-control" id="publishDate">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Créer l'article</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100" style="max-height:600px;">
                            <div class="card-header">
                                <?php
                                $nbArticle = count($article);
                                $nbArticle > 1 ? $pluriel = "s" : $pluriel = "";
                                ?>
                                <h5 class="mb-0"><?= $nbArticle ?> Article<?= $pluriel ?></h5>
                                <?php
                                ?>
                            </div>
                            <div class="card-body" style="overflow-y: auto;">
                                <?php
                                if (!empty($article)):
                                    foreach ($article as $articles):
                                ?>
                                        <div class="card my-3">
                                            <div class="card-header">
                                                <h6><?= $articles['title'] ?></h6>
                                            </div>
                                            <div class="card-body">
                                                <p><?= $articles['article_text'] ?></p>
                                            </div>
                                        </div>
                                <?php
                                    endforeach;
                                endif;
                                ?>
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