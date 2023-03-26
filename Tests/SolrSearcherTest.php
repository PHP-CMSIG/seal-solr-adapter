<?php

declare(strict_types=1);

namespace Schranz\Search\SEAL\Adapter\Solr\Tests;

use Schranz\Search\SEAL\Adapter\Solr\SolrAdapter;
use Schranz\Search\SEAL\Testing\AbstractSearcherTestCase;

class SolrSearcherTest extends AbstractSearcherTestCase
{
    public static function setUpBeforeClass(): void
    {
        $client = ClientHelper::getClient();
        self::$adapter = new SolrAdapter($client);

        parent::setUpBeforeClass();
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testFindMultipleIndexes(): void
    {
        $this->markTestSkipped('Not supported by Solr: TODO create issue');
    }
}
