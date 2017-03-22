<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbilityLevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbilityLevelsTable Test Case
 */
class AbilityLevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AbilityLevelsTable
     */
    public $AbilityLevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ability_levels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AbilityLevels') ? [] : ['className' => 'App\Model\Table\AbilityLevelsTable'];
        $this->AbilityLevels = TableRegistry::get('AbilityLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AbilityLevels);

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
