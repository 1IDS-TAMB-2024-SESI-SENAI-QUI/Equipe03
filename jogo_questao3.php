<!DOCTYPE html>
<html lang="pt-br" style="margin: -7px">
    <head>
        <meta charset="UTF-8">
        <title>Sais, bases e ácidos!</title>
        <link rel="stylesheet" type="text/css" href="jogo.css">
    </head> 
    <body>
        <main>
            <article id="pergunta3">
                <form method="POST" action="">
                <img class="p3" src="ac5.webp">
                <div>
                <h3>3) Qual das seguintes afirmações descreve corretamente uma característica dos ácidos?</h3>
                    <input type="radio" name="questao3" id="questao3" value="error">a) Têm sabor adocicado</input><br>
                    <input type="radio" name="questao3" id="questao3" value="error"> b) Liberam íons OH⁻ em solução</input><br>
                    <input type="radio" name="questao3" id="questao3" value="correct">c) Liberam íons H⁺ em solução aquosa</input><br>
                    <input type="radio" name="questao3" id="questao3" value="error">d) Neutralizam bases para formar água e sal</input></input><br><br>
                    <input class="responder" type="submit" value="Responder!">
</div>
                </form>
                <?php
                    if(isset($_POST["questao3"])){
                        if ($_POST["questao3"] == "correct" ){
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
            open("jogo_questao4.php","_self");
        }
    </script>
</html>