<x-layout title="Perfil">
    <div class="card m-auto my-5 py-5 px-3 w-25">
        <form class="form" action="POST">

            <label for="usuario">
                Usuário
            </label>
            <input id="usuario" name="usuario" class="form-control" type="text">
            <label for="nome">
                Nome:
            </label>
            <input id="nome" name="nome" class="form-control" type="text">
            <label for="email">
                Email
            </label>
            <input id="email" name="email" class="form-control" type="text">
            <label for="telefone">
                Telefone
            </label>
            <input id="telefone" name="telefone" class="form-control" type="text">
        </form>

        <button type="button" id="botao-sair" class="btn btn-danger w-25 mt-5">Sair</button>
    </div>

    <script type="module">
        const token = await localStorage.getItem('authToken');
        if (!token) {
            window.location = 'http://localhost:8000/'
        }

        const urlParams = new URLSearchParams(window.location.search);

        const email = urlParams.get('email');

        $.get('https://fakestoreapi.com/users', function(usuarios) {
            const usuario = usuarios.find(usuario => usuario.username === email);
            preencheCamposPerfil(usuario)
        }).fail(function() {
            alert('Problemas de rede');
        })

        function preencheCamposPerfil(usuario) {
            $('#usuario').val(usuario.username)
            $('#nome').val(usuario.name.firstname)
            $('#email').val(usuario.email)
            $('#telefone').val(usuario.phone)
        }
        $("#botao-sair").click(async function() {
            await localStorage.clear();
            window.location = 'http://localhost:8000/'
        })
    </script>

</x-layout>
