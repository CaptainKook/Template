<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/top-logo.png" alt="ONE MILLION LINES "></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#who">Who we are</a>
            </li>
            {if isset($_SESSION['user']) }
                {if $_SESSION['user']['grade']=="admin"}
                    <li class='nav-item'><a class='nav-link' href='admin.php'> Administration </a></li>
                {/if}
                    <li class='nav-item'><a class='nav-link' href='profil.php'>{$_SESSION['user']['pseudo']}</a><li>
               
            {else}
                <li class='nav-item'><a class='nav-link' href='login.php'>Connexion</a></li>
            {/if}
            </ul>
        </div>
    </div>
</nav>