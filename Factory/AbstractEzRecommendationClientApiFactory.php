<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\RecommendationBundle\Factory;

use EzSystems\RecommendationBundle\Client\EzRecommendationClientInterface;
use EzSystems\RecommendationBundle\Rest\Api\AbstractApi;

/**
 * Class AbstractEzRecommendationClientApiFactory.
 */
abstract class AbstractEzRecommendationClientApiFactory
{
    abstract public function buildApi(string $name, EzRecommendationClientInterface $client): AbstractApi;
}
