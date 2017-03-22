<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttributesPointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttributesPointsTable Test Case
 */
class AttributesPointsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AttributesPointsTable
     */
    public $AttributesPoints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.attributes_points',
        'app.wrestlers',
        'app.genders',
        'app.heights',
        'app.weight_classes',
        'app.reactions',
        'app.games',
        'app.platforms',
        'app.games_platforms',
        'app.abilities',
        'app.wrestlers_abilities',
        'app.skills',
        'app.wrestlers_skills',
        'app.attributes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AttributesPoints') ? [] : ['className' => 'App\Model\Table\AttributesPointsTable'];
        $this->AttributesPoints = TableRegistry::get('AttributesPoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AttributesPoints);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
