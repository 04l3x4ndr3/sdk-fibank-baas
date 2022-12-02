<?php

namespace O4l3x4ndr3\SdkFitbank\Helpers;

# PIX ERROR
function getPixError(string $code): string
{
    $err = [
        "OCR0001" => "Saldo insuficiente para pagamento de transação e/ou taxas",
        "OCR0002" => "Transação cancelada pela Instituição",
        "OCR0003" => "Transação cancelada a pedido do usuárioOcorreu um erro ao processar a transação PIX",
        "SPI0001" => "Ocorreu um erro ao processar a transação do PIX",
        "SPI0002" => "Liquidação da transação interrompida devido ao timeout do SPI",
        "SPI0003" => "Transação interrompida devido a erro no participante do usuário destinatário",
        "SPI0004" => "Tempo limite do remetente da transação PI",
        "SPI0005" => "Filial inválida/inexistente e/ou número da conta do usuário destinatário",
        "SPI0006" => "Conta do destinatário bloqueada",
        "SPI0007" => "A conta do usuário destinatário está fechada",
        "SPI0008" => "Tipo incorreto para a conta de transação do usuário receptor",
        "SPI0009" => "O tipo de transação não é suportado/autorizado na conta do usuário destinatário",
        "SPI0010" => "A transação com este tipo de processamento não é permitida",
        "SPI0011" => "Nenhum reembolso de um pagamento instantâneo",
        "SPI0012" => "O participante direto não está liquidando o usuário pagante",
        "SPI0013" => "Transação PIX com valor zero não é permitida",
        "SPI0014" => "Ordem de pagamento/devolução excede o limite permitido para o tipo de conta",
        "SPI0015" => "Saldo insuficiente na conta PI do usuário pagante",
        "SPI0016" => "A devolução supera o valor da transação original do PIX",
        "SPI0017" => "Divergência entre a soma dos valores do bloco",
        "SPI0018" => "Quantidade de transação inválida",
        "SPI0019" => "CPF/CNPJ do destinatário não diverge dos dados do titular da Conta",
        "SPI0020" => "Iniciador de transação PIX não autorizado",
        "SPI0021" => "Código QR rejeitado pelo participante do usuário receptor",
        "SPI0022" => "CPF/CNPJ do usuário destinatário incorreto",
        "SPI0023" => "Conteúdo da mensagem incorreto ou incompatível",
        "SPI0024" => "Transação rejeitada pelo participante do usuário receptor",
        "SPI0025" => "O participante que assinou a mensagem não está autorizado",
        "SPI0026" => "Transação rejeitada devido ao tempo limite entre as mensagens",
        "SPI0027" => "O participante não está cadastrado ou ainda não começou a operar no SPI",
        "SPI0028" => "Data e hora do envio da mensagem inválida",
        "SPI0029" => "A transação excede o limite de tempo máximo para retornar uma transação PIX",
        "SPI0030" => "Inconsistência entre o propósito da transação e a mensagem",
        "SPI0031" => "Identificador de operação mal formatado",
        "SPI0032" => "ISPB do participante facilitador do serviço Pix Retirada ou Troca de Pix inexistente",
        "SPI0033" => "ISPB inválido ou inexistente do participante pagante",
        "SPI0034" => "ISPB inválido ou inexistente do participante pagante",
        "SPI0035" => "A transação rejeitada como usuário pagante é sancionada",
        "SPI0036" => "A transação original não está relacionada a Retirada de PIX ou Alteração de PIX",
    ];
    return array_key_exists($code, $err) ? $err[$code] : 'Erro não especificado';
}
