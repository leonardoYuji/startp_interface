<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/box.css">
    <link rel="stylesheet" type="text/css" href="css/text.css">
    <link rel="stylesheet" type="text/css" href="css/tooltip.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Formulário de Usuário</title>
    <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('img/ex.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      min-height: 200vh; /* só pra testar o scroll */
    }
    </style>
</head>
<body>

    <form action="canvasPdf.php" method="post">
        
        <div class="container">

        <!--Business Leaan Model 1/3-->
            <h1 class="sub-title">Criando  o Business Lean Model( visão do deep tech)
                <div class="tooltip"><i class="fa-solid fa-circle-info" id="info"></i>
                <span class="tooltiptext">Obedeça o limite de caracteres de cada elemento, pois cada elemento tem um tamanho limitado predeterminado. Insira o texto com palavras chaves</span>
            </div></h1>
            <div class="box1">
                <label for="keyPartner">Quais são os parceiros chave?</label>
                <textarea id="keyPartner" name="keyPartner" rows="4" class="text-box limit1" required></textarea>
            </div>
            <div class="box1">
                <label for="businessCore">Qual o core business?</label>
                <textarea id="businessCore" name="businessCore" rows="4" class="text-box limit2" required></textarea>
            </div>
            <div class="box1">
                <label for="valueProposition">Qual a proposta única de valor?</label>
                <textarea id="valueProposition" name="valueProposition" rows="4" class="text-box limit1" required></textarea>
            </div>
            <div class="box1">
                <label for="customerRelation">Como será o relacionamento com o cliente?</label>
                <textarea id="customerRelation" name="customerRelation" rows="4" class="text-box limit2" required></textarea>
            </div>
            <div class="box1">
                <label for="customerSegment">Qual o segmento de clientes?</label>
                <textarea id="customerSegment" name="customerSegment" rows="4" class="text-box limit1" required></textarea>
            </div>
            <div class="box1">
                <label for="mainResource">Quais os principais recursos?</label>
                <textarea id="mainResource" name="mainResource" rows="4" class="text-box limit2" required></textarea>
            </div>
            <div class="box1">
                <label for="shellChannel">Quais os canais de venda?</label>
                <textarea id="shellChannel" name="shellChannel" rows="4" class="text-box limit2" required></textarea>
            </div>
            <div class="box1">
                <label for="revenueStream">Quais as fontes de receita?</label>
                <textarea id="revenueStream" name="revenueStream" rows="4" class="text-box limit3" required></textarea>
            </div>
            <div class="box1">
                <label for="costStructure">Qual a estrutura de custos?</label>
                <textarea id="costStructure" name="costStructure" rows="4" class="text-box limit3" required></textarea>
            </div>
            <div class="box1">
                <label for="keyResource">Quais são os recursos chave?</label>
                <textarea id="keyResource" name="keyResource" rows="4" class="text-box limit3" required></textarea>
            </div>
            <div class="box1">
                <label for="alternativeProduct">Quais são as alternativas ao produto da start-up?</label>
                <textarea id="alternativeProduct" name="alternativeProduct" rows="4" class="text-box limit3" required></textarea>
            </div>
                
            <div class="separator"></div>
            <script>
            document.querySelectorAll('.limit1').forEach(function(textarea) {
                let timeoutId;

                textarea.addEventListener('input', function () {
                const elemento = this;

                clearTimeout(timeoutId); // evita múltiplos timeouts empilhados

                timeoutId = setTimeout(function () {
                    if (elemento.value.length > 700) {
                    elemento.value = elemento.value.slice(0, 700);
                    }
                }, 100); // delay de 100 ms
                });
            });
            document.querySelectorAll('.limit2').forEach(function(textarea) {
                let timeoutId;

                textarea.addEventListener('input', function () {
                const elemento = this;

                clearTimeout(timeoutId); // evita múltiplos timeouts empilhados

                timeoutId = setTimeout(function () {
                    if (elemento.value.length > 250) {
                    elemento.value = elemento.value.slice(0, 250);
                    }
                }, 100); // delay de 100 ms
                });
            });
            document.querySelectorAll('.limit3').forEach(function(textarea) {
                let timeoutId;

                textarea.addEventListener('input', function () {
                const elemento = this;

                clearTimeout(timeoutId); // evita múltiplos timeouts empilhados

                timeoutId = setTimeout(function () {
                    if (elemento.value.length > 500) {
                    elemento.value = elemento.value.slice(0, 500);
                    }
                }, 100); // delay de 100 ms
                });
            });
            </script>

        <!--Business Leaan Model 2/3-->
            <!--Devo colocar para receber essas variaveis depois-------------------------- -->
            <h1 class="sub-title">Criando  o Business Lean Model( visão do cliente)</h1>
            <div class="box1">
                <label for="clientProblem">Qual o problema?</label>
                <textarea id="clientProblem" name="clientProblem" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="clientProblemSolution">Qual a solução?</label>
                <textarea id="clientProblemSolution" name="clientProblemSolution" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="uniqueValue">Qual a Proposta Única de Valor?</label>
                <textarea id="uniqueValue" name="uniqueValue" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="clientSegment">Qual será o segmento de cliente?</label>
                <textarea id="clientSegment" name="clientSegment" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="earlyAdopters">Quais os adotantes inicial?</label>
                <textarea id="earlyAdopters" name="earlyAdopters" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="unfairAdvantage">Qual a vantagem injusta?</label>
                <textarea id="unfairAdvantage" name="unfairAdvantage" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="shellChannel2">Quais os canais de venda?</label>
                <textarea id="shellChannel2" name="shellChannel2" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="highLevelConcept">Qual o conceito de alto nível?</label>
                <textarea id="highLevelConcept" name="highLevelConcept" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="costStructure2">Qual a estrutura de custos?</label>
                <textarea id="costStructure2" name="costStructure2" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                Quais as fontes de receitas?
                <textarea id="revenueStream2" name="revenueStream2" rows="4" class="text-box" required></textarea>
            </div>

            <div class="separator"></div>


        <button type="submit">Gerar PDF</button>

        </div>

        
    </form>
</body>
</html>
