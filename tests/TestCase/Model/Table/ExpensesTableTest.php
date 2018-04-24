<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpensesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpensesTable Test Case
 */
class ExpensesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpensesTable
     */
    public $Expenses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.expenses',
        'app.users',
        'app.expense_fields',
        'app.reminders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Expenses') ? [] : ['className' => ExpensesTable::class];
        $this->Expenses = TableRegistry::get('Expenses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Expenses);

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