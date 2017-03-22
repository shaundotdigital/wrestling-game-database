<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeightClassesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeightClassesTable Test Case
 */
class WeightClassesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WeightClassesTable
     */
    public $WeightClasses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.weight_classes',
        'app.wrestlers',
        'app.genders',
        'app.heights',
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
        $config = TableRegistry::exists('WeightClasses') ? [] : ['className' => 'App\Model\Table\WeightClassesTable'];
        $this->WeightClasses = TableRegistry::get('WeightClasses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WeightClasses);

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
