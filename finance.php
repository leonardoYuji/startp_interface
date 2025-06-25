<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/box.css">
    <link rel="stylesheet" type="text/css" href="css/text.css">
    <link rel="stylesheet" type="text/css" href="css/popup.css">
    <link rel="stylesheet" type="text/css" href="css/tooltip.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Formulário de Usuário</title>
    <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('img/example2.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      min-height: 200vh; /* só pra testar o scroll */
    }
    </style>
</head>
<body>
    <form action="financePDF.php" method="post">
        
        <div class="container">

        
        <!--Alavancagem financeira-->

            <h1 class="sub-title">Alavancagem Financeira</h1>

                <div class="row">
                    Capital próprio investido (R$): 
                    <input type="text" class="text-box2" name="equityCaptal" id="risco-remoto" placeholder="Se inserir 50000.00 equivale a R$50000.00">
                </div>

                <div class="row">
                    Financiamentos ou empréstimos obtidos (R$): 
                    <input type="text" class="text-box2" name="loanFinancing" id="risco-remoto" placeholder="Se inserir 100000.00 equivale a R$100000.00">
                </div>

                <div class="row">
                    Taxa média de juros dos financiamentos (%)
                    <input type="text" class="text-box2" name="averageRate" id="risco-remoto" placeholder="Se inserir 4 equivale a 4%">
                </div>

                <div class="row">
                    Prazo médio de pagamento dos empréstimos (meses):  
                    <input type="text" class="text-box2" name="averageLoan" id="risco-remoto" placeholder="Inserir um número inteiro de meses">
                </div>

                <div class="mark-box">
                    Investidores de risco ou venture capital? (Sim/Não):
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="ventureCaptalInvestor" value="Sim" id="risco-remoto"><label for="risco-remoto">Sim</label></div>
                        <div class="check-item"><input type="radio" name="ventureCaptalInvestor" value="Não" id="risco-moderado"><label for="risco-moderado">Não</label></div>
                    </div>
                </div>

                <div class="row">
                    Se sim, qual o valor investido (R$):  
                    <input type="text" class="text-box2" name="ivestmentAmount" id="risco-remoto" placeholder="Exemplo: 40000.00 equivale a R$40000.00">
                </div>

                <div class="row">
                    Percentual de participação cedida aos investidores (%):   
                    <input type="text" class="text-box2" name="equityShare" id="risco-remoto" placeholder="Exemplo: 30.5 equivale a 30.5%">
                </div>
            

            <div class="separator"></div>
        <!--Receita-->

            <h1 class="sub-title">Projeção de receita</h1>

            <div class="row">
                <label for="revenueForecast">Expectativa de faturamento para o primeiro ano (R$): </label>
                <input type="number" class="text-box2" name="revenueForecast" id="revenueForecast" placeholder="Exemplo: 1000000.00 equivale a R$1000000.00">
            </div>
            <div class="row">
                <label for="monthlyRevenue">Receita mensal estimada (R$): </label>
                <input type="number" class="text-box2" name="monthlyRevenue" id="monthlyRevenue" placeholder="Exemplo: 100000.00 equivale a R$100000.00">
            </div>
            <div class="row">
                <label for="annualRevenue1">Receita anual atual (R$): </label>
                <input type="number" class="text-box2" name="annualRevenue1" id="annualRevenue1" placeholder="Exemplo: 1000000.00 equivale a R$1000000.00">
            </div>
            <div class="row">
                <label for="annualRevenue2">Receita do ano anterior (R$): </label>
                <input type="number" class="text-box2" name="annualRevenue2" id="annualRevenue2" placeholder="Exemplo: 1000000.00 equivale a R$1000000.00">
            </div>

            <div class="row">
                <label for="unitPrice">Quanto você espera cobrar por cada unidade ou serviço oferecido (R$)?</label> 
                <input type="number" class="text-box2" name="unitPrice" id="unitPrice" placeholder="Exemplo: 700.00 equivale a R$700.00">
            </div>

            <h1 class="sub-title">OPEX (Despesas de operacionais)</h1>
            <h2 class="sub-text">Despesas Fixas</h2>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o OPEX cuja despesa é fixa</p>
            <div class="row">
                <label for="opex_fixedCost1">Salários (R$): </label>
                <input type="number" class="text-box2" name="opex_fixedCost1" id="opex_fixedCost1" placeholder="Exemplo: 10000.00 equivale a R$10000.00">
            </div>
            <div class="row">
                <label for="opex_fixedCost2">Aluguel (R$): </label>
                <input type="number" class="text-box2" name="opex_fixedCost2" id="opex_fixedCost2" placeholder="Exemplo: 3000.00 equivale a R$3000.00">
            </div>
            <div class="row">
                <label for="opex_fixedCost3">Internet e telefonia (R$): </label>
                <input type="number" class="text-box2" name="opex_fixedCost3" id="opex_fixedCost3" placeholder="Exemplo: 500.00 equivale a R$500.00">
            </div>
            <div class="row">
                <label for="opex_fixedCost4">Serviços de limpeza (R$): </label>
                <input type="number" class="text-box2" name="opex_fixedCost4" id="opex_fixedCost4" placeholder="Exemplo: 1500.00 equivale a R$1500.00">
            </div>
            <div class="row">
                <label for="opex_fixedCost5"> Assinaturas de software (R$): </label>
                <input type="number" class="text-box2" name="opex_fixedCost5" id="opex_fixedCost5" placeholder="Exemplo: 2000.00 equivale a R$2000.00">
            </div>
            <div class="row">
                <label for="opex_fixedCost7">Custos com serviços terceirizados (R$): </label>
                <input type="number" class="text-box2" name="opex_fixedCost7" id="opex_fixedCost7" placeholder="Exemplo: 10000.00 equivale a R$10000.00">
            </div>
            <div class="row">
                <label for="opex_fixedCost6">Outros (R$): </label>
                <input type="number" class="text-box2" name="opex_fixedCost6" id="opex_fixedCost6" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>

            <h2 class="sub-text">Despesas variáveis</h2>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o OPEX cuja despesa é variável</p>
            <div class="row">
                <label for="variableCost1">Conta de energia elétrica (R$): </label>
                <input type="number" class="text-box2" name="opex_variableCost1" id="variableCost1" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="variableCost2">Conta de água (R$): </label>
                <input type="number" class="text-box2" name="opex_variableCost2" id="variableCost2" placeholder="Exemplo: 500.00 equivale a R$500.00">
            </div>
            <div class="row">
                <label for="variableCost3">Manutenção de equipamentos (R$): </label>
                <input type="number" class="text-box2" name="opex_variableCost3" id="variableCost3" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="variableCost4">Marketing e publicidade (R$): </label>
                <input type="number" class="text-box2" name="opex_variableCost4" id="variableCost4" placeholder="Exemplo: 2000.00 equivale a R$2000.00">
            </div>
            <div class="row">
                <label for="variableCost5">Transporte e logística (R$): </label>
                <input type="number" class="text-box2" name="opex_variableCost5" id="variableCost5" placeholder="Exemplo: 2000.00 equivale a R$2000.00">
            </div>
            <div class="row">
                <label for="variableCost6">outros (R$): </label>
                <input type="number" class="text-box2" name="opex_variableCost6" id="variableCost6" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>

            <h1 class="sub-title no-margin">CAPEX (Despesas de capital)</h1>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o CAPEX</p>
            <div class="row">
                <label for="capex1">Compra de materiais e equipamentos de trabalho (R$): </label>
                <input type="number" class="text-box2" name="capex1" id="capex1" placeholder="Exemplo: 50000.00 equivale a R$50000.00">
            </div>
            <div class="row">
                <label for="capex2">Compra de veículos (R$): </label>
                <input type="number" class="text-box2" name="capex2" id="capex2" placeholder="Exemplo: 100000.00 equivale a R$100000.00">
            </div>
            <div class="row">
                <label for="capex3">Reforma de instalação/contrução de sede (R$): </label>
                <input type="number" class="text-box2" name="capex3" id="capex3" placeholder="Exemplo: 500000.00 equivale a R$500000.00">
            </div>
            <div class="row">
                <label for="capex4">Compra de móveis e mobiliárias (R$): </label>
                <input type="number" class="text-box2" name="capex4" id="capex4" placeholder="Exemplo: 100000.00 equivale a R$100000.00">
            </div>
            <div class="row">
                <label for="capex5">Desenvolvimento de produtos (R$): </label>
                <input type="number" class="text-box2" name="capex5" id="capex5" placeholder="Exemplo: 50000.00 equivale a R$50000.00">
            </div>
            <div class="row">
                <label for="capex6"> Investimento em branding (R$): </label>
                <input type="number" class="text-box2" name="capex6" id="capex6" placeholder="Exemplo: 10000.00 equivale a R$10000.00"> 
            </div>
            <div class="row">
                <label for="capex7">Aquisição de patentes ou direitos autorais (R$): </label>
                <input type="number" class="text-box2" name="capex7" id="capex7" placeholder="Exemplo: 600.00 equivale a R$600.00">
            </div>
            <div class="row">
                <label for="capex8">Compra de licenças de operação vitalícias (R$): </label>
                <input type="number" class="text-box2" name="capex8" id="capex8" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="capex9">Aquisição de franquia (R$): </label>
                <input type="number" class="text-box2" name="capex9" id="capex9" placeholder="Exemplo: 100000.00 equivale a R$100000.00">
            </div>
            <div class="row">
                <label for="capex10">outros (R$): </label>
                <input type="number" class="text-box2" name="capex10" id="capex10" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            
            <div class="separator"></div>

           
        <!--Capital e divida-->

            <h1 class="sub-title">Estimativa mensal do custo de aquisição de clientes</h1>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o custo de aquisição de novos clientes</p>

                <div class="row">
                    <label for="marketingCost">Gastos com marketig (R$):</label>
                    <input type="number" class="text-box2" name="marketingCost" id="marketingCost" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
                </div>

                <div class="row">
                    <label for="sellingCost">Gastos com vendas (R$):</label> 
                    <input type="number" class="text-box2" name="sellingCost" id="sellingCost" placeholder="Exemplo: 500.00 equivale a R$500.00">
                </div>

                <div class="row">
                    <label for="customerAcquired">Número de clientes adquiridos:</label> 
                    <input type="number" class="text-box2" name="customerAcquired" id="customerAcquired" placeholder="Inserir um número inteiro de clientes">
                </div>
            <div class="separator"></div>

            <h1 class="sub-title">MOIC - Multiple on Invested Capital</h1>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o MOIC</p>

                <div class="row">
                    <label for="investment">Capital investido (R$):</label>
                    <input type="number" class="text-box2" name="investment" id="investment" placeholder="Exemplo: 100000.00 equivale a R$100000.00">
                </div>

                <div class="row">
                    <label for="totalReturn">Valor total retornado (R$):</label> 
                    <input type="number" class="text-box2" name="totalReturn" id="totalReturn" placeholder="Exemplo: 120000.00 equivale a R$120000.00">
                </div>

            <div class="separator"></div>

            <h1 class="sub-title">Valuation pelo método Berkus
            <div class="tooltip"><i class="fa-solid fa-circle-info" id="info"></i>
                <span class="tooltiptext">A somatória de todos os pesos deve resultar em 100, caso contrário a média ficará incorreta</span>
            </div></h1>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o valuation pelo método Berkus</p>
            
            <label>Força da equipe de gerenciamento:</label>
            <div class="row">
                <label for="valuation_weight1">Peso (%): </label>
                <input type="number" class="text-box2 soma" name="valuation_weight1" id="valuation_weight1" placeholder="Insira um valor entre 0 e 100">
                <label class="space-left" for="valuation_score1">Nota: </label>
                <input type="number" class="text-box2" name="valuation_score1" id="valuation_score1" placeholder="Insira uma nota entre 0 e 100">
            </div>

            <label>Força da equipe de gerenciamento:</label>
            <div class="row">
                <label for="valuation_weight2">Peso (%): </label>
                <input type="number" class="text-box2 soma" name="valuation_weight2" id="valuation_weight2" placeholder="Insira um valor entre 0 e 100">
                <label class="space-left" for="valuation_score2">Nota: </label>
                <input type="number" class="text-box2" name="valuation_score2" id="valuation_score2" placeholder="Insira uma nota entre 0 e 100">
            </div>

            <label>Força da equipe de gerenciamento:</label>
            <div class="row">
                <label for="valuation_weight3">Peso (%): </label>
                <input type="number" class="text-box2 soma" name="valuation_weight3" id="valuation_weight3" placeholder="Insira um valor entre 0 e 100">
                <label class="space-left" for="valuation_score3">Nota: </label>
                <input type="number" class="text-box2" name="valuation_score3" id="valuation_score3" placeholder="Insira uma nota entre 0 e 100">
            </div>

            <label>Força da equipe de gerenciamento:</label>
            <div class="row">
                <label for="valuation_weight4">Peso (%): </label>
                <input type="number" class="text-box2 soma" name="valuation_weight4" id="valuation_weight4" placeholder="Insira um valor entre 0 e 100">
                <label class="space-left" for="valuation_score4">Nota: </label>
                <input type="number" class="text-box2" name="valuation_score4" id="valuation_score4" placeholder="Insira uma nota entre 0 e 100">
            </div>

            <label>Força da equipe de gerenciamento:</label>
            <div class="row">
                <label for="valuation_weight5">Peso (%): </label>
                <input type="number" class="text-box2 soma" name="valuation_weight5" id="valuation_weight5" placeholder="Insira um valor entre 0 e 100">
                <label class="space-left" for="valuation_score5">Nota: </label>
                <input type="number" class="text-box2" name="valuation_score5" id="valuation_score5" placeholder="Insira uma nota entre 0 e 100">
            </div>

            <label>Força da equipe de gerenciamento:</label>
            <div class="row">
                <label for="valuation_weight6">Peso (%): </label>
                <input type="number" class="text-box2 soma" name="valuation_weight6" id="valuation_weight6" placeholder="Insira um valor entre 0 e 100">
                <label class="space-left" for="valuation_score6">Nota: </label>
                <input type="number" class="text-box2" name="valuation_score6" id="valuation_score6" placeholder="Insira uma nota entre 0 e 100">
            </div>

            <label>Força da equipe de gerenciamento:</label>
            <div class="row">
                <label for="valuation_weight7">Peso (%): </label>
                <input type="number" class="text-box2 soma" name="valuation_weight7" id="valuation_weight7" placeholder="Insira um valor entre 0 e 100">
                <label class="space-left" for="valuation_score7">Nota: </label>
                <input type="number" class="text-box2" name="valuation_score7" id="valuation_score7" placeholder="Insira uma nota entre 0 e 100">
            </div>

            <label>Força da equipe de gerenciamento:</label>
            <div class="row">
                <label for="valuation_weight8">Peso (%): </label>
                <input type="number" class="text-box2 soma" name="valuation_weight8" id="valuation_weight8" placeholder="Insira um valor entre 0 e 100">
                <label class="space-left" for="valuation_score8">Nota: </label>
                <input type="number" class="text-box2" name="valuation_score8" id="valuation_score8" placeholder="Insira uma nota entre 0 e 100">
            </div>

            <h3>Somatório: <span id="resultado">0</span></h3>

            <script>
                function atualizarSoma() {
                    const inputs = document.querySelectorAll(".soma");
                    let soma = 0;
                    inputs.forEach(input => {
                        soma += parseFloat(input.value) || 0;
                    });

                    const resultado = document.getElementById("resultado");

                    if (soma === 100) {
                        resultado.style.color = "black";
                        resultado.textContent = "somatoria: 100";
                    } else {
                        resultado.style.color = "red";
                        if (soma < 100) {
                        resultado.textContent = "somatoria: valor abaixo";
                        } else {
                        resultado.textContent = "somatoria: valor acima";
                        }
                    }
                }

                    document.querySelectorAll(".soma").forEach(input => {
                    input.addEventListener("input", atualizarSoma);
                });

                atualizarSoma(); // Atualiza no carregamento inicial
            </script>
            <div class="separator"></div>

            <h1 class="sub-title">CoGS (Custos aos bens vendidos)</h1>
            <h2 class="sub-text">CoGS (Custos aos bens vendidos)</h2>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o CoGS</p>
            <div class="row">
                <label for="cogs1">Salário (R$): </label>
                <input type="number" class="text-box2" name="cogs1" id="cogs1" placeholder="Exemplo: 10000.00 equivale a R$10000.00">
            </div>
            <div class="row">
                <label for="cogs2">Materiais diretos (R$): </label>
                <input type="number" class="text-box2" name="cogs2" id="cogs2" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="cogs3">Serviços essenciais de terceiros (R$): </label>
                <input type="number" class="text-box2" name="cogs3" id="cogs3" placeholder="Exemplo: 5000.00 equivale a R$5000.00">
            </div>
            <div class="row">
                <label for="cogs4">Uso direto de infraestrutura (R$): </label>
                <input type="number" class="text-box2" name="cogs4" id="cogs4" placeholder="Exemplo: 2000.00 equivale a R$2000.00">
            </div>
            <div class="row">
                <label for="cogs5">Outros (R$): </label>
                <input type="number" class="text-box2" name="cogs5" id="cogs5" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>

            <h2 class="sub-text">MRR (Receita recorrente mensal)</h2>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o MRR</p>
            <div class="row">
                <label for="mrr1">Valor mensal pago pelos clientes fixos (R$): </label>
                <input type="number" class="text-box2" name="mrr1" id="mrr1" placeholder="Exemplo: 10000.00 equivale a R$10000.00">
            </div>
            <div class="row">
                <label for="mrr2">Quantidade de clientes recorrentes: </label>
                <input type="number" class="text-box2" name="mrr2" id="mrr2" placeholder="Inserir um número inteiro de clientes">
            </div>
        
            <div class="separator"></div>
        <!--Receita-->

            <h1 class="sub-title">LCC - Custo do ciclo de vida</h1>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o LCC</p>

            <div class="row">
                <label for="LCC1">CPP - Custo de Pesquisa e Projeto (R$): </label>
                <input type="number" class="text-box2" name="LCC1" id="LCC1" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="LCC2">CA - Custo de Aquisição (R$): </label>
                <input type="number" class="text-box2" name="LCC2" id="LCC2" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="LCC3">CIC - Custo de Instalação e Comissionamento (R$): </label>
                <input type="number" class="text-box2" name="LCC3" id="LCC3" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="LCC4">COM - Custo de Operação e Manutenção (R$): </label>
                <input type="number" class="text-box2" name="LCC4" id="LCC4" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="LCC5">CDD - Custo de Desisntalação e Descomissionamento (R$): </label>
                <input type="number" class="text-box2" name="LCC5" id="LCC5" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="LCC6">CD - Custo de Descarte (R$): </label>
                <input type="number" class="text-box2" name="LCC6" id="LCC6" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>

            <div class="separator"></div>
        <!--Receita-->

            <h1 class="sub-title">EBITDA - Lucro antes de impostos, juros, amortização e depreciação</h1>
            <p class="warning">*Os elementos abaixo serão utilizados para calcular o LCC</p>

            <div class="row">
                <label for="EBITDA1">Receita líquida (R$): </label>
                <input type="number" class="text-box2" name="EBITDA1" id="EBITDA1" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>
            <div class="row">
                <label for="EBITDA2">Custos dos produtos vendidos (R$): </label>
                <input type="number" class="text-box2" name="EBITDA2" id="EBITDA2" placeholder="Exemplo: 1000.00 equivale a R$1000.00">
            </div>

            
        <button type="submit">Gerar PDF</button>

        </div>

        
    </form>
</body>
</html>
