<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlatformsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlatformsTable Test Case
 */
class PlatformsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlatformsTable
     */
    public $Platforms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.platforms',
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
        'app.wrestlers_personality',
        'app.personalities',
        'app.abilities',
        'app.ability_levels',
        'app.abilities_games',
        'app.wrestlers_abilities',
        'app.skills',
        'app.skill_levels',
        'app.wrestlers_skills',
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
        $config = TableRegistry::exists('Platforms') ? [] : ['className' => 'App\Model\Table\PlatformsTable'];
        $this->Platforms = TableRegistry::get('Platforms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Platforms);

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
