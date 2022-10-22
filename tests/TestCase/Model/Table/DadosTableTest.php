<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DadosTable Test Case
 */
class DadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DadosTable
     */
    public $Dados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dados') ? [] : ['className' => DadosTable::class];
        $this->Dados = TableRegistry::getTableLocator()->get('Dados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dados);

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
