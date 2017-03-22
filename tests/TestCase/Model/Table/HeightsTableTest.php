<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HeightsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HeightsTable Test Case
 */
class HeightsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HeightsTable
     */
    public $Heights;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.heights',
        'app.wrestlers',
        'app.genders',
        'app.weight_classes',
        'app.reactions',
        'app.games',
        'app.platforms',
        'app.games_platforms',
        'app.attributes_points',
        'app.attributes',
        'app.abilities',
        'app.wrestlers_abilities',
        'app.skills',
        'app.wrestlers_skills'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Heights') ? [] : ['className' => 'App\Model\Table\HeightsTable'];
        $this->Heights = TableRegistry::get('Heights', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Heights);

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
