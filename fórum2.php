<!doctype html>
<html lang="pt-BR">
    <head>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title> Sugira uma questão  - Octoquest</title>
        <link rel="stylesheet" href="css/forum2.css">
    </head>
    
    <style>
        body {
            background-image: url("img/fórum.jpg");
            background-size: cover;
            background-size: 110%;
            background-attachment:fixed;
            background-position:center;
        }
    </style>

<body>
    <header class="menu-principal">
        <main>
            <div class="div-em-cima">
                <div class="logo-pequeno">
                    <a href="primeira-tela-usuario-com-cadastro.php">
                        <img src="img/logo pequeno pequeno.png" alt="" />
                    </a>
                </div>
                <div class="minha-conta-foto">
                    <a href="">
                        <img src="img/coisinho.png" alt="" />
                    </a>
                </div>
                <div class="minha-conta">
                    <a href="" style="text-decoration: none">
                        Minha conta
                    </a>
                </div>
            </div>
        </main>
    </header>
    
    <form name="Fórum2" action="fórum2-banco.php" method="POST">
    
        <div class="titulo">
           <p class = "h2"> Sugira uma questão:</p> 

        </div>
        <div class = "card">
        <textarea class="questao" name = 'descricao' cols="65" rows="8" placeholder="Insira a questão"></textarea>
        <textarea class="resposta" cols= "65" name = 'resposta' rows="3" placeholder="Insira a resposta da questão"></textarea>

        
        
        <a href = "fórum1.php" class = botao >Adicionar tema de redação</a>
        <a href = "fórum3.php" class = botaodois >Questão de múltipla escolha</a>
            
       </div>
        <div class="card-group">
            <button type="submit">ENVIAR</button>
        </div>
    </div>
   </div>
   </form>

</body>


</html>
