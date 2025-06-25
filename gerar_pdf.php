<?php
require_once __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados do formulário
    $startupName = htmlspecialchars($_POST['startupName']);
    $startupDescription = htmlspecialchars($_POST['startupDescription']);

    $targetAudience = htmlspecialchars($_POST['targetAudience']);
    $mainProduct = htmlspecialchars($_POST['mainProduct']);
    $revenue = isset($_POST['revenue']) ? $_POST['revenue'] : [];
    $mainNegotiation = isset($_POST['mainNegotiation']) ? $_POST['mainNegotiation'] : [];

    $startupSegment = htmlspecialchars($_POST['startupSegment']);
    $startupVision = htmlspecialchars($_POST['startupVision']);
    $startupMission = htmlspecialchars($_POST['startupMission']);
    $startupValue = htmlspecialchars($_POST['startupValue']);
    $startupMotto = htmlspecialchars($_POST['startupMotto']);

    $keyPartner = htmlspecialchars($_POST['keyPartner']);
    $businessCore = htmlspecialchars($_POST['businessCore']);
    $valueProposition = htmlspecialchars($_POST['valueProposition']);
    $customerRelation = htmlspecialchars($_POST['customerRelation']);
    $customerSegment = htmlspecialchars($_POST['customerSegment']);
    $mainResource = htmlspecialchars($_POST['mainResource']);
    $shellChannel = htmlspecialchars($_POST['shellChannel']);
    $revenueStream = htmlspecialchars($_POST['revenueStream']);
    $costStructure = htmlspecialchars($_POST['costStructure']);
    $keyResource = htmlspecialchars($_POST['keyResource']);
    $alternativeProduct = htmlspecialchars($_POST['alternativeProduct']);

    $clientProblem = htmlspecialchars($_POST['clientProblem']);
    $clientProblemSolution = htmlspecialchars($_POST['clientProblemSolution']);
    $uniqueValue = htmlspecialchars($_POST['uniqueValue']);
    $clientSegment = htmlspecialchars($_POST['clientSegment']);
    $earlyAdopters = htmlspecialchars($_POST['earlyAdopters']);
    $unfairAdvantage = htmlspecialchars($_POST['unfairAdvantage']);
    $shellChannel2 = htmlspecialchars($_POST['shellChannel2']);
    $highLevelConcept = htmlspecialchars($_POST['highLevelConcept']);
    $costStructure2 = htmlspecialchars($_POST['costStructure2']);
    $revenueStream2 = htmlspecialchars($_POST['revenueStream2']);

    $activityRegulation = htmlspecialchars($_POST['activityRegulation']);
    $activityRegulationRisc = htmlspecialchars($_POST['activityRegulationRisc']);
    $partners = htmlspecialchars($_POST['partners']);
    $partnersRisc = htmlspecialchars($_POST['partnersRisc']);
    $consumers = htmlspecialchars($_POST['consumers']);
    $consumersRisc = htmlspecialchars($_POST['consumersRisc']);
    $humanResources = htmlspecialchars($_POST['humanResources']);
    $humanResourcesRisc = htmlspecialchars($_POST['humanResourcesRisc']);
    $contracts = htmlspecialchars($_POST['contracts']);
    $contractsRisc = htmlspecialchars($_POST['contractsRisc']);
    $dataProtection = htmlspecialchars($_POST['dataProtection']);
    $dataProtectionRisc = htmlspecialchars($_POST['dataProtectionRisc']);
    $businessStructure = htmlspecialchars($_POST['businessStructure']);
    $businessStructureRisc = htmlspecialchars($_POST['businessStructureRisc']);
    $investors = htmlspecialchars($_POST['investors']);
    $investorsRisc = htmlspecialchars($_POST['investorsRisc']);
    $intellectualProperty = htmlspecialchars($_POST['intellectualProperty']);
    $intellectualPropertyRisc = htmlspecialchars($_POST['intellectualPropertyRisc']);
    $taxation = htmlspecialchars($_POST['taxation']);
    $taxationRisc = htmlspecialchars($_POST['taxationRisc']);

    $projectStage = isset($_POST['projectStage']) ? $_POST['projectStage'] : [];

    //
    $equityCaptal = htmlspecialchars($_POST['equityCaptal']);
    $loanFinancing = htmlspecialchars($_POST['loanFinancing']);
    $averageRate = htmlspecialchars($_POST['averageRate']);
    $averageLoan = htmlspecialchars($_POST['averageLoan']);
    $ventureCaptalInvestor = isset($_POST['ventureCaptalInvestor']) ? $_POST['ventureCaptalInvestor'] : 'Não informado';
    $ivestmentAmount = htmlspecialchars($_POST['ivestmentAmount']);
    $equityShare = htmlspecialchars($_POST['equityShare']);

    $revenueForecast = htmlspecialchars($_POST['revenueForecast']);
    $unitPrice = htmlspecialchars($_POST['unitPrice']);
    $fixedCost = htmlspecialchars($_POST['fixedCost']);
    $variableCost = htmlspecialchars($_POST['variableCost']);

    $equilityIvestiment = htmlspecialchars($_POST['equilityIvestiment']);
    $loanAndCredit = htmlspecialchars($_POST['loanAndCredit']);

    $expectFirstYear = htmlspecialchars($_POST['expectFirstYear']);

    $clintAgeMin = htmlspecialchars($_POST['clintAgeMin']);
    $clintAgeMax = htmlspecialchars($_POST['clintAgeMax']);
    $localization = htmlspecialchars($_POST['localization']);
    $frequencyUse = isset($_POST['frequencyUse']) ? $_POST['frequencyUse'] : [];
    $mainClientInteraction = isset($_POST['mainClientInteraction']) ? $_POST['mainClientInteraction'] : [];

    $comunicationChannel = isset($_POST['comunicationChannel']) ? $_POST['comunicationChannel'] : [];
    $mainComunicationChannel = htmlspecialchars($_POST['mainComunicationChannel']);
    $mainProblemRelated = htmlspecialchars($_POST['mainProblemRelated']);
    $mostValuedExperience = htmlspecialchars($_POST['mostValuedExperience']);
    $suggestionImprovement = htmlspecialchars($_POST['suggestionImprovement']);

    $ethicsCode = htmlspecialchars($_POST['ethicsCode']);
    $organizationalStructure = htmlspecialchars($_POST['organizationalStructure']);
    $teamCompetencies = htmlspecialchars($_POST['teamCompetencies']);
    $employerBranding = htmlspecialchars($_POST['employerBranding']);

    


    // Carrega o CSS externo
    $css = file_get_contents('style.css');

    // Gera o conteúdo do PDF
    $html = "
        <h1><strong>Startup:</strong> $startupName</h1>
        <h1><strong>Descrição:</strong> <pre>$startupDescription</pre></h1>
    
        <p>Público-alvo: <pre>$targetAudience</pre></p>
        <p>Principal produto/serviço: <pre>$mainProduct</pre></p>
        <p>Receitas</p>
        <ul>
    ";

    if (!empty($revenue)) {
        foreach ($revenue as $revenue) {
            $html .= "<li>" . htmlspecialchars($revenue) . "</li>";
        }
    } else {
        $html .= "<p>Nenhuma receita foi selecionada.</p>";
    }

    $html .= "</ul>";

    $html .= "
        <p>Segmentação do cliente:</p>
        <ul>
    ";

    if (!empty($mainNegotiation)) {
        foreach ($mainNegotiation as $mainNegotiation) {
            $html .= "<li>" . htmlspecialchars($mainNegotiation) . "</li>";
        }
    } else {
        $html .= "<p>Nenhuma receita foi selecionada.</p>";
    }

    $html .= "
    </ul>

    <div class='separator'></div>

    <h1><strong>Startup:</strong>Características da startup</h1>
    <p>Principal seguimento da startup: <pre>$startupSegment</pre></p>
    <p>Visão estratégica: <pre>$startupVision</pre></p>
    <p>Missão: <pre>$startupMission</pre></p>
    <p>Valor: <pre>$startupValue</pre></p>
    <p>Lema: <pre>$startupMotto</pre></p>

    <div class='separator'></div>

    <h1>Business Lean Model</h1>

    <div class='grid-conteiner'>
        <div class='grid-block1'>$clientProblem</div>
        <div class='grid-block1'>$clientProblemSolution</div>
        <div class='grid-block1'>$uniqueValue</div>
        <div class='grid-block1'>$clientSegment</div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block1'>$earlyAdopters</div>
        <div class='grid-block1'>$unfairAdvantage</div>
        <div class='grid-block1'>$shellChannel2</div>
        <div class='grid-block1'>$highLevelConcept</div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block2'>$costStructure2</div>
        <div class='grid-block2'>$revenueStream2</div>
    </div>

    <br>
    <br>
    <br>

    <div class='grid-conteiner'>
        <div class='grid-column'>
            <div class='grid-block3 space'>
                <h1 class='canva-title'>Problemas</h1>
                $keyPartner
            </div>
            <div class='grid-block3'>$businessCore</div>
        </div>

        <div class='grid-column'>
            <div class='grid-block3 space'>$valueProposition</div>
            <div class='grid-block3'>$customerRelation</div>
        </div>

        <div class='grid-block3 midle-block'>$mainResource</div>

        <div class='grid-column'>
            <div class='grid-block3 space'>$customerSegment</div>
            <div class='grid-block3'>$shellChannel</div>
        </div>

        <div class='grid-column'>
            <div class='grid-block3 space'>$revenueStream</div>
            <div class='grid-block3'>$keyResource</div>
        </div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block4'>$alternativeProduct</div>
        <div class='grid-block4'>$costStructure</div>
    </div>

    <p>Atividade e regulamentação (Risco $activityRegulationRisc): $activityRegulation</p>

    <p>Sócios (Risco $partnersRisc): $partners</p>

    <p>Consumidores (Risco $consumersRisc): $consumers</p>

    <p>Recursos humanos (Risco $humanResourcesRisc): $humanResources</p>
    
    <p>Contratos (Risco $contractsRisc): $contracts</p>

    <p>Proteção dos dados (Risco $dataProtectionRisc): $dataProtection</p>

    <p>Natureza da sociedade (Risco $businessStructureRisc): $businessStructure</p>   

    <p>Investidores (Risco $investorsRisc): $investors</p>

    <p>Propriedade intelectual (Risco $intellectualPropertyRisc): $intellectualProperty</p>

    <p>Tributação (Risco $taxationRisc): $taxation </p>

    ";

    $html .= "
    <p>Estágio da start-up:</p>
    <ul>
    ";

    if (!empty($projectStage)) {
    foreach ($projectStage as $projectStage) {
        $html .= "<li>" . htmlspecialchars($projectStage) . "</li>";
    }
    } else {
    $html .= "<p>Nenhuma receita foi selecionada.</p>";
    }

    $html .= "
    </ul>
    <div class='separator'></div>
    
    <h1><strong>Startup:</strong>Investimentos</h1>
    <p>Capital próprio investido: $equityCaptal</p>
    <p>Financiamentos ou empréstimos obtidos: $loanFinancing</p>
    <p>Taxa média de juros dos financiamentos: $averageRate</p>
    <p>Prazo médio de pagamento dos empréstimos: $averageLoan</p>
    <p>Investidores de risco ou venture capital: $ventureCaptalInvestor, $ivestmentAmount</p>
    <p>Percentual de participação cedida aos investidores : $equityShare %</p>


    
    
    <div class='separator'></div>
    <h1><strong>Startup:</strong> Projeção de despesa e receita</h1>
    
    <p>Expectativa de faturamento para o primeiro ano: $revenueForecast</p>
    <p>Valor esperado de unidade ou serviço oferecido (R$): $unitPrice</p>
    <p>Despesas fixas: $fixedCost</p>
    <p>Despesas variáveis: $variableCost</p>
    <p>investimento do próprio bolso ou de sócios até o momento: $equilityIvestiment</p>
    <p>Valor do empréstimos, financiamentos ou crédito com fornecedores : $loanAndCredit %</p>
    <p>Expectativa de lucro ou prejuízo no primeiro ano : $expectFirstYear</p>

    <div class='separator'></div>
    <h1><strong>Startup:</strong> Perfil do cliente</h1>

    <p>Faixa etária: $clintAgeMin - $clintAgeMax</p>
    <p>Localização: $localization</p>
    <p>Frequência de uso do produto/serviço: $frequencyUse</p>
    <p>Etapa principal de interação com cliente: $mainClientInteraction</p>";

    
    $html .= "
    <p>Canais que os clintes se comunicam:</p>
    <ul>
    ";

    if (!empty($comunicationChannel)) {
    foreach ($comunicationChannel as $comunicationChannel) {
        $html .= "<li>" . htmlspecialchars($comunicationChannel) . "</li>";
    }
    } else {
    $html .= "<p>Nenhuma canal selecionado.</p>";
    }

    $html .= "
    </ul>

    <p>Principal canal utilizado: <pre>$mainComunicationChannel</pre></p>
    <p>Problema relatado pelo cliente: <pre>$mainProblemRelated</pre></p>
    <p>Experiência mais valorizada: <pre>$mostValuedExperience</pre></p>
    <p>Segestão para melhoria: <pre>$suggestionImprovement</pre></p>


    <div class='separator'></div>
    <h1><strong>Startup:</strong>Diretrizes e estrutura da startup</h1>
    <p>Código de ética: <pre>$ethicsCode</pre></p>
    <p>Estrutura organizacional: <pre>$organizationalStructure</pre></p>
    <p>Competência de Equipe Deep Tech : <pre>$teamCompetencies</pre></p>
    <p>Employer Branding: <pre>$employerBranding</pre></p>
    ";   

    $businessmodel = "
    <h1>Business Lean Model</h1>

    <div class='grid-conteiner'>
        <div class='grid-block1'>$clientProblem</div>
        <div class='grid-block1'>$clientProblemSolution</div>
        <div class='grid-block1'>$uniqueValue</div>
        <div class='grid-block1'>$clientSegment</div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block1'>$earlyAdopters</div>
        <div class='grid-block1'>$unfairAdvantage</div>
        <div class='grid-block1'>$shellChannel2</div>
        <div class='grid-block1'>$highLevelConcept</div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block2'>$costStructure2</div>
        <div class='grid-block2'>$revenueStream2</div>
    </div>

    <br>
    <br>
    <br>

    <div class='grid-conteiner'>
        <div class='grid-column'>
            <div class='grid-block3 space'>
                <h1 class='canva-title'>Problemas</h1>
                $keyPartner
            </div>
            <div class='grid-block3'>$businessCore</div>
        </div>

        <div class='grid-column'>
            <div class='grid-block3 space'>$valueProposition</div>
            <div class='grid-block3'>$customerRelation</div>
        </div>

        <div class='grid-block3 midle-block'>$mainResource</div>

        <div class='grid-column'>
            <div class='grid-block3 space'>$customerSegment</div>
            <div class='grid-block3'>$shellChannel</div>
        </div>

        <div class='grid-column'>
            <div class='grid-block3 space'>$revenueStream</div>
            <div class='grid-block3'>$keyResource</div>
        </div>
    </div>
    
    ";
    

    try {
        // Criação do PDF
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS); // Aplica o CSS
        $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY); // Aplica o HTML
        $mpdf->AddPage('L');
        $mpdf->WriteHTML($businessmodel, \Mpdf\HTMLParserMode::HTML_BODY);
        $mpdf->Output("informacoes_usuario.pdf", "D");
    } catch (\Mpdf\MpdfException $e) {
        echo "Erro ao gerar o PDF: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}



/*
     <h1>Business Lean Model</h1>

    <div class='grid-conteiner'>
        <div class='grid-block1'>$clientProblem</div>
        <div class='grid-block1'>$clientProblemSolution</div>
        <div class='grid-block1'>$uniqueValue</div>
        <div class='grid-block1'>$clientSegment</div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block1'>$earlyAdopters</div>
        <div class='grid-block1'>$unfairAdvantage</div>
        <div class='grid-block1'>$shellChannel2</div>
        <div class='grid-block1'>$highLevelConcept</div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block2'>$costStructure2</div>
        <div class='grid-block2'>$revenueStream2</div>
    </div>
    
    

    */
?>