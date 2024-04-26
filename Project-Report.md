# Sistema de gerenciamento de entrega

Projeto de curso ASE feito pelo TY-C Group 46.

##### Funções e responsabilidades

| Nome | Núm. da lista. | Contribuição |
| ---------------- | -------- | ------------------------------------------- |
| Mihir Rabade | 17 | Teste e depuração |
| Prachi Pandey | 34 | Banco de dados (ligando escritório e gerente) |
| Neel Parekh | 38 | Front-end (detalhes do escritório, detalhes do gerente) |
| Chaitanya Pathak | 42 | Banco de dados (vinculando detalhes da remessa) |
| Rashi Wasa | 74 | Front-end (adicionando detalhes da remessa) |
# Introdução

- O principal objetivo do Sistema de Gerenciamento de Entrega é manter um **controle de entregas.**
- O projeto começa adicionando detalhes das filiais e funcionários que trabalham em suas respectivas filiais.
- Em seguida, a entrega é **marcada como** programada para entrega.
- Agora, quando o pacote é recebido pela agência receptora, eles entregam o pacote e **o status da entrega é atualizado** pela agência remetente.

Esses sistemas ajudam os proprietários de pequenas empresas a acompanhar suas entregas de maneira mais eficiente e, assim, economizar tempo e energia.

## Escopo do Projeto

Os usuários deste projeto são os seguintes -

1. Clientes (que podem **apenas verificar** o status de sua entrega)
2. Gerente (Quem **gerencia** o escritório)
3. Funcionários de escritório (quem insere e atualiza os **detalhes** da entrega)

O escopo deste projeto é manter registros das entregas.

O sistema será usado para atividades do dia a dia, como devolução, detalhes da empresa, taxas de hub, reservas, não entrega e centros de coleta.

Na verdade não é fácil fazer esse processo manualmente porque ficaria muito agitado.

Por isso, recomenda-se automatizar o processo através do desenvolvimento de software relevante, à medida que o mundo passa do trabalho manual para a era da informação e da tecnologia, onde a informatização se torna importante em todas as esferas da vida.

## Funcionalidade

Nosso projeto oferece as seguintes funcionalidades -

1. Adicione nova equipe e filial.
2. Insira os detalhes da entrega.
3. Agende a data de entrega e a equipe.
4. Registre a data de entrega.
5. Atualize o status atual da entrega.

## Diagrama de casos de uso

![Diagrama de caso de uso para sistema de gerenciamento de entrega](https://i.imgur.com/eTsdWQA.png)

## Visualização Visual

##### Página de introdução

![Página de introdução](https://i.imgur.com/a3zBcHX.png)

##### Página de login do proprietário da empresa

![Página de login do administrador](https://i.imgur.com/mxm5kXO.png)

##### Adicionando detalhes de entrega

![Adicionar página de remessa](https://i.imgur.com/HBlr7Dj.png)

##### Status de entrega página-1

![Inserindo o número da remessa](https://i.imgur.com/0e64v3z.png)

##### Status de entrega página-2

![image-20201219102012845](https://i.imgur.com/GlTZr2D.png)
## Code Snippet

Código para conexão com banco de dados

```php
<?php
// database connection config
$dbHost = 'localhost';
$dbUser = 'admin'; 
$dbPass = '';
$dbName = 'courier_db';

$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die('MySQL connect failed. ' . mysqli_error());
function dbQuery($sql)
{
    global $dbConn;
    $result = mysqli_query($dbConn, $sql);
    return $result;
}
function dbAffectedRows()
{
    global $dbConn;
    return mysqli_affected_rows($dbConn);
}
function dbFetchArray($result, $resultType = MYSQL_NUM)
{
    return mysqli_fetch_array($result, $resultType);
}
function dbFetchAssoc($result)
{
    return mysqli_fetch_assoc($result);
}
function dbFetchRow($result)
{
    return mysqli_fetch_row($result);
}
function dbFreeResult($result)
{
    return mysqli_free_result($result);
}
function dbNumRows($result)
{
    return mysqli_num_rows($result);
}
function dbSelect($dbName)
{
    return mysqli_select_db($dbName);
}
function dbInsertId()
{
    return mysqli_insert_id();
}
```