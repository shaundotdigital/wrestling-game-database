<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WrestlersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WrestlersTable Test Case
 */
class WrestlersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WrestlersTable
     */
    public $Wrestlers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wrestlers',
        'app.genders',
        'app.heights',
        'app.weight_classes',
        'app.reactions',
        'app.games',
        'app.abilities',
        'app.ability_levels',
        'app.abilities_games',
        'app.wrestlers_abilities',
        'app.attributes',
        'app.attributes_points',
        'app.attributes_games',
        'app.platforms',
        'app.games_platforms',
        'app.wrestlers_hp',
        'app.wrestlers_personality',
        'app.personalities',
        'app.skills',
        'app.skill_levels',
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
        $config = TableRegistry::exists('Wrestlers') ? [] : ['className' => 'App\Model\Table\WrestlersTable'];
        $this->Wrestlers = TableRegistry::get('Wrestlers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Wrestlers);

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
