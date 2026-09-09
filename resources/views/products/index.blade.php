<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>

    <h1>Lista de Produtos</h1>

    @forelse ($products as $product)

        <div>
            <h2>{{ $product->nome }}</h2>

            <p>Preço: R$ {{ number_format($product->preco, 2, ',', '.') }}</p>

            <p>Unidade de medida: {{ $product->unidade_medida }}</p>

            <h3>Itens do produto</h3>

            @forelse ($product->productItens as $item)

                <div>
                    <p>Quantidade: {{ $item->quantidade }}</p>
                    <p>Cor: {{ $item->cor }}</p>
                    <p>Valor: R$ {{ number_format($item->valor, 2, ',', '.') }}</p>
                </div>

            @empty

                <p>Nenhum item cadastrado para este produto.</p>

            @endforelse

        </div>

        <hr>

    @empty

        <p>Nenhum produto cadastrado.</p>

    @endforelse

</body>
</html>
