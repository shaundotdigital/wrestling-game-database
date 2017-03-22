<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GamesPlatformsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GamesPlatformsTable Test Case
 */
class GamesPlatformsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GamesPlatformsTable
     */
    public $GamesPlatforms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.games_platforms',
        'app.games',
        'app.wrestlers',
        'app.genders',
        'app.heights',
        'app.weight_classes',
        'app.reactions',
        'app.attributes_points',
        'app.attributes',
        'app.abilities',
        'app.wrestlers_abilities',
        'app.skills',
        'app.wrestlers_skills',
        'app.platforms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GamesPlatforms') ? [] : ['className' => 'App\Model\Table\GamesPlatformsTable'];
        $this->GamesPlatforms = TableRegistry::get('GamesPlatforms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GamesPlatforms);

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
