    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Mon Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?pageChanger=about">À propos</a>
                    </li>
                    <?php
                    if(isset($_SESSION['username'])):
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./?pageChanger=admin">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?pageChanger=profile">Profil de <?=$_SESSION['username']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?pageChanger=deconnexion">Déconnexion</a>
                    </li>
                    <?php
                    else:
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./?pageChanger=connexion">Connexion</a>
                    </li>
                    <?php
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </nav>