# Skeleton Laravel

![PHP Version](https://img.shields.io/badge/php-%5E7.2.0-blue)
![TDD](https://img.shields.io/badge/tdd-Tested%20100%25-blue)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/4bdf94ec532b46758a36fa0adebbe48d)](https://www.codacy.com/gh/bueno-networks/laravel-module-skeleton?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=bueno-networks/laravel-module-skeleton&amp;utm_campaign=Badge_Grade)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](license.md)

Este repositório contém uma estrutura para módulos do Laravel seguindo o padrão do composer. 

## Como criar projetos

Para criar novos módulos, basta executar o comando:

```
composer create-project bnw/laravel-module-skeleton [nome-personalizado]
```

Após a execução, um novo módulo com o nome especificado será criado. 
Os arquivos estarão todos com um namespace padrão chamado Bnw\Skeleton.
Isso pode ser alterado facilmente através de comandos especiais do Artisan, como pode-se ver a seguir.

## Como usar o projeto

O pacote possui uma contextualização modular do Laravel, permitindo que o programador implemente módulos sem a necessidade de uma instalação real do Laravel.

O Artisan está disponível também, para facilitar a utilização de comandos diretamente no pacote.

### Namespace

Por padrão, o namespace é Bnw\Skeleton. Para mudar isso, basta executar o comando no terminal:

```
php artisan bnw:rename
```

O comando irá perguntar sobre o que deverá ser renomeado dentro do módulo.
Também é possível especificar os parêmetros para o comando, evitando assim que ele faça perguntas.

Para mais informações, use: 

```
php artisan bnw:rename --help
```

### Testes

Os testes de unidade e funcionalidade funcionam normalmente, como se o código estivesse dentro de uma instalação limpa do Laravel. Para facilitar, existe um script do composer para executar os testes automatizados:

```
composer test
```

### Docker

O pacote já vem preparado para utilizar o Docker Compose. Isso é muito útil para poder observar o resultado de alterações no Frontend do módulo. 

Para executar o docker, basta usar o comando:

```
docker-compose up
```

Uma vez que o Docker esteja em execução, as rotas configuradas no módulo estarão disponíveis para acesso no navegador, pelo URL http://localhost:????.

> OBS: a porta (????) é especificada ao executar o comando `php artisan bnw:module:rename` e pode ser encontrado no arquivo docker-compose.yml, localizado na raiz do projeto.



## A Estrutura do módulo

A estrutura é recomendada pela comunidade do PHP para a criação de pacotes composer e segue o seguinte formato:

- `bin/` Caso existam scripts `.sh`, `.php` ou qualquer outro que seja executado na linha de comando
- `docs/` São armazenados os documentos mais detalhados do pacote
- `src/` O código fonte com as funcionalidades fornecidas pelo pacote
- `tests/` Os testes de unidade, funcionalidade e integração que, porventura, existam no projeto
- `composer.json` O arquivo de controle do pacote, para automação via packagist.org

Exemplos de pacotes padronizados:

- [https://github.com/thephpleague/flysystem](https://github.com/thephpleague/flysystem)
- [https://github.com/spatie/dropbox-api](https://github.com/spatie/dropbox-api)
- [https://github.com/symfony/symfony](https://github.com/symfony/symfony)
- [https://github.com/laravel/framework](https://github.com/laravel/framework)

## Changelog

Por favor, leia o [changelog](changelog.md) para mais informações sobre as mudanças recentes.

## Contribuindo

Por favor, leia [contributing](contributing.md) para mais detalhes.

## Segurança

Se você descobrir algum problema de segurança, por favor envie um email para contato@buenonetworks.com.br 
ao invés de usar o issue tracker.

## Créditos

- [Bueno Networks](https://github.com/bueno-networks)

## Licença

Licença MIT (MIT). Por favor, leia o [arquivo de licença](license.md) para mais detalhes.
