<html>
    <head>
        <meta utf="utf8_decode">
        <title> Calculadora Simples </title>
        <link rel="stylesheet" href="calculadora.css">
    </head>
    <body>
        <h1 class = "titulo"> Calculadora Simples </h1>
        <form method="GET" action="/calculadoraphp_css/">
            <div class="calculo">
        <label for="num1">Num1:</label><br>
            <input type="number" name="n1"><br>
            <label for="num2">Num2:</label><br>
            <input type="number" name="n2"><br>
            <input class="botao" type="submit" value="Calcular">
            </div>
            <fieldset style="margin-right: 1000;">                
                <legend>Operações</legend>
                <input type="radio" name="op" value="soma" checked>Soma</input><br>
                <input type="radio" name="op" value="subtração">Subtração</input>
                <input type="radio" name="op" value="divisão">Divisão</input>
                <input type="radio" name="op" value="multiplicacao">Multiplicação</input>
                <input type="radio" name="op" value="resto">resto</input>
            </fieldset>
        </form>
        <?php

            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                if(isset($_GET['n1']) and isset($_GET['n2'])){
                    $n1 = $_GET['n1'];
                    $n2 = $_GET['n2'];
        
                    function multiplicacao(){
                        return $GLOBALS['n1'] * $GLOBALS['n2'];
                    }

                    function divisão(){
                        return $GLOBALS['n1'] / $GLOBALS['n2'];
                    }


                    function soma(){
                        return $GLOBALS['n1'] + $GLOBALS['n2'];
                    }

                    function subtracao(){
                        return $GLOBALS['n1'] - $GLOBALS['n2'];
                    }

                    function resto(){
                        return $GLOBALS['n1'] % $GLOBALS['n2'];
                    }



       
                    switch ($_GET['op']) {
                        case (($_GET['op']) == 'soma'):
                            echo "<h1 class= resultado> $n1 + $n2 = " .soma(). "</h1>";
                            break;
                        case (($_GET['op']) == 'subtração'):
                            echo "<h1 class= resultado> $n1 - $n2 =" .subtracao(). "</h1>";
                            break;
                        case (($_GET['op']) == "divisão"):
                            echo "<h1 class= resultado> $n1 / $n2 = " .divisão(). "</h1>";
                            break;
                        case (($_GET['op']) == "multiplicacao"):
                            echo "<h1 class= resultado > $n1 x $n2 =" .multiplicacao(). "</h1>";
                            break;
                        case (($_GET['op']) == "resto"):
                            echo "<h1 class= resultado > $n1 % $n2 =" .resto(). "</h1>";
                            break;
                            
                        }
                    }

                }
            

        ?>
    </body>
</html>