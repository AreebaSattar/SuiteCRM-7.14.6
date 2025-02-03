<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class CreateServiceToken
 * Elasticsearch API name security.create_service_token
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.17.0 (bee86328705acaa9a6daede7140defd4d9ec56bd)
 */
class CreateServiceToken extends AbstractEndpoint
{
    protected $namespace;
    protected $service;
    protected $name;

    public function getURI(): string
    {
        if (isset($this->namespace) !== true) {
            throw new RuntimeException(
                'namespace is required for create_service_token'
            );
        }
        $namespace = $this->namespace;
        if (isset($this->service) !== true) {
            throw new RuntimeException(
                'service is required for create_service_token'
            );
        }
        $service = $this->service;
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_security/service/$namespace/$service/credential/token/$name";
        }
        return "/_security/service/$namespace/$service/credential/token";
    }

    public function getParamWhitelist(): array
    {
        return [
            'refresh'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setNamespace($namespace): CreateServiceToken
    {
        if (isset($namespace) !== true) {
            return $this;
        }
        $this->namespace = $namespace;

        return $this;
    }

    public function setService($service): CreateServiceToken
    {
        if (isset($service) !== true) {
            return $this;
        }
        $this->service = $service;

        return $this;
    }

    public function setName($name): CreateServiceToken
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
