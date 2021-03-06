    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
            <title>Laravel</title>
        </head>
        <body>
            <div id="app">
            <!-- Debut barre de navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <router-link class="nav-link" to="/">Accueil</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/tasks">Liste des taches</router-link>
                    </li>
                </div>
            </nav>
            <!-- Fin barre de navigation -->
            <!-- Debut container -->
            <div class="container">
                <router-view>
                </router-view>
            </div>
            <!-- Fin container -->
            </div>
            <script src="{{ asset('js/app.js') }}"></script>
        </body>
    </html>
