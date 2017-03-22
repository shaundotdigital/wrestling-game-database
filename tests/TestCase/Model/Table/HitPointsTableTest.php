<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HitPointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HitPointsTable Test Case
 */
class HitPointsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HitPointsTable
     */
    public $HitPoints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hit_points'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HitPoints') ? [] : ['className' => 'App\Model\Table\HitPointsTable'];
        $this->HitPoints = TableRegistry::get('HitPoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HitPoints);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
