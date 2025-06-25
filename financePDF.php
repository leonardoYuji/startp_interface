<?php
require_once __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$loanAndCredit = $_POST['loanAndCredit'];
    //$equilityIvestiment = $_POST['equilityIvestiment'];
    //$financialLeverage = $loanAndCredit / $equilityIvestiment;

    $monthlyRevenue = $_POST['monthlyRevenue'];
    $annualRevenue1 = $_POST['annualRevenue1'];
    $annualRevenue2 = $_POST['annualRevenue2'];
    $growthRate = 100 * ($annualRevenue1 - $annualRevenue2)/$annualRevenue2;
    
    $unitPrice = $_POST['unitPrice'];

    $opex_fixedCost1 = $_POST['opex_fixedCost1'];
    $opex_fixedCost2 = $_POST['opex_fixedCost2'];
    $opex_fixedCost3 = $_POST['opex_fixedCost3'];
    $opex_fixedCost4 = $_POST['opex_fixedCost4'];
    $opex_fixedCost5 = $_POST['opex_fixedCost5'];
    $opex_fixedCost6 = $_POST['opex_fixedCost6'];

    $opex_fixedCost = $opex_fixedCost1 + $opex_fixedCost2 + $opex_fixedCost3 + $opex_fixedCost4 + $opex_fixedCost5 + $opex_fixedCost6; 

    $opex_variableCost1 = $_POST['opex_variableCost1'];
    $opex_variableCost2 = $_POST['opex_variableCost2'];
    $opex_variableCost3 = $_POST['opex_variableCost3'];
    $opex_variableCost4 = $_POST['opex_variableCost4'];
    $opex_variableCost5 = $_POST['opex_variableCost5'];
    $opex_variableCost6 = $_POST['opex_variableCost6'];
    $opex_variableCost7 = $_POST['opex_variableCost7'];

    $opex_variableCost = $opex_variableCost1 + $opex_variableCost2 + $opex_variableCost3 + $opex_variableCost4 + $opex_variableCost5 + $opex_variableCost6 + $opex_variableCost7;

    $capex1 = $_POST['capex1'];
    $capex2 = $_POST['capex2'];
    $capex3 = $_POST['capex3'];
    $capex4 = $_POST['capex4'];
    $capex5 = $_POST['capex5'];
    $capex6 = $_POST['capex6'];
    $capex7 = $_POST['capex7'];
    $capex8 = $_POST['capex8'];
    $capex9 = $_POST['capex9'];
    $capex10 = $_POST['capex10'];

    $capex = $capex1 + $capex2 + $capex3 + $capex4 + $capex5 + $capex6 + $capex7 + $capex8 + $capex9 + $capex10;


    $break_evenPoint = $fixedCost / ($unitPrice - $variableCost);

    $netProfit = $monthlyRevenue - $opex_fixedCost;
    $profitMargin = 100 * ($netProfit / $monthlyRevenue);
    
    $marketingCost = $_POST['marketingCost'];
    $sellingCost = $_POST['sellingCost'];
    $customerAcquired = $_POST['customerAcquired'];
    $CAC = ($marketingCost + $sellingCost)/$customerAcquired;

    $investment = $_POST['investment'];
    $totalReturn = $_POST['totalReturn'];
    $MOIC = $totalReturn/$investment;

    $valuation_weight1 = $_POST['valuation_weight1'];
    $valuation_weight2 = $_POST['valuation_weight2'];
    $valuation_weight3 = $_POST['valuation_weight3'];
    $valuation_weight4 = $_POST['valuation_weight4'];
    $valuation_weight5 = $_POST['valuation_weight5'];
    $valuation_weight6 = $_POST['valuation_weight6'];
    $valuation_weight7 = $_POST['valuation_weight7'];
    $valuation_weight8 = $_POST['valuation_weight8'];

    $valuation_score1 = $_POST['valuation_score1'];
    $valuation_score2 = $_POST['valuation_score2'];
    $valuation_score3 = $_POST['valuation_score3'];
    $valuation_score4 = $_POST['valuation_score4'];
    $valuation_score5 = $_POST['valuation_score5'];
    $valuation_score6 = $_POST['valuation_score6'];
    $valuation_score7 = $_POST['valuation_score7'];
    $valuation_score8 = $_POST['valuation_score8'];

    $valuation_Finalscore1 = $valuation_weight1 * $valuation_score1 / 100;
    $valuation_Finalscore2 = $valuation_weight2 * $valuation_score2 / 100;
    $valuation_Finalscore3 = $valuation_weight3 * $valuation_score3 / 100;
    $valuation_Finalscore4 = $valuation_weight4 * $valuation_score4 / 100;
    $valuation_Finalscore5 = $valuation_weight5 * $valuation_score5 / 100;
    $valuation_Finalscore6 = $valuation_weight6 * $valuation_score6 / 100;
    $valuation_Finalscore7 = $valuation_weight7 * $valuation_score7 / 100;
    $valuation_Finalscore8 = $valuation_weight8 * $valuation_score8 / 100;

    $valuation_Finalscore = $valuation_Finalscore1 + $valuation_Finalscore2 + $valuation_Finalscore3 + $valuation_Finalscore4 + $valuation_Finalscore5 + $valuation_Finalscore6 + $valuation_Finalscore7 + $valuation_Finalscore8;
    
    $cogs1 = $_POST['cogs1'];
    $cogs2 = $_POST['cogs2'];
    $cogs3 = $_POST['cogs3'];
    $cogs4 = $_POST['cogs4'];
    $cogs5 = $_POST['cogs5'];

    $mrr1 = $_POST['mrr1'];
    $mrr2 = $_POST['mrr2'];
    $mrr = $mrr1 * $mrr2;

    $r40 = ($profitMargin + $growthRate);

    $LCC1 = $_POST['LCC1'];
    $LCC2 = $_POST['LCC2'];
    $LCC3 = $_POST['LCC3'];
    $LCC4 = $_POST['LCC4'];
    $LCC5 = $_POST['LCC5'];
    $LCC6 = $_POST['LCC6'];

    $LCC = $LCC1 + $LCC2 + $LCC3 + $LCC4 + $LCC5 + $LCC6; 

    $EBITDA1 = $_POST['EBITDA1'];
    $EBITDA2 = $_POST['EBITDA2'];
    $EBITDA = $EBITDA1 - $EBITDA2 + $opex_fixedCost;

    
    
    // Carrega o CSS externo
    $css = file_get_contents('style.css');   

    $businessmodel = "
    <h1>Business Lean Model (Visão Deep Tech)</h1>
    <p>Capital próprio: R$ $loanAndCredit</p>
    <p>Dívidas: R$ $equilityIvestiment</p>
    <p>Alavanacagem: $financialLeverage</p>

    <br><br><br>
    <p>OPEX fixo: R$ $opex_fixedCost</p>
    <p>OPEX variavel: R$ $opex_variableCost</p>
    <p>CAPEX R$: $capex</p>

    <br>

    <p>Preço unitário do produto/serviço: R$ $ unitPrice</p>
    <p>Custos fixos: R$ $fixedCost</p>
    <p>Custos variáveis: R$ $variableCost</p>
    <p>Ponto de equilíbrio: $break_evenPoint</p>
    ";

    $businessmodel .= "
    <h1>Valores calculados</h1>
    <table border='1' cellpadding='8' cellspacing='0'>
        <thead>
            <tr>
                <th>Mês</th>
                <th>Receita (R$)</th>
                <th>OPEX - Despesas Operacionais (R$)</th>
                <th>Lucro líquido(R$)</th>
                <th>Lucro acumulado(R$)</th>
                <th>Investimento acumulado(R$)</th>
                <th>Payback</th>
                <th>FLC - Fluxo de caixa livre (R$)</th>
            </tr>
        </thead>
        <tbody>";
    $flc_simple = $monthlyRevenue - $opex_fixedCost;
    for ($i = 1; $i <= 12; $i++) {
        $accumultedProfit = $netProfit * $i;
        if(($accumultedProfit - $capex) > 0){
            $payback = "sim";
        }else{
            $payback = "não";
        }
        $businessmodel .= "
        <tr>
            <td>Mês $i</td>
            <td>$monthlyRevenue</td>
            <td>$opex_fixedCost</td>
            <td>$netProfit</td>
            <td>$accumultedProfit</td>
            <td>$capex</td>
            <td>$payback</td>
            <td>nao sei</td>
        </tr>";
    }

    $businessmodel .= "
        </tbody>
    </table>";

    $businessmodel .= "
        <br>
        
        <p>Custo com marketing :$marketingCost R$</p>
        <p>Custo com vendas :$sellingCost R$</p>
        <p>Número de clientes :$customerAcquired</p>
        <p>Custo de aquisição de clientes :$CAC R$/cliente</p>
    
        <br>
        <p>Custo com vendas :$investment R$</p>
        <p>Número de clientes :$totalReturn</p>
        <p>Custo de aquisição de clientes :$MOIC R$/cliente</p>

        <h1>Valuation com método berkus</h1>
        <table border='1' cellpadding='4' cellspacing='0'>
            <thead>
                <tr>
                    <th>Critério</th>
                    <th>Peso (%)</th>
                    <th>Nota (0-100)</th>
                    <th>Nota Final(R$)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Força da Equipe de Gerenciamento</td>
                    <td>$valuation_weight1</td>
                    <td>$valuation_score1</td>
                    <td>$valuation_Finalscore1</td>
                </tr>
                <tr>
                    <td>Tamanho da oportunidade</td>
                    <td>$valuation_weight2</td>
                    <td>$valuation_score2</td>
                    <td>$valuation_Finalscore2</td>
                </tr>
                <tr>
                    <td>Produto/Tecnologia</td>
                    <td>$valuation_weight3</td>
                    <td>$valuation_score3</td>
                    <td>$valuation_Finalscore3</td>
                </tr>
                <tr>
                    <td>Ambiente competitivo</td>
                    <td>$valuation_weight4</td>
                    <td>$valuation_score4</td>
                    <td>$valuation_Finalscore4</td>
                </tr>
                <tr>
                    <td>Canais de marketing/vendas/parcerias</td>
                    <td>$valuation_weight5</td>
                    <td>$valuation_score5</td>
                    <td>$valuation_Finalscore5</td>
                </tr>
                <tr>
                    <td>Necessidade de investimento inicial</td>
                    <td>$valuation_weight6</td>
                    <td>$valuation_score6</td>
                    <td>$valuation_Finalscore6</td>
                </tr>
                <tr>
                    <td>Rentabilidade</td>
                    <td>$valuation_weight7</td>
                    <td>$valuation_score7</td>
                    <td>$valuation_Finalscore7</td>
                </tr>
                <tr>
                    <td>Taxa mínima de atratividade</td>
                    <td>$valuation_weight8</td>
                    <td>$valuation_score8</td>
                    <td>$valuation_Finalscore8</td>
                </tr>
                <tr>
                    <td colspan='2'></td>
                    <td>Notaa final</td>
                    <td>$valuation_Finalscore</td>
                </tr>
            </tbody>
        </table>

        <br><br>
        <p>Salários: R$ $cogs1</p>
        <p>Materias diretos: R$ $cogs2</p>
        <p>Serviços essenciais de terceiros: R$ $cogs3</p>
        <p>Uso direto de infraestrutura: $cogs4</p>
        <p>Outros: $cogs5</p>

        <br><br>
        <p>Valor mensal pago pelos clientes fixos: R$ $mrr1</p>
        <p>Quantidade de clientes recorrentes: R$ $mrr2</p>
        <p>MRR: R$ $mrr</p>

        <br><br>
        <p>Receita deste ano: R$ $annualRevenue1</p>
        <p>Receita do último ano: R$ $annualRevenue2</p>
        <p>Lucro líquido: R$ $netProfit</p>
        <p>Margem de lucro: $profitMargin %</p>
        <p>Taxa de crescimento: $growthRate %</p>
        <p>R40: $r40 %</p>

        <br><br>
        <p>Custo de Pesquisa e Projeto: R$ $LCC1</p>
        <p>Custo de Aquisição: R$ $LCC2</p>
        <p>Custo de Instalação e Comissionamento: R$ $LCC3</p>
        <p>Custo de Operação e Manutenção: $LCC4 %</p>
        <p>Custo de Desisntalação e Descomissionamento: $LCC5 %</p>
        <p>Custo de Descarte: $LCC6 %</p>
        <p>Custo do ciclo de vida: $LCC %</p>
    ";
   
    try {
        // Criação do PDF
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS); // Aplica o CSS
        $mpdf->AddPage('L');
        $mpdf->WriteHTML($businessmodel, \Mpdf\HTMLParserMode::HTML_BODY);
        $mpdf->Output("canvas.pdf", "D");
    } catch (\Mpdf\MpdfException $e) {
        echo "Erro ao gerar o PDF: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}


?>