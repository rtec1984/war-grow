@extends('layouts.main')

@section('title', 'WAR - Regras')

@section('content')
<div class="col-md-6" style="text-align: justify; padding: 2rem;">
    <h5>RESPEITO AOS INTEGRANTES DO GRUPO DENTRO E FORA DO JOGO</h5>
    <p>Evitar postar mensagens que possam ser interpretadas como sendo de caráter ofensivo, as
        brincadeiras devem ser saudáveis e sempre com respeito. Não passe correntes, faça propagandas, discuta política,
        religião, futebol, ou qualquer outro tema que não faça parte do perfil do grupo.</p>
    <h5>LISTA</h5>
    <p>Colocar o nome seguido do apelido entre parênteses e retirar o nome da lista se não for jogar. As listas terão
        validade de até 30 minutos, na hora que a mesa estiver criada os jogadores da lista terão prioridade, mas o
        tempo de espera é de no máximo 5 minutos à partir da criação da mesa e chamada dos integrantes da lista no
        grupo,
        se todos os jogadores da lista estiverem na mesa não precisa esperar pelos 5 minutos para iniciar a partida.
        Identificar o momento que a mesa for criada no grupo utilizando a frase: "mesa criada". Quem cria a mesa é
        responsável por atualizar e gerenciar a lista podendo ou não iniciar a partida com quem estiver presente usando
        sempre o bom senso para evitar confusão.</p>
    <h5>PARTIDAS</h5>
    <p>As partidas valem 10 pontos, tem duração de até 90 minutos e podem ser jogadas quantas vezes quiser, uma de cada
        vez com 3, 4, 5 ou 6 jogadores. Para que as partidas sejam válidas para o ranking é necessário que uma lista com
        o
        número da partida e data seja montada com o nome, apelido, início e resultado marcados no grupo.
        Partidas sem início e resultado não serão contabilizadas no ranking.</p>
    <h5>PARTIDAS VENCIDAS NO TEMPO</h5>
    <p>Prestar atenção no horário que a partida iniciou para saber informar o início da última rodada no chat. A última
        rodada se inicia sempre após 90 minutos começando pelo primeiro jogador que abre a rodada e
        finalizando no último. Se houver conclusão do objetivo na última rodada a partida vale 10 pontos, senão houver
        vitória no objetivo a partida vale 5 pontos. Todas as partidas iniciadas devem ter seus resultados marcados no
        grupo!
        Critérios para determinar quem venceu a partida terminada no tempo:</p>
    <p>Totalidade de cada continente: Ásia 7 pontos, América do Norte 5 pontos, Europa 5 pontos, África 3 pontos,
        Oceania 2 pontos, América do Sul 2 pontos;</p>
    <p>Quantidade dos territórios: 1 ponto para cada território;</p>
    <p>Quantidade de exércitos: 1% do somatório dos mesmos.</p>
    <p>Quem somar mais pontos segundo esse critério terá vencido a partida.</p>
    <h5>RESULTADOS</h5>
    <p>Quem vencer uma partida deve cadastrar o resultado no sistema e confirmar sua participação. Os demais
        participantes também devem confirmar sua participação para que o ranking seja atualizado corretamente.</p>
    <h5>RANKING</h5>
    <p>O Ranking é atualizado automaticamente sempre que uma partida for cadastrada e a participação dos jogadores for
        confirmada. Os critérios de desempate do Ranking WG são nesta ordem, maior Pontuação (P), maior Desempenho
        (%), maior número de Vitórias (V), menor número de Jogos (J) e por último se houver empate em
        todos os outros critérios, ordem alfabética do nome cadastrado.</p>
    <p>O cálculo do Desempenho (%) é feito através da divisão do número de Vitórias (V) pelo número de Jogos (J), já a
        Pontuação (P) é calculada através da soma dos pontos obtidos em cada vitória, 5 pontos se for vitória no tempo e
        10 pontos se for vitória no objetivo, o resultado dessa soma é multiplicado pelo Desempenho (%).</p>
</div>
@endsection