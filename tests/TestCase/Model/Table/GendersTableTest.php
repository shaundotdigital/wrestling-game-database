<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GendersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GendersTable Test Case
 */
class GendersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GendersTable
     */
    public $Genders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.genders',
        'app.wrestlers',
        'app.heights',
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
        $config = TableRegistry::exists('Genders') ? [] : ['className' => 'App\Model\Table\GendersTable'];
        $this->Genders = TableRegistry::get('Genders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Genders);

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
