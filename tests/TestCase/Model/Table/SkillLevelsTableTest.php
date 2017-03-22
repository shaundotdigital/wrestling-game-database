<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SkillLevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SkillLevelsTable Test Case
 */
class SkillLevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SkillLevelsTable
     */
    public $SkillLevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.skill_levels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SkillLevels') ? [] : ['className' => 'App\Model\Table\SkillLevelsTable'];
        $this->SkillLevels = TableRegistry::get('SkillLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SkillLevels);

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
