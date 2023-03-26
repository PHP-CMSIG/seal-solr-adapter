<?php

declare(strict_types=1);

namespace Schranz\Search\SEAL\Adapter\Solr\Tests;

use Schranz\Search\SEAL\Adapter\Solr\SolrSchemaManager;
use Schranz\Search\SEAL\Testing\AbstractSchemaManagerTestCase;

class SolrSchemaManagerTest extends AbstractSchemaManagerTestCase
{
    public static function setUpBeforeClass(): void
    {
        $client = ClientHelper::getClient();
        self::$schemaManager = new SolrSchemaManager($client);
    }
}
