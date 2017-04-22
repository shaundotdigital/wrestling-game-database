<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbilitiesGamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbilitiesGamesTable Test Case
 */
class AbilitiesGamesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AbilitiesGamesTable
     */
    public $AbilitiesGames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.abilities_games',
        'app.abilities',
        'app.ability_levels',
        'app.games',
        'app.wrestlers',
        'app.genders',
        'app.heights',
        'app.weight_classes',
        'app.reactions',
        'app.attributes_points',
        'app.attributes',
        'app.attributes_games',
        'app.wrestlers_hp',
        'app.wrestlers_personalty',
        'app.personalities',
        'app.wrestlers_abilities',
        'app.skills',
        'app.skill_levels',
        'app.wrestlers_skills',
        'app.platforms',
        'app.games_platforms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AbilitiesGames') ? [] : ['className' => 'App\Model\Table\AbilitiesGamesTable'];
        $this->AbilitiesGames = TableRegistry::get('AbilitiesGames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AbilitiesGames);

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
