<x-layout title="Produtos">

    <div class="m-auto mb-5 overflow-hidden w-75" id="show-produtos">
        <div class="mt-3" id="categoria">
            <h3>Moda Masculina</h3>
            <div class="d-flex overflow-x-auto gap-3" id="itens-categoria">
                {{-- Aqui se adiciona os itens --}}
            </div>
        </div>
        <div class="mt-5" id="categoria">
            <h3>Moda Feminina</h3>
            <div class="d-flex flex-wrap gap-3" id="itens-categoria2">
                {{-- Aqui se adiciona os itens --}}
            </div>
        </div>
        <div class="mt-5" id="categoria">
            <h3>Joalheria</h3>
            <div class="d-flex flex-wrap gap-3" id="itens-categoria3">
                {{-- Aqui se adiciona os itens --}}
            </div>
        </div>
        <div class="mt-5" id="categoria">
            <h3>Eletrônicos</h3>
            <div class="d-flex flex-wrap gap-3" id="itens-categoria4">
                {{-- Aqui se adiciona os itens --}}
            </div>
        </div>
    </div>

    <script type="module">
        let span = $('nome-produto');
        $.get("https://fakestoreapi.com/products/").done(function(produtos) {
                produtosMasc(produtos);
                produtosFem(produtos);
                produtosEletronicos(produtos);
                produtosJoalheria(produtos);
            })
            .fail(function() {
                alert("Problemas de rede. Tente mais tarde.")
            })

        function templateProduto({
            imagem,
            avaliacao,
            preco,
            titulo
        }) {
            return $(`
                    <div class="d-flex flex-column shadow justify-content-between p-3 bg-light-subtle fs-5 rounded-1" style="width: 200px" >
                        <div class="h-50 ">
                            <img src="${imagem}" width="100%" alt="" />
                        </div>
                        <div class="p-3 h-50 overflow-y-scroll overflow-x-hidden">
                            <div>avaliações <br/>
                                <span>
                                ${avaliacao}
                                </span>
                            </div>
                            <span>R$ ${preco}</span> <br />
                            <span class="fs-6"">${titulo}</span>
                        </div>
                    </div>
                    `)
        }

        function montaCategoria(templatesCategoria) {
            let itensCategoria = $('#itens-categoria');
            let showProdutos = $("#show-produtos");
            itensCategoria.append(templatesCategoria);
        }

        function produtosMasc(produtos) {
            let itensCategoria = $('#itens-categoria');
            let produtosArray = [];
            produtos.forEach((produto) => {
                if (produto.category === "men's clothing") {
                    let produtoTemplate = templateProduto({
                        imagem: produto.image,
                        avaliacao: produto.rating.rate,
                        preco: produto.price,
                        titulo: produto.title
                    })
                    produtosArray.push(produtoTemplate);
                }
            });
            itensCategoria.append(produtosArray);
        }

        function produtosFem(produtos) {
            let itensCategoria = $('#itens-categoria2');
            let produtosArray = [];
            produtos.forEach((produto) => {
                if (produto.category === "women's clothing") {
                    let produtoTemplate = templateProduto({
                        imagem: produto.image,
                        avaliacao: produto.rating.rate,
                        preco: produto.price,
                        titulo: produto.title
                    })
                    produtosArray.push(produtoTemplate);
                }
            });
            itensCategoria.append(produtosArray);
        }

        function produtosJoalheria(produtos) {
            let itensCategoria = $('#itens-categoria3');
            let produtosArray = [];
            produtos.forEach((produto) => {
                if (produto.category === "jewelery") {
                    let produtoTemplate = templateProduto({
                        imagem: produto.image,
                        avaliacao: produto.rating.rate,
                        preco: produto.price,
                        titulo: produto.title
                    })
                    produtosArray.push(produtoTemplate);
                }
            });
            itensCategoria.append(produtosArray);
        }

        function produtosEletronicos(produtos) {
            let itensCategoria = $('#itens-categoria4');
            let produtosArray = [];
            produtos.forEach((produto) => {
                if (produto.category === "electronics") {
                    let produtoTemplate = templateProduto({
                        imagem: produto.image,
                        avaliacao: produto.rating.rate,
                        preco: produto.price,
                        titulo: produto.title
                    })
                    produtosArray.push(produtoTemplate);
                }
            });
            itensCategoria.append(produtosArray);
        }
    </script>
</x-layout>
