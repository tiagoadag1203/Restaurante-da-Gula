<!-- resources/views/pratos.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pratos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/pratos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased">
    <nav>
        <a href="/">Início</a>
        <a href="produtos">Cadastrar Novo Prato</a>
    </nav>

    <h1>Produtos disponíveis</h1>


    <div class="container">
        <div class="row">
            @foreach($listarPratos as $prd)
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">{{ $prd->nome }} <i class="material-icons">more_vert</i></span>
                        <p><a href="#">Detalhar</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title">{{ $prd->nome }}<i class="material-icons">close</i></span>
                        <p>Preço: R$ {{ number_format($prd->preco, 2, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach    
        </div> 
    </div>
</body>
</html>
