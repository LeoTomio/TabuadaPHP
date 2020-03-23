<?php

//crie uma variável para receber o código da tabela
$tabela = '<table border="1" >'; //abre table
$tabela .= '<thead>'; //abre cabeçalho
$tabela .= '<tr>'; //abre uma linha
$tabela .= '<th>Numero1</th>'; // colunas do cabeçalho
$tabela .= '<th> x </th>';
$tabela .= '<th>Numero2</th>';
$tabela .= '<th>Resultado</th>';
$tabela .= '</tr>'; //fecha linha
$tabela .= '</thead>'; //fecha cabeçalho
$tabela .= '<tbody >'; //abre corpo da tabela
for ($i = 5; $i <= 5; $i++) {
    for ($x = 1; $x <= 10; $x++) {

        $total = $i * $x;

        $tabela .= '<tr>'; // abre uma linha
        $tabela .= '<td>' . $i . '</td>'; // coluna Alvara
        $tabela .= '<td>' . " x " . '</td>'; //coluna numero
        $tabela .= '<td>' . $x . '</td>'; // coluna validade
        $tabela .= '<td>' . $total . '</td>'; //coluna anexo
        $tabela .= '</tr>'; // fecha linha
    }
}
$tabela .= '</tbody>'; //fecha corpo
$tabela .= '</table>'; //fecha tabela

echo $tabela; // imprime
?>

