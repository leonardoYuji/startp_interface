<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/box.css">
    <link rel="stylesheet" type="text/css" href="css/text.css">
    <title>Formulário de Usuário</title>
</head>
<body>
    <form action="gerar_pdf.php" method="post">
        
        <div class="container">

        <!--cabeçalho-->
            <div class="box1">
                <label for="startupName">Nome da startup</label>
                <input type="text" id="startupName" name="startupName" class="text-box" required>
            </div>
            <div class="box1">
                <label for="startupDescription">Descrição das atividades</label>
                <textarea id="startupDescription" name="startupDescription" rows="4" class="text-box" required></textarea>
            </div>

            <div class="separator"></div>

        <!--Sobre a startup 1/3-->
            <div class="box1">
                <label for="targetAudience">Qual seu público-alvo?</label>
                <input type="text" id="targetAudience" name="targetAudience" class="text-box" required>
            </div>

            <div class="box1">
                <label for="mainProduct">Qual o principal produto que sua startup oferece?</label>
                <input type="text" id="mainProduct" name="mainProduct" class="text-box" required>
            </div>

            <label for="filmTitle">Qual sua receita:</label>
            <div class="checklist-box">
                <div class="check-column">
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="Licensing"><label> Licensing</label></div>
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="SaaS"><label> SaaS</label></div>
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="Vendas Diretas"><label> Vendas Diretas</label></div>
                </div>
                <div class="check-column">
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="Consultorias"><label> Consultorias</label></div>
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="Subscrições"><label> Subscrições</label></div>
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="Funding"><label> Funding</label></div>
                </div>
                <div class="check-column">
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="Marketplace"><label> Marketplace</label></div>
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="Modelo Freemium"><label> Modelo Freemium</label></div>
                    <div class="check-item"><input type="checkbox" name="revenue[]" value="Dados"><label> Dados</label></div>
                </div>
            </div>

            <div class="separator"></div>
        <!--Sobre a startup 2/3-->
                <label for="filmTitle">Principal tipo de negocio da startup</label>
                <div class="checklist-box">
                    <div class="check-column">                            
                        <div class="check-item"><input type="checkbox" name="mainNegotiation[]" value="B2B"><label> B2B</label></div>
                        <div class="check-item"><label><input type="checkbox" name="mainNegotiation[]" value="B2C"> B2C</label></div>
                        <div class="check-item"><label><input type="checkbox" name="mainNegotiation[]" value="Serviços"> Serviços</label></div>
                    </div>
                    <div class="check-column">
                        <div class="check-item"><label><input type="checkbox" name="mainNegotiation[]" value="C2B"> C2B</label></div>
                        <div class="check-item"><label><input type="checkbox" name="mainNegotiation[]" value="C2C"> C2C</label></div>
                        <div class="check-item"><label><input type="checkbox" name="mainNegotiation[]" value="Tecnologia"> Tecnologia</label></div>
                    </div>
                    <div class="check-column">
                        <div class="check-item"><label><input type="checkbox" name="mainNegotiation[]" value="Franquia"> Franquia</label></div>
                        <div class="check-item"><label><input type="checkbox" name="mainNegotiation[]" value="B2B2C"> B2B2C</label></div>
                        <div class="check-item"><label><input type="checkbox" name="mainNegotiation[]" value="B2B2C2G"> B2B2C2G</label></div>
                    </div>
                </div>

            <div class="separator"></div>            
        <!--Sobre a startup 3/3-->
            <div class="box1">
                <label for="startupSegment">Informe o segmento principal da startup</label>
                <input type="text" id="startupSegment" name="startupSegment" class="text-box" required>
            </div>
            <div class="box1">
                <label for="startupVision">Visão estratégica</label>
                <input type="text" id="startupVision" name="startupVision" class="text-box" required>
            </div>
            <div class="box1">
                <label for="startupMission">Missão</label>
                <input type="text" id="startupMission" name="startupMission" class="text-box" required>
            </div>
            <div class="box1">
                <label for="startupValue">Valor</label>
                <input type="text" id="startupValue" name="startupValue" class="text-box" required>
            </div>
            <div class="box1">
                <label for="startupMotto">Lema</label>
                <input type="text" id="startupMotto" name="startupMotto" class="text-box" required>
            </div>

            <div class="separator"></div>
        <!--Business Leaan Model 1/3-->
            <h1 class="sub-title">Criando  o Business Lean Model( visão do deep tech)</h1>
            <div class="box1">
                <label for="keyPartner">Quais são os parceiros chave?</label>
                <textarea id="keyPartner" name="keyPartner" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="businessCore">Qual o core business?</label>
                <textarea id="businessCore" name="businessCore" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="valueProposition">Qual a proposta única de valor?</label>
                <textarea id="valueProposition" name="valueProposition" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="customerRelation">Como será o relacionamento com o cliente?</label>
                <textarea id="customerRelation" name="customerRelation" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="customerSegment">Qual o segmento de clientes?</label>
                <textarea id="customerSegment" name="customerSegment" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="mainResource">Quais os principais recursos?</label>
                <textarea id="mainResource" name="mainResource" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="shellChannel">Quais os canais de venda?</label>
                <textarea id="shellChannel" name="shellChannel" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="revenueStream">Quais as fontes de receita?</label>
                <textarea id="revenueStream" name="revenueStream" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="costStructure">Qual a estrutura de custos?</label>
                <textarea id="costStructure" name="costStructure" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="keyResource">Quais são os recursos chave?</label>
                <textarea id="keyResource" name="keyResource" rows="4" class="text-box" required></textarea>
            </div>
            <div class="box1">
                <label for="alternativeProduct">Quais são as alternativas ao produto da start-up?</label>
                <textarea id="alternativeProduct" name="alternativeProduct" rows="4" class="text-box" required></textarea>
            </div>
                
            <div class="separator"></div>

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

        <!--Business Leaan Model 3/3-->
            <h1 class="sub-title">Criando o Business Lean Model( visão do jurídica da startup)</h1>
            
            <div class="box1">
                <div class="mark-box">
                    Qual a atividade e regulamentação?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="activityRegulationRisc" id="activityRegulationRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="activityRegulationRisc" id="activityRegulationRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="activityRegulationRisc" id="activityRegulationRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="activityRegulation" name="activityRegulation" class="text-box" required>
            </div>

            <div class="box1">
                <div class="mark-box">
                    Quem são os sócios?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="partnersRisc" id="partnersRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="partnersRisc" id="partnersRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="partnersRisc" id="partnersRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="partners" name="partners" class="text-box" required>
            </div>            

            <div class="box1">
                <div class="mark-box">
                    Quem são os consumidores?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="consumersRisc" id="consumersRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="consumersRisc" id="consumersRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="consumersRisc" id="consumersRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="consumers" name="consumers" class="text-box" required>
            </div> 

            <div class="box1">
                <div class="mark-box">
                    Quais os recursos humanos?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="humanResourcesRisc" id="humanResourcesRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="humanResourcesRisc" id="humanResourcesRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="humanResourcesRisc" id="humanResourcesRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="humanResources" name="humanResources" class="text-box size" required>
            </div> 

            <div class="box1">
                <div class="mark-box">
                    Como serão os contratos?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="contractsRisc" id="contractsRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="contractsRisc" id="contractsRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="contractsRisc" id="contractsRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="contracts" name="contracts" class="text-box size" required>
            </div> 

            <div class="box1">
                <div class="mark-box">
                    Internet e proteção dos dados?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="dataProtectionRisc" id="dataProtectionRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="dataProtectionRisc" id="dataProtectionRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="dataProtectionRisc" id="dataProtectionRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="dataProtection" name="dataProtection" class="text-box size" required>
            </div> 

            <div class="box1">
                <div class="mark-box">
                    Qual será a natureza da sociedade?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="businessStructureRisc" id="businessStructureRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="businessStructureRisc" id="businessStructureRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="businessStructureRisc" id="businessStructureRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="businessStructure" name="businessStructure" class="text-box size" required>
            </div> 

            <div class="box1">
                <div class="mark-box">
                    Quem são os investidores?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="investorsRisc" id="investorsRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="investorsRisc" id="investorsRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="investorsRisc" id="investorsRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="investors" name="investors" class="text-box size" required>
            </div> 

            <div class="box1">
                <div class="mark-box">
                    Propriedade intelectual?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="intellectualPropertyRisc" id="intellectualPropertyRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="intellectualPropertyRisc" id="intellectualPropertyRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="intellectualPropertyRisc" id="intellectualPropertyRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="intellectualProperty" name="intellectualProperty" class="text-box size" required>
            </div> 

            <div class="box1">
                <div class="mark-box">
                    Como se dará a tributação?(Risco:)
                    <div class="mark-itens">
                        <div class="check-item"><input type="radio" name="taxationRisc" id="taxationRisc" value="remoto"><label for="risco-remoto"> Remoto</label></div>
                        <div class="check-item"><input type="radio" name="taxationRisc" id="taxationRisc" value="moderado"><label for="risco-moderado"> Moderado</label></div>
                        <div class="check-item"><input type="radio" name="taxationRisc" id="taxationRisc" value="alto"><label for="risco-alto"> Alto</label></div>
                    </div>
                </div>
                <input type="text" id="taxation" name="taxation" class="text-box size" required>
            </div> 

            <div class="separator"></div>

        <!--Estagio do projeto-->
            <div class="box1">
                <h1 class="sub-title">Funding</h1>
                <label for="filmTitle">Em qual das seguintes etapas encontra-se sua start-up?</label>
                <div class="checklist-box">
                    <div class="check-column">                            
                        <div class="check-item"><input type="checkbox" name="projectStage[]" value="Ideation"><label> Ideação</label></div>
                        <div class="check-item"><label><input type="checkbox" name="projectStage[]" value="Concept"> Conceito</label></div>
                        <div class="check-item"><label><input type="checkbox" name="projectStage[]" value="Seed"> Semente</label></div>
                        <div class="check-item"><label><input type="checkbox" name="projectStage[]" value="Development"> Desenvolvimento</label></div>
                        <div class="check-item"><label><input type="checkbox" name="projectStage[]" value=" MVP (Minimum Viable Product)"> MVP</label></div>
                    </div>
                </div>
            </div>

            <div class="separator"></div>
        <!--Alavancagem financeira-->

            <h1 class="sub-title">Alavancagem Financeira</h1>

                <div class="row">
                    Capital próprio investido (R$): 
                    <input type="text" class="text-box2" name="equityCaptal" id="risco-remoto">
                </div>

                <div class="row">
                    Financiamentos ou empréstimos obtidos (R$): 
                    <input type="text" class="text-box2" name="loanFinancing" id="risco-remoto">
                </div>

                <div class="row">
                    Taxa média de juros dos financiamentos (%)
                    <input type="text" class="text-box2" name="averageRate" id="risco-remoto">
                </div>

                <div class="row">
                    Prazo médio de pagamento dos empréstimos (meses):  
                    <input type="text" class="text-box2" name="averageLoan" id="risco-remoto">
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
                    <input type="text" class="text-box2" name="ivestmentAmount" id="risco-remoto">
                </div>

                <div class="row">
                    Percentual de participação cedida aos investidores (%):   
                    <input type="text" class="text-box2" name="equityShare" id="risco-remoto">
                </div>
            

            <div class="separator"></div>
        <!--Receita-->

            <h1 class="sub-title">Projeção de despesa e receita</h1>
            <h2 class="sub-text">Receita anual estimada</h2>

            <div class="box1">
                <label for="revenueForecast">Qual a expectativa de faturamento para o primeiro ano?</label>
                <textarea id="revenueForecast" name="revenueForecast" class="text-box" rows="4" required></textarea>
            </div>

            <div class="row">
                <label for="unitPrice">Quanto você espera cobrar por cada unidade ou serviço oferecido (R$)?</label> 
                <input type="text" class="text-box2" name="unitPrice" id="unitPrice">
            </div>

            <h2 class="sub-text" style="margin-top: 20px;">Estimativa de despesas</h2>

            <div class="row">
                <label for="fixedCost">Despesas fixas (aluguel, salários, internet, etc.):</label>
                <input type="text" class="text-box2" name="fixedCost" id="fixedCost">
            </div>

            <div class="row">
                <label for="variableCost">Despesas variáveis (custos de produção, marketing, etc.)</label> 
                <input type="text" class="text-box2" name="variableCost" id="variableCost">
            </div>
            <div class="separator"></div>

        <!--Capital e divida-->

            <h1 class="sub-title">Estimativa do capital próprio e dívidas</h1>

                <div class="row">
                    <label for="equilityIvestiment">Quanto foi investido do próprio bolso ou de sócios até agora?</label>
                    <input type="text" class="text-box2" name="equilityIvestiment" id="equilityIvestiment">
                </div>

                <div class="row">
                    <label for="loanAndCredit">Qual o valor que você possui de empréstimos, financiamentos ou crédito com fornecedores?</label> 
                    <input type="text" class="text-box2" name="loanAndCredit" id="loanAndCredit">
                </div>
            <div class="separator"></div>

        <!--EBTIDA-->
            <h1 class="sub-title">EBITDA e margem operacional estimada</h1>

                <div class="row2">
                    <label for="expectFirstYear">Qual é a expectativa de lucro ou prejuízo no primeiro ano?</label>
                    <input type="text" class="text-box2" name="expectFirstYear" id="expectFirstYear">
                </div>
            <div class="separator"></div>

        <!--Sobre a startup 1/5-->

            <h1 class="sub-title">Costumer experience design</h1>
            <h1 class="sub-text">Perfil do cliente</h1>

            <div class="row">
                <label for="filmTitle">Qual o perfil demográfico do cliente?</label>
            </div>


            <div class="row">
                <label for="ClientAge">Faixa etária:</label>
                <input type="text" class="text-box2" name="clintAgeMin" id="clintAgeMin">
                <input type="text" class="text-box2" name="clintAgeMax" id="clintAgeMax">
            </div>

            <div class="row">
                <label for="localization">Localização:</label>
                <input type="text" class="text-box2" name="localization" id="localization">
            </div>

            <div class="row">
                <label>Qual é a frequência de uso do produto/serviço?</label>
            </div>

            <div class="mark-box">
                <div class="mark-itens">
                    <div class="check-item"><input type="radio" name="frequencyUse" id="frequencyUse" value="Diario"><label for="risco-remoto"> Diário</label></div>
                    <div class="check-item"><input type="radio" name="frequencyUse" id="frequencyUse" value="Mensal"><label for="risco-alto"> Mensal</label></div>
                    <div class="check-item"><input type="radio" name="frequencyUse" id="frequencyUse" value="Semanal"><label for="risco-moderado"> Semanal</label></div>
                    <div class="check-item"><input type="radio" name="frequencyUse" id="frequencyUse" value="Esporadica"><label for="risco-alto"> Esporádica</label></div>
                </div>
            </div>

            <h1 class="sub-text">Jornada do cliente</h1>

            <div class="box1">
                <label for="filmTitle">Quais são as etapas principais da interação do cliente?</label>
                <div class="checklist-box">
                    <div class="check-column" style="width:70%;">                            
                        <div class="check-item"><input type="radio" name="mainClientInteraction" id="mainClientInteraction" value="Pesquisa e descoberta"><label>Pesquisa e descoberta</label></div>
                        <div class="check-item"><input type="radio" name="mainClientInteraction" id="mainClientInteraction" value="Compra e pagamento"><label>Compra e pagamento</label></div>
                        <div class="check-item"><input type="radio" name="mainClientInteraction" id="mainClientInteraction" value="Uso do produto/serviço"><label>Uso do produto/serviço</label></div>
                        <div class="check-item"><input type="radio" name="mainClientInteraction" id="mainClientInteraction" value="Suporte e atendimento pos-venda"><label>Suporte e atendimento pós-venda</label></div>
                    </div>
                </div>
            </div>

            <!-- Eu acho que tem que revisar-->
            <div class="box1">
                <label for="filmTitle">Quantos dias leva a jornada completa, em média?</label>
                <div class="checklist-box">
                    <div class="check-column">                            
                        <div class="check-item"><input type="radio"><label>Pesquisa e descoberta</label></div>
                    </div>
                </div>
            </div>
            
            <h1 class="sub-text">Pontos de contato (touchpoints)</h1>

            <div class="row">
                <label for="filmTitle">Por quais canais o cliente se comunica?</label>
            </div>

            <div class="mark-box">
                <div class="mark-itens">
                    <div class="check-item"><input type="checkbox" name="comunicationChannel[]" id="comunicationChannel[]" value="Loja fisica"><label for="comunicationChannel">Loja física</label></div>
                    <div class="check-item"><input type="checkbox" name="comunicationChannel[]" id="comunicationChannel[]" value="Website"><label for="comunicationChannel">Website</label></div>
                    <div class="check-item"><input type="checkbox" name="comunicationChannel[]" id="comunicationChannel[]" value="Aplicativo"><label for="comunicationChannel">Aplicativo</label></div>
                    <div class="check-item"><input type="checkbox" name="comunicationChannel[]" id="comunicationChannel[]" value="Redes sociais"><label for="comunicationChannel">Redes sociais</label></div>
                    <div class="check-item"><input type="checkbox" name="comunicationChannel[]" id="comunicationChannel[]" value="Atendimento telefonico"><label for="comunicationChannel">Atendimento telefônico</label></div>
                </div>
            </div>

            <div class="row">
                <label for="mainComunicationChannel">Qual canal é o mais utilizado?</label>
                <input type="text" class="text-box2" name="mainComunicationChannel" id="mainComunicationChannel">
            </div>

            <h1 class="sub-text">Pain points (Pontos de dor)</h1>

            <div class="row">
                <label for="mainProblemRelated">Quais são os principais problemas relatados pelos clientes?</label>
                <input type="text" class="text-box2" name="mainProblemRelated" id="mainProblemRelated">
            </div>     
            
            <h1 class="sub-text">Expectativas e necessidades</h1>

            <div class="box1">
                <label for="mostValuedExperience">O que o cliente mais valoriza na experiência?</label>
                <textarea id="mostValuedExperience" name="mostValuedExperience" class="text-box" rows="2" required></textarea>
            </div>

            <div class="box1">
                <label for="suggestionImprovement">Há sugestões recorrentes de melhoria?</label>
                <textarea id="suggestionImprovement" name="suggestionImprovement" rows="2" class="text-box" required></textarea>
            </div>

            <div class="separator"></div>

        <!--Sobre a startup 1/5-->
            <div class="box1">
                <label for="ethicsCode">Sua Startup já possui um código de ética? Se sim, resuma esse código</label>
                <textarea id="ethicsCode" name="ethicsCode" class="text-box" rows="2" required></textarea>
            </div>

            <div class="box1">
                <label for="organizationalStructure">Qual a Estrutura Organizacional da Startup?</label>
                <textarea id="organizationalStructure" name="organizationalStructure" class="text-box" rows="2" required></textarea>
            </div>

            <div class="box1">
                <label for="teamCompetencies">Elaboração de competências da Equipe Deep Tech:</label>
                <textarea id="teamCompetencies" name="teamCompetencies" class="text-box" rows="2" required></textarea>
            </div>

            <div class="box1">
                <label for="employerBranding">Employer Branding (É o conjunto de técnicas, práticas e atividades implementadas para gerar uma percepção positiva da empresa enquanto ambiente de trabalho.  Employer branding é uma estratégia de marketing utilizada para gerar uma imagem positiva sobre a empresa). Escreva 10 pilares do employer branding da sua startu-up:</label>
                <textarea id="employerBranding" name="employerBranding" class="text-box" rows="2" required></textarea>
            </div>


        <button type="submit">Gerar PDF</button>

        </div>

        
    </form>
</body>
</html>
