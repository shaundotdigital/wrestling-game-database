<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttributesGamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttributesGamesTable Test Case
 */
class AttributesGamesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AttributesGamesTable
     */
    public $AttributesGames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.attributes_games',
        'app.attributes',
        'app.attributes_points',
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
        'app.platforms',
        'app.games_platforms',
        'app.wrestlers_hp',
        'app.wrestlers_personalty',
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
        $config = TableRegistry::exists('AttributesGames') ? [] : ['className' => 'App\Model\Table\AttributesGamesTable'];
        $this->AttributesGames = TableRegistry::get('AttributesGames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AttributesGames);

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
