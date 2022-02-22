<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <title>@yield('titlepage')</title>
</head>

<body>

    <nav class="navbar">
        <span id="logo">WALKING DEAD</span>
    </nav>
    <div class="fullcontent">
        <video autoplay muted loop>
            <source src="{{ url('trailer2.mp4') }}" />
        </video>
        <div class="bottomdegrade">
            <div class="gridcontent">
                <div class="imagem">
                    <img src="@yield('imagemprincipal')" alt="">
                </div>
                <div class="conteudo">
                    <h1>@yield('titulo')</h1>
                    <div id="classificacao">
                        <span>@yield('classificacao')</span>
                        <p id="categorias">@yield('categorias')</p>
                        <p>° @yield('temporadas') temporadas</p>
                    </div>
                    <div class="sinopse-desc">
                        <h3>Sinopse</h3>
                        <p>@yield('sinopse')</p>
                        <button id="assistir">ASSISTIR TRAILER!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-trailer">
        <div class="card">
            <span id="fechar" title="fechar">X</span>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qAS8f9L-vWc"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>

</body>

<script>
    const nav = document.querySelector('nav');

    window.addEventListener('load', () => {
        nav.classList.add('ativo')
    })


    const fechar = document.querySelector('#fechar');
    const abrir = document.querySelector('#assistir');
    const fullcontent = document.querySelector('.fullcontent');
    const card = document.querySelector('.card-trailer');
    const video = document.querySelector('video')
    const trailer = document.querySelector('iframe')
    var videoUrl = trailer.getAttribute('src');


    abrir.addEventListener('click', () => {
        card.classList.add('card-ativo');
        video.pause();
    });

    fechar.addEventListener('click', () => {
        card.classList.remove('card-ativo');
        video.play();

        trailer.setAttribute('src', '');
        trailer.setAttribute('src', videoUrl);
    });

    window.addEventListener('click', (e) => {
        if (e.target.classList.value == 'card-trailer card-ativo') {
            card.classList.remove('card-ativo');
            video.play();
            trailer.setAttribute('src', '');
            trailer.setAttribute('src', videoUrl);
        }
    });
</script>

</html>
