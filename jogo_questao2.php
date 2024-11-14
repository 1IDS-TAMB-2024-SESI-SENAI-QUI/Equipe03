<!DOCTYPE html>
<html lang="pt-br" style="margin: -7px">
    <head>
        <meta charset="UTF-8">
        <title>Sais, bases e ácidos!</title>
        <link rel="stylesheet" type="text/css" href="jogo.css">
    </head> 
    <body>
        <main>
            <article id="pergunta2">
            <form method="POST" action="">
                <img class="p2" src="img4.jpg">
                <div> 
                <h3>2) Qual das seguintes propriedades é característica de uma base?</h3>
                    <input type="radio" name="questao2" id="questao2" value="errado"> a) Tem sabor ácido</input><br>
                    <input type="radio" name="questao2" id="questao2" value="correta"> b) Neutraliza ácidos</input><br>
                    <input type="radio" name="questao2" id="questao2" value="errado">c) Libera íons H⁺ em solução aquosa</input><br>
                    <input type="radio" name="questao2" id="questao2" value="errado"></input>d) Deixa o papel tornassol vermelho</input><br><br>
                    <input class="responder" type="submit" value="Responder!">
                </div>
                </form>
                <?php
                    if(isset($_POST["questao2"])){
                        if ($_POST["questao2"] == "correta" ){
                            echo '<br><br><img height="200px" width="200px" src="https://i.pinimg.com/474x/e6/b2/71/e6b271792a254c6ed907bb28b169efbb.jpg">';
                            echo '<div class="botao1">
                                        <button class="pp" onClick="proximaQuestao()">Próxima pergunta!</button>
                                </div>';
                        }
                        else {
                            echo '<br><br><img height="200px" width="200px" src="https://i.pinimg.com/originals/53/14/d5/5314d5734668974c646d05dfed3d4f94.gif">';
                        }
                    }
                ?>
                </article>
        </main>
    </body>
    <script>
        function proximaQuestao(){
            open("jogo_questao3.php","_self");
        }
    </script>
</html>