<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReactionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReactionsTable Test Case
 */
class ReactionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReactionsTable
     */
    public $Reactions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.reactions',
        'app.wrestlers',
        'app.genders',
        'app.heights',
        'app.weight_classes',
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
        $config = TableRegistry::exists('Reactions') ? [] : ['className' => 'App\Model\Table\ReactionsTable'];
        $this->Reactions = TableRegistry::get('Reactions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Reactions);

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
