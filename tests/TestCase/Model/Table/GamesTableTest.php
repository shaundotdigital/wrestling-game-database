<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GamesTable Test Case
 */
class GamesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GamesTable
     */
    public $Games;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.abilities',
        'app.ability_levels',
        'app.abilities_games',
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
        $config = TableRegistry::exists('Games') ? [] : ['className' => 'App\Model\Table\GamesTable'];
        $this->Games = TableRegistry::get('Games', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Games);

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
