<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-body-secondary pb-5 overflow-x-hidden">
    <header class="d-flex align-middle px-5 bg-primary justify-content-between vw-100">
        <a href="/" class="text-light link-underline flex-1 link-underline-opacity-0">
            <h1>SuperStore</h1>
        </a>
        <div class="d-flex align-items-center gap-3 flex-1">
            <a href="{{ route('produtos') }}" class="text-light">Produtos</a>
            <a href="{{ route('ofertas') }}" class="text-light">Ofertas</a>
        </div>
        <div class="d-flex align-items-center flex-1">
            <a href="{{ route('login') }}" class="link-underline-opacity-0 text-light">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-square" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                </svg>
            </a>
        </div>
    </header>

    {{ $slot }}

    <footer
        class="d-flex gap-2 justify-content-center bg-dark-subtle
        vw-100 py-4 position-fixed bottom-0 start-0">
        <h5>Desenvolvido por <a href="https://github.com/Ishizuka13">Ishizuka13</a></h5>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
