<?php
require_once __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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


    function generateBrevity($apiKey, $text) {
        $url = "https://generativelanguage.googleapis.com/v1/models/gemini-1.5-pro:generateContent?key=$apiKey";
        $data = ["contents" => [["parts" => [["text" => $text]]]]];
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
            CURLOPT_POSTFIELDS => json_encode($data)
        ];
    
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
    
        if(curl_errno($ch)) {
            echo "Erro CURL: " . curl_error($ch);
        }
    
        $decoded = json_decode($response, true);
        $ret = $decoded["candidates"][0]["content"]["parts"][0]["text"];
        curl_close($ch);
    
        return  $ret;
    }

    $apiKey = "AIzaSyAjPZVUKnl0zCZXKOrQaPDdrmLVOEIgNMM";
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
//    $answerKP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $keyPartner");
//    $answerBC = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $businessCore");
//    $answerMR = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $mainResource");
    
//    $answerCR = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $customerRelation");
//    $answerSC = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $shellChannel");
//    $answerCS = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $customerSegment");

//    $answerCoS =generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $costStructure");
//    $answerRS = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $revenueStream");
//    $answerKR = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $keyResource");
//   $answerAP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $alternativeProduct");
/*
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");
    $answerVP = generateBrevity($apiKey, "faça intelligent brevity do seguinte texto: $valueProposition");*/
    



    //conexao com API do Gemini e processamento do business model
    
    /*
    $url = "https://generativelanguage.googleapis.com/v1/models/gemini-1.5-pro:generateContent?key=" . $apiKey;

    $questionVP = "faça intelligent brevity do seguinte texto: $valueProposition";

    $dataVP = ["contents" => [["parts" => [["text" => $questionVP]]]]];

    $optionsVP = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataVP)];

    $ch = curl_init();
    curl_setopt_array($ch, $optionsVP);
    $responseVP = curl_exec($ch);
    
    $responseDecodedVP = json_decode($responseVP, true);

    if (isset($responseDecodedVP["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerVP = $responseDecodedVP["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionKP = "faça intelligent brevity do seguinte texto pensando que voce deve citar apenas os parceiros chaves sem o começo de parceiros chaves: $keyPartner";
    $dataKP = ["contents" => [["parts" => [["text" => $questionKP]]]]];
    $optionsKP = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataKP)];
    curl_setopt_array($ch, $optionsKP);
    $responseKP = curl_exec($ch);
    $responseDecodedKP = json_decode($responseKP, true);
    if (isset($responseDecodedKP["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerKP = $responseDecodedKP["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionBC = "faça intelligent brevity do seguinte texto: $businessCore";
    $dataBC = ["contents" => [["parts" => [["text" => $questionBC]]]]];
    $optionsBC = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataBC)];
    curl_setopt_array($ch, $optionsBC);
    $responseBC = curl_exec($ch);
    $responseDecodedBC = json_decode($responseBC, true);
    if (isset($responseDecodedBC["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerBC = $responseDecodedBC["candidates"][0]["content"]["parts"][0]["text"];
    }
  
    $questionCR = "faça intelligent brevity do seguinte texto: $customerRelation";
    $dataCR = ["contents" => [["parts" => [["text" => $questionCR]]]]];
    $optionsCR = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataCR)];
    curl_setopt_array($ch, $optionsCR);
    $responseCR = curl_exec($ch);
    $responseDecodedCR = json_decode($responseCR, true);
    if (isset($responseDecodedCR["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerCR = $responseDecodedCR["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionCS = "faça intelligent brevity do seguinte texto: $customerSegment";
    $dataCS = ["contents" => [["parts" => [["text" => $questionCS]]]]];
    $optionsCS = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataCS)];
    curl_setopt_array($ch, $optionsCS);
    $responseCS = curl_exec($ch);
    $responseDecodedCS = json_decode($responseCS, true);
    if (isset($responseDecodedCS["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerCS = $responseDecodedCS["candidates"][0]["content"]["parts"][0]["text"];
    }
/*
    $questionMR = "faça intelligent brevity do seguinte texto: $mainResource";
    $dataMR = ["contents" => [["parts" => [["text" => $questionMR]]]]];
    $optionsMR = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataMR)];
    curl_setopt_array($ch, $optionsMR);
    $responseMR = curl_exec($ch);
    $responseDecodedMR = json_decode($responseMR, true);
    if (isset($responseDecodedMR["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerMR = $responseDecodedMR["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionSC = "faça intelligent brevity do seguinte texto: $shellChannel";
    $dataSC = ["contents" => [["parts" => [["text" => $questionSC]]]]];
    $optionsSC = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataSC)];
    curl_setopt_array($ch, $optionsSC);
    $responseSC = curl_exec($ch);
    $responseDecodedSC = json_decode($responseSC, true);
    if (isset($responseDecodedSC["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerSC = $responseDecodedSC["candidates"][0]["content"]["parts"][0]["text"];
    }
    
/*
    $questionRS = "faça intelligent brevity do seguinte texto: $revenueStream";
    $dataRS = ["contents" => [["parts" => [["text" => $questionRS]]]]];
    $optionsRS = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataRS)];
    curl_setopt_array($ch, $optionsRS);
    $responseRS = curl_exec($ch);
    $responseDecodedRS = json_decode($responseRS, true);
    if (isset($responseDecodedRS["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerRS = $responseDecodedRS["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionCoS = "faça intelligent brevity do seguinte texto: $costStructure";
    $dataCoS = ["contents" => [["parts" => [["text" => $questionCoS]]]]];
    $optionsCoS = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataCoS)];
    curl_setopt_array($ch, $optionsCoS);
    $responseCoS = curl_exec($ch);
    $responseDecodedCoS = json_decode($responseCoS, true);
    if (isset($responseDecodedCoS["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerCoS = $responseDecodedCoS["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionKR = "faça intelligent brevity do seguinte texto: $keyResource";
    $dataKR = ["contents" => [["parts" => [["text" => $questionKR]]]]];
    $optionsKR = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataKR)];
    curl_setopt_array($ch, $optionsKR);
    $responseKR = curl_exec($ch);
    $responseDecodedKR = json_decode($responseKR, true);
    if (isset($responseDecodedKR["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerKR = $responseDecodedKR["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionAP = "faça intelligent brevity do seguinte texto: $alternativeProduct";
    $dataAP = ["contents" => [["parts" => [["text" => $questionAP]]]]];
    $optionsAP = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataAP)];
    curl_setopt_array($ch, $optionsAP);
    $responseAP = curl_exec($ch);
    $responseDecodedAP = json_decode($responseAP, true);
    if (isset($responseDecodedAP["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerAP = $responseDecodedAP["candidates"][0]["content"]["parts"][0]["text"];
    }

    // visao do cliente

    $questionCP = "faça intelligent brevity do seguinte texto: $clientProblem";
    $dataCP = ["contents" => [["parts" => [["text" => $questionCP]]]]];
    $optionsCP = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataCP)];
    curl_setopt_array($ch, $optionsCP);
    $responseCP = curl_exec($ch);
    $responseDecodedCP = json_decode($responseCP, true);
    if (isset($responseDecodedCP["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerCP = $responseDecodedCP["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionCPS = "faça intelligent brevity do seguinte texto: $clientProblemSolution";
    $dataCPS = ["contents" => [["parts" => [["text" => $questionCPS]]]]];
    $optionsCPS = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataCPS)];
    curl_setopt_array($ch, $optionsCPS);
    $responseCPS = curl_exec($ch);
    $responseDecodedCPS = json_decode($responseCPS, true);
    if (isset($responseDecodedCPS["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerCPS = $responseDecodedCPS["candidates"][0]["content"]["parts"][0]["text"];
    }
    
    $questionUV = "faça intelligent brevity do seguinte texto: $uniqueValue";
    $dataUV = ["contents" => [["parts" => [["text" => $questionUV]]]]];
    $optionsUV = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataUV)];
    curl_setopt_array($ch, $optionsUV);
    $responseUV = curl_exec($ch);
    $responseDecodedUV = json_decode($responseUV, true);
    if (isset($responseDecodedUV["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerUV = $responseDecodedUV["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionClS = "faça intelligent brevity do seguinte texto: $clientSegment";
    $dataClS = ["contents" => [["parts" => [["text" => $questionClS]]]]];
    $optionsClS = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataClS)];
    curl_setopt_array($ch, $optionsClS);
    $responseClS = curl_exec($ch);
    $responseDecodedClS = json_decode($responseClS, true);
    if (isset($responseDecodedClS["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerClS = $responseDecodedClS["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionEA = "faça intelligent brevity do seguinte texto pensando: $earlyAdopters";
    $dataEA = ["contents" => [["parts" => [["text" => $questionEA]]]]];
    $optionsEA = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataEA)];
    curl_setopt_array($ch, $optionsEA);
    $responseEA = curl_exec($ch);
    $responseDecodedEA = json_decode($responseEA, true);
    if (isset($responseDecodedEA["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerEA = $responseDecodedEA["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionUA = "faça intelligent brevity do seguinte texto: $unfairAdvantage";
    $dataUA = ["contents" => [["parts" => [["text" => $questionUA]]]]];
    $optionsUA = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataUA)];
    curl_setopt_array($ch, $optionsUA);
    $responseUA = curl_exec($ch);
    $responseDecodedUA = json_decode($responseUA, true);
    if (isset($responseDecodedUA["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerUA = $responseDecodedUA["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionSC2 = "faça intelligent brevity do seguinte texto: $shellChannel2";
    $dataSC2 = ["contents" => [["parts" => [["text" => $questionSC2]]]]];
    $optionsSC2 = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataSC2)];
    curl_setopt_array($ch, $optionsSC2);
    $responseSC2 = curl_exec($ch);
    $responseDecodedSC2 = json_decode($responseSC2, true);
    if (isset($responseDecodedSC2["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerSC2 = $responseDecodedSC2["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionHLC = "faça intelligent brevity do seguinte texto: $highLevelConcept";
    $dataHLC = ["contents" => [["parts" => [["text" => $questionHLC]]]]];
    $optionsHLC = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataHLC)];
    curl_setopt_array($ch, $optionsHLC);
    $responseHLC = curl_exec($ch);
    $responseDecodedHLC = json_decode($responseHLC, true);
    if (isset($responseDecodedHLC["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerHLC = $responseDecodedHLC["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionCS2 = "faça intelligent brevity do seguinte texto: $costStructure2";
    $dataCS2 = ["contents" => [["parts" => [["text" => $questionCS2]]]]];
    $optionsCS2 = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataCS2)];
    curl_setopt_array($ch, $optionsCS2);
    $responseCS2 = curl_exec($ch);
    $responseDecodedCS2 = json_decode($responseCS2, true);
    if (isset($responseDecodedCS2["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerCS2 = $responseDecodedCS2["candidates"][0]["content"]["parts"][0]["text"];
    }

    $questionRS2 = "faça intelligent brevity do seguinte texto: $revenueStream2";
    $dataRS2 = ["contents" => [["parts" => [["text" => $questionRS2]]]]];
    $optionsRS2 = [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_POST => true, CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_POSTFIELDS => json_encode($dataRS2)];
    curl_setopt_array($ch, $optionsRS2);
    $responseRS2 = curl_exec($ch);
    $responseDecodedRS2 = json_decode($responseRS2, true);
    if (isset($responseDecodedRS2["candidates"][0]["content"]["parts"][0]["text"])) {
        $answerRS2 = $responseDecodedRS2["candidates"][0]["content"]["parts"][0]["text"];
    }

    */

    
    



    // Carrega o CSS externo
    $css = file_get_contents('style.css');   

    $businessmodel = "
    <h1>Business Lean Model (Visão Deep Tech)</h1>

    <div class='grid-conteiner'>
        <div class='grid-block1 midle-block'>
            <div class='grid-title1 '>Parceiros chave</div>
            <div class='grid-content1 content-size3'>$keyPartner</div>
        </div>

        <div class='grid-column'>
            <div class='grid-block1 space'>
                <div class='grid-title1 '>Core business</div>
                <div class='grid-content1 content-size2'>$businessCore</div>
            </div>

            <div class='grid-block1'>
                <div class='grid-title1 '>Recursos principais</div>
                <div class='grid-content1 content-size2'>$ answerMR</div>
            </div>
        </div>

        <div class='grid-block1 midle-block'>
            <div class='grid-title1 '>Proposta única de valor</div>
            <div class='grid-content1 content-size3'>$answerVP</div>
        </div>

        <div class='grid-column'>
            <div class='grid-block1 space'>
                <div class='grid-title1 '>Relacionamento com cliente</div>
                <div class='grid-content1 content-size2'>$ answerCR</div>
            </div>

            <div class='grid-block1'>
                <div class='grid-title1 '>Canais</div>
                <div class='grid-content1 content-size2'>$ answerSC</div>
            </div>
        </div>

        <div class='grid-block1 midle-block'> 
            <div class='grid-title1 '>Segmento de cliente</div>
            <div class='grid-content1 content-size3'>$ answerCS</div>
        </div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block2'>
            <div class='grid-title1 '>Estruturas de custos</div>
            <div class='grid-content1 content-size4'>$costStructure</div>
        </div>
        <div class='grid-block2'>
            <div class='grid-title1 '>Fontes de receitas</div>
            <div class='grid-content1 content-size4'>$ answerRS</div>
        </div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block2'>
            <div class='grid-title1 '>Recursos Chaves</div>
            <div class='grid-content1 content-size4'>$ answerKR</div>
        </div>
        <div class='grid-block2'>
            <div class='grid-title1 '>Alternativas existentes</div>
            <div class='grid-content1 content-size4'>$ answerAP</div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <h1>Business Lean Model (visão do cliente)</h1>


    <div class='grid-conteiner'>
        <div class='grid-block3'>
            <div class='grid-title1 '>Problema</div>
            <div class='grid-content1 content-size1'>answerCP</div>
        </div>
        <div class='grid-block3'>
            <div class='grid-title1 '>Solução</div>
            <div class='grid-content1 content-size1'>answerCPS</div>
        </div>
        <div class='grid-block3'>
            <div class='grid-title1 '>Proposta unica de valor</div>
            <div class='grid-content1 content-size1'>answerUV</div>
        </div>
        <div class='grid-block3'>
            <div class='grid-title1 '>Vantagem injusta</div>
            <div class='grid-content1 content-size1'>answerUA</div>
        </div>
        <div class='grid-block3'>
            <div class='grid-title1 '>Segmento de cliente</div>
            <div class='grid-content1 content-size1'>answerClS</div>
        </div>
    </div>

    <div class='grid-conteiner'>
        <div class='grid-block3'>
            <div class='grid-title1 '>Alternativas existentes</div>
            <div class='grid-content1 content-size1'>DEVO COMENTAR</div>
        </div>
        <div class='grid-block3'>
            <div class='grid-title1 '>Métricas chaves</div>
            <div class='grid-content1 content-size1'>DEVO COMENTAR</div>
        </div>
        <div class='grid-block3'>
            <div class='grid-title1 '>Conceito de alto nível</div>
            <div class='grid-content1 content-size1'>answerHLC</div>
        </div>
        <div class='grid-block3'>
            <div class='grid-title1 '>Canais</div>
            <div class='grid-content1 content-size1'>answerSC2</div>
        </div>
        <div class='grid-block3'>
            <div class='grid-title1 '>Adotantes iniciais</div>
            <div class='grid-content1 content-size1'>answerEA</div>
        </div>
    </div>
    
    <div class='grid-conteiner'>
        <div class='grid-block2'>
            <div class='grid-title1 '>Estruturas de custos</div>
            <div class='grid-content1 content-size2'>answerCS2</div>
        </div>
        <div class='grid-block2'>
            <div class='grid-title1 '>Fluxo de receitas</div>
            <div class='grid-content1 content-size2'>answerRS2</div>
        </div>
    </div>

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