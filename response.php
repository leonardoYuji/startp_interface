<?php

require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

// Carrega a chave da API a partir de um arquivo seguro
$apiKey = trim(file_get_contents("api_key.txt")); // Salve a chave em um arquivo seguro

// Verifica se a chave foi carregada corretamente
if (!$apiKey) {
    die("Erro: Chave de API não encontrada.");
}

$client = new Client($apiKey);

// Lê e decodifica os dados JSON recebidos via POST
$data = json_decode(file_get_contents("php://input"));

if (!isset($data->text)) {
    die("Erro: Nenhum texto fornecido.");
}

$text = $data->text;

try {
    $response = $client->geminiPro()->generateContent(
        new TextPart($text)
    );

    echo json_encode(["response" => $response->text()]);
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}

?>
