<x-layout title="Login">
    <div class="card m-auto my-5 py-5 px-3 w-25">
        <form id="formLogin" class="form">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" class="form-control" type="text" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input id="password" name="password" class="form-control" type="password" required>
            </div>
            <button type="submit" class="mt-4 btn btn-primary">Enviar</button>
        </form>
    </div>

    <script type="module">
        $('#formLogin').submit(function(e) {
            e.preventDefault();
            fazLogin();
        });

        function fazLogin() {
            const email = $('#email').val();
            const password = $('#password').val();

            $.post('https://fakestoreapi.com/auth/login', {
                    username: email,
                    password: password
                })
                .done(function(response) {
                    if (response && response.token) {
                        localStorage.setItem('authToken', response.token);
                        alert("Login bem-sucedido! Token armazenado.");
                        window.location = "http://localhost:8000/perfil?email=" + encodeURIComponent(email);
                    }
                })
                .fail(function(error) {
                    console.error("Erro de login:", error);
                    alert("Erro ao fazer login. Verifique suas credenciais.");
                });
        }
    </script>
</x-layout>
