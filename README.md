# SDK PHP para API Mitryusweb (Work in progress)

### Documentação:

https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#metodoslayout

### Requerimento:
* PHP >= 7.1
* Json extension
* Curl extension

### Pacotes usados:

* guzzlehttp/guzzle: ^6.3
* nesbot/carbon: ^1.36
* illuminate/support: ^5.7

## Get started

* [Instalação](#Instalação)
* [Configurando o SDK](#)
* [Brincando com coleções e métodos mágicos](#)
* [Recuperando Departamentos](#)
* [Recuperar PacotesDados](#)
* [Confirmando consumo de dados](#)


### Instalação

Usando composer execute o comando para instalar o pacote:

`composer require prhost/mitryusweb-sdk`

### Configurando o SDK

Veja o exemplo abaixo para configurar principalmente a chave de integração:

```php
use Mitryusweb\Api\Mitryusweb;

Mitryusweb::$token = 'chave de integracao';

//Opcional, setar uma outra URL que não seja a atual da documentação
Mitryusweb::$uri = 'url.ws.mitryusweb';
```

outro exemplo:

```php
use Mitryusweb\Api\Mitryusweb;
Mitryusweb::init('chave integracao', 'url api (opcional)');
```

### Brincando com coleções e métodos mágicos

#### Coleções
Quando uma consulta é esperado o retorno de varios registros, ele sempre vai retornar uma model que contém uma coleção extendida da biblioteca [Collection do laravel](https://laravel.com/docs/5.7/collections).
A coleção também tras em cada item de sua coleção uma model do tipo item com os dados daquele registro.

Exemplos de uso da coleção:

```php
$pacoteEndpoint = new \Mitryusweb\Endpoints\PacoteDados();
$pacoteDados = $pacoteEndpoint->get();

//Exemplo acessando uma coleção de dados
$departamentos = $pacoteDados->getDepartamentos();

//Por departamentos também se uma lista de dados, se torna uma model do tipo coleção.
foreach ($departamentos as $departamento) {
    $departamento->getCodDepartamento();
}
```

#### Métodos mágicos
Com alguns métodos mágicos que contem nas models de retorno, é possível acessar os dados chamando chamando métodos do tipo `$pacoteDados->getDepartamentos()` que retornará apenas os departamentos daquele pacote.

Outra forma também é através dos atributos, por exemplo, `$pacoteDados->Departamentos` ou `$pacoteDados->codigo_confirmacao`. Confira a lista de atributos chamando `$pacoteDados->getAttributeMap()` 

Alguns outros exemplos com método mágico e coleções:

### Recuperando Departamentos

Para recuperar os departamentos, use o EndPoint `Departamentos`:

```php
$departamentosEndpoint = new \Mitryusweb\Endpoints\Departamentos();

//Retorna uma model de coleção baseada na instancia da biblioteca Collection do laravel
$departamentos = $departamentosEndpoint->get();
```

### Recuperar PacoteDados

Para recuperar todos os dados em um unico pacote, use o EndPoint `PacoteDados`:

```php
$pacoteEndpoint = new \Mitryusweb\Endpoints\PacoteDados();

//Retorna uma model do tipo PacoteDados contendo varias coleções de cada dado.
$pacoteDados = $pacoteEndpoint->get();

//Você também pode auto confirmar a recuperação do pacote passando true no paramentro do get():
$pacoteDados = $pacoteEndpoint->get(true);

```

### Confirnamdo consumo de dados

Para confirmar que recebeu os dados corretamente usando o codigo_confirmacao use o exemplo abaixo:

```php
$pacoteEndPoint = new \Mitryusweb\Endpoints\PacoteDados();

$codigo_confirmacao = 123;
$pacoteEndPoint->confimar($codigo_confirmacao);
```