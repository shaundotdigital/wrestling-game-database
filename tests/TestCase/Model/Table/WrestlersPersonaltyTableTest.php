<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WrestlersPersonaltyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WrestlersPersonaltyTable Test Case
 */
class WrestlersPersonaltyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WrestlersPersonaltyTable
     */
    public $WrestlersPersonalty;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wrestlers_personalty',
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
        'app.skills',
        'app.skill_levels',
        'app.wrestlers_skills',
        'app.personalities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WrestlersPersonalty') ? [] : ['className' => 'App\Model\Table\WrestlersPersonaltyTable'];
        $this->WrestlersPersonalty = TableRegistry::get('WrestlersPersonalty', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WrestlersPersonalty);

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
