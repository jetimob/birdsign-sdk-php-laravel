<?php

namespace Jetimob\BirdSign;

use Jetimob\BirdSign\Api\DocumentGroups\DocumentGroupsApi;
use Jetimob\BirdSign\Api\DocumentMembers\DocumentMembersApi;
use Jetimob\BirdSign\Api\Documents\DocumentsApi;
use Jetimob\BirdSign\Api\Organizations\OrganizationsApi;
use Jetimob\BirdSign\Api\Plans\PlansApi;
use Jetimob\BirdSign\Api\Themes\ThemesApi;
use Jetimob\BirdSign\Api\Users\UsersApi;
use Jetimob\BirdSign\Exception\RuntimeException;
use Jetimob\Http\Contracts\HttpProviderContract;
use Jetimob\Http\Http;

/**
 * Class BirdSign
 *
 * @package Jetimob\BirdSign
 * @method UsersApi users()
 * @method PlansApi plans()
 * @method ThemesApi themes()
 * @method DocumentGroupsApi documentGroups()
 * @method DocumentsApi documents()
 * @method DocumentMembersApi documentMembers()
 * @method OrganizationsApi organizations()
 */
class BirdSign implements HttpProviderContract
{
    protected Http $client;
    protected array $config;

    public function __construct(array $config = [])
    {
        $this->client = new Http($config['http'] ?? []);
        $this->config = $config;
    }

    public function getHttpInstance(): Http
    {
        return $this->client;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config ?? [];
    }

    public function __call(string $name, array $arguments)
    {
        if (!($apiImpl = $this->config['api_impl'] ?? null) || !array_key_exists($name, $apiImpl)) {
            throw new RuntimeException("O endpoint '$name' não foi implementado ou não existe");
        }

        return new $apiImpl[$name]($this);
    }
}
