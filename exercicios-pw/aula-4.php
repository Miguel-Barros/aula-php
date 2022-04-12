<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 - Home</title>
    <link rel="stylesheet" href="./css/aula-4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Produtos</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Codigo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $produto = [
                    'codigo' => [
                        100,
                        101,
                        102,
                        103,
                        104,
                        105
                    ],

                    'produto' => [
                        'Cachorro quente',
                        'Bauru simples',
                        'Bauru com ovo',
                        'Hamburguer',
                        'Cheeseburguer',
                        'Refrigerante'
                    ],

                    'preco' => [
                        '1.70',
                        '2.30',
                        '2.60',
                        '2.40',
                        '2.50',
                        '1.00'
                    ]
                ];

                for ($i = 0; $i < count($produto['codigo']); $i++) {
                    echo "
                    <tr id='rowtable' data-id=" . $produto['codigo'][$i] . ">
                        <td id='produto'>" . $produto['produto'][$i] . "</td>
                        <td id='preco'>" . $produto['preco'][$i] . "</td>
                        <td id='codigo'>" . $produto['codigo'][$i] . "</td>
                    </tr>
                   ";
                }
                ?>
            </tbody>
        </table>
        <div class="inputs">
            <p><b>Produto:</b></p><input class='product' type='text' placeholder='Produto' disabled>
            <p><b>Preço:</p></b><input class='price' type='text' placeholder='Preço' disabled>
            <p><b>Quantidade:</b></p><input class='count' type='number' placeholder='Quantidade'>
            <button class='btn btn-dark' onClick='calcular()'>Comprar</button>
        </div>
    </main>
    <footer>
        <p style='margin-left: 46%; margin-top: 5%; opacity: .3;'>2022 © Miguel B.</p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    const product = document.querySelector('.product');
    const price = document.querySelector('.price');
    const count = document.querySelector('.count');
    let backup = null;
    let n = count.value;
    var result = null;

    const rows = document.querySelectorAll('#rowtable').
    forEach((row) => {
        row.addEventListener("click", clicandoRow)
    });

    function clicandoRow(e) {
        const id = e.currentTarget.dataset.id;
        switch (parseInt(id)) {
            case 100:
                verifica(id);
                product.value = 'Cachorro quente';
                price.value = '1.70';
                break;
            case 101:
                verifica(id);
                product.value = 'Bauru simples';
                price.value = '2.30';

                break;
            case 102:
                verifica(id);
                product.value = 'Bauru com ovo';
                price.value = '2.60';

                break;
            case 103:
                verifica(id);
                product.value = 'Hamburguer';
                price.value = '2.40';

                break;
            case 104:
                verifica(id);
                product.value = 'Cheeseburguer';
                price.value = '2.50';

                break;
            case 105:
                verifica(id);
                product.value = 'Refrigerante';
                price.value = '1.00';
                break;

            default:
                break;
        }
        backup = id;
    }

    function verifica(id) {
        if (id != backup) {
            count.value = 1;
            n = 1;
        } else {
            n++;
            count.value = n;
        }
    }

    function calcular() {
        n = count.value;
        result = (parseFloat(price.value) * parseFloat(n));
        if(n <= 0){
            
        }else{
            var element = document.querySelector('.inputs');
            element.innerHTML = '<p><b>Você comprou ('+n+' '+product.value+ ') e gastou R$'+result.toFixed(2);+' comprando</b></p>';
        }
    }
</script>

</html>