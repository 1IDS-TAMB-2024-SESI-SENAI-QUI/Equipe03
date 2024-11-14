<!DOCTYPE html>
<html lang="pt-br" style="margin: -7px">
    <head>
        <meta charset="UTF-8">
        <title>Sais, bases e ácidos!</title>
        <link rel="stylesheet" type="text/css" href="jogo.css">
    </head> 
    <body>
        <main>
            <article id="pergunta4">
            <form method="POST" action="">
                <img class="p4" src="sais1.webp">
                <div>
                <h3>4) Qual das seguintes opções descreve corretamente um sal?</h3>
                    <input type="radio" name="questao4" id="questao4" value="certa">a) É formado pela reação entre um ácido e uma base</input><br>
                    <input type="radio" name="questao4" id="questao4" value="errada"> b) Libera íons H⁺ em solução aquosa</input><br>
                    <input type="radio" name="questao4" id="questao4" value="errada">c) Tem sabor ácido</input><br>
                    <input type="radio" name="questao4" id="questao4" value="errada">d) É insolúvel em água</input><br><br>
                    <input class="responder" type="submit" value="Responder!">
</div>
                </form>
                <?php
                    if(isset($_POST["questao4"])){
                        if ($_POST["questao4"] == "certa" ){
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
            open("Mundo_Dos_Elementos.html","_self");
        }
    </script>
</html>