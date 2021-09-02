<?php

$endpoints = [
    'sandbox' => [
        'base_uri' => 'https://hml.birdsign.com.br/api/',
        'oauth_token_uri' => 'https://hml.birdsign.com.br/oauth/token',
        'oauth_authorization_uri' => 'https://hml.birdsign.com.br/oauth/authorize',
    ],
];

return [
    'http' => [
        /*
        |--------------------------------------------------------------------------
        | Client ID
        |--------------------------------------------------------------------------
        |
        | Deve ser gerado dentro da aplicação da Juno.
        | @link https://dev.juno.com.br/api/v2#operation/getAccessToken
        |
        */

        'oauth_client_id' => env('BIRDSIGN_CLIENT_ID'),

        /*
        |--------------------------------------------------------------------------
        | Client Secret
        |--------------------------------------------------------------------------
        |
        | Deve ser gerado dentro da aplicação da Juno.
        | @link https://dev.juno.com.br/api/v2#operation/getAccessToken
        |
        */

        'oauth_client_secret' => env('BIRDSIGN_CLIENT_SECRET'),

        /*
        |--------------------------------------------------------------------------
        | Retries
        |--------------------------------------------------------------------------
        |
        | Quantas vezes uma requisição pode ser reexecutada (em caso de falha) antes de gerar uma exceção.
        |
        */

        'retries' => 0,

        /*
        |--------------------------------------------------------------------------
        | Retry On Status Code
        |--------------------------------------------------------------------------
        |
        | Em quais códigos HTTP de uma resposta falha podemos tentar reexecutar a requisição.
        |
        */

        'retry_on_status_code' => [401],

        /*
        |--------------------------------------------------------------------------
        | Retry Delay
        |--------------------------------------------------------------------------
        |
        | Antes de tentar reexecutar uma requisição falha, aguardar em ms.
        |
        */

        'retry_delay' => 2000,

        /*
        |--------------------------------------------------------------------------
        | Guzzle
        |--------------------------------------------------------------------------
        |
        | Configurações passadas à instância do Guzzle.
        | @link https://docs.guzzlephp.org/en/stable/request-options.html
        |
        */

        'guzzle' => [
            'base_uri' => $endpoints[env('BIRDSIGN_ENVIRONMENT', 'sandbox')]['base_uri'],

            /*
            |--------------------------------------------------------------------------
            | Connect Timeout
            |--------------------------------------------------------------------------
            |
            | Quantos segundos esperar por uma conexão com o servidor da Juno. 0 significa sem limite de espera.
            | https://docs.guzzlephp.org/en/stable/request-options.html#connect-timeout
            |
            */

            'connect_timeout' => 10.0,

            /*
            |--------------------------------------------------------------------------
            | Timeout
            |--------------------------------------------------------------------------
            |
            | Quantos segundos esperar pela resposta do servidor. 0 significa sem limite de espera.
            | @link https://docs.guzzlephp.org/en/stable/request-options.html#timeout
            |
            */

            'timeout' => 0.0,

            /*
            |--------------------------------------------------------------------------
            | Debug
            |--------------------------------------------------------------------------
            |
            | Usar true para ativar o modo debug do Guzzle.
            | @link https://docs.guzzlephp.org/en/stable/request-options.html#debug
            |
            */

            'debug' => false,

            /*
            |--------------------------------------------------------------------------
            | Middlewares
            |--------------------------------------------------------------------------
            |
            | @link https://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#middleware
            |
            */

            'middlewares' => [
                \Jetimob\Http\Middlewares\OAuthRequestMiddleware::class,
            ],

            /*
            |--------------------------------------------------------------------------
            | Headers
            |--------------------------------------------------------------------------
            |
            | Headers de requisição.
            | @link https://docs.guzzlephp.org/en/stable/request-options.html#headers
            |
            */

            'headers' => [
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | OAuth Access Token Repository
        |--------------------------------------------------------------------------
        |
        | Essa classe é responsável por gerenciar os AccessTokens. Por padrão ela utiliza o repositório de cache padrão.
        |
        | PRECISA implementar \Jetimob\Http\Authorization\OAuth\Storage\CacheRepositoryContract
        */

        'oauth_access_token_repository' => \Jetimob\Http\Authorization\OAuth\Storage\CacheRepository::class,

        /*
        |--------------------------------------------------------------------------
        | OAuth Token Cache Key Resolver
        |--------------------------------------------------------------------------
        |
        | Classe responsável por gerar uma chave de identificação única para o cliente OAuth.
        |
        | PRECISA implementar \Jetimob\Http\Authorization\OAuth\Storage\AccessTokenCacheKeyResolverInterface
        */

        'oauth_token_cache_key_resolver' =>
            \Jetimob\Http\Authorization\OAuth\Storage\AccessTokenCacheKeyResolver::class,

        /*
        |--------------------------------------------------------------------------
        | OAuth Client Resolver
        |--------------------------------------------------------------------------
        |
        | Classe responsável por resolver o client OAuth.
        |
        | PRECISA implementar \Jetimob\Http\Authorization\OAuth\ClientProviders\OAuthClientResolverInterface
        */

        'oauth_client_resolver' => \Jetimob\Http\Authorization\OAuth\ClientProviders\OAuthClientResolver::class,

        'oauth_access_token_resolver' => [
            \Jetimob\Http\Authorization\OAuth\OAuthFlow::AUTHORIZATION_CODE =>
                \Jetimob\Http\Authorization\OAuth\TokenResolvers\OAuthAuthorizationCodeTokenResolver::class,
        ],

        'oauth_token_uri' => $endpoints[env('BIRDSIGN_ENVIRONMENT', 'sandbox')]['oauth_token_uri'],
        'oauth_authorization_uri' => $endpoints[env('BIRDSIGN_ENVIRONMENT', 'sandbox')]['oauth_authorization_uri'],

        // https://hml.birdsign.com.br/oauth/scopes
        'oauth_scopes' => ['complete'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Implementação dos endpoints da API
    |--------------------------------------------------------------------------
    |
    | Escolheu-se dar a opção de sobrescrever a implementação de um endpoint para que, se necessário, possam ser
    | modificados sem a necessidade de alterar o pacote original.
    |
    | A única obrigatoriedade é que a classe estenda \Jetimob\BirdSign\Api\AbstractApi.
    |
    | Chaves também podem ser adicionadas neste vetor e assim serem chamadas direto da facade.
    |
    */

    'api_impl' => [
        'documentGroups' => \Jetimob\BirdSign\Api\DocumentGroups\DocumentGroupsApi::class,
        'documentMembers' => \Jetimob\BirdSign\Api\DocumentMembers\DocumentMembersApi::class,
        'documents' => \Jetimob\BirdSign\Api\Documents\DocumentsApi::class,
        'organizations' => \Jetimob\BirdSign\Api\Organizations\OrganizationsApi::class,
        'plans' => \Jetimob\BirdSign\Api\Plans\PlansApi::class,
        'themes' => \Jetimob\BirdSign\Api\Themes\ThemesApi::class,
        'users' => \Jetimob\BirdSign\Api\Users\UsersApi::class,
    ],
];
