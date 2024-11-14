<!DOCTYPE html>
<html lang="pt-br" style="margin: -7px">
    <head>
        <meta charset="UTF-8">
        <title>Sais, bases e ácidos!</title>
        <link rel="stylesheet" type="text/css" href="jogo.css">
       
    </head> 
    <body>
        <main>
            <article id="pergunta1">
                <form method="POST" action="">
                <div>
                <h3>1) Qual imagem representa um sal?</h3>
                    <input type="radio" name="questao1" id="questao1" value="bases"> <img height="30%" width="30%" class="bases" src="https://image.made-in-china.com/202f0j00WZykfmiRrFoQ/Caustic-Soda-50-Industrial-Grade-Caustic-Soda-Solution-Naoh.webp"><br>
                    <input type="radio" name="questao1" id="questao1" value="sais"> <img height="30%" width="30%" class="sais" src="https://www.chemicals.co.uk/wp-content/uploads/2021/09/NaCl-written-in-salt-scaled-1.webp"><br>
                    <input type="radio" name="questao1" id="questao1" value="acidos"> <img height="30%" width="30%" class="acidos" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Salpetersaeure.jpg/177px-Salpetersaeure.jpg"><br><br>
                    <input class="responder" type="submit" value="Responder!">
                </div>
                </form>
                <?php
                    if(isset($_POST["questao1"])){
                        if ($_POST["questao1"] == "sais" ){
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
            open("jogo_questao2.php","_self");
        }
    </script>
</html>
