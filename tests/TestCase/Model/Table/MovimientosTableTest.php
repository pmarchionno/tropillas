<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovimientosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovimientosTable Test Case
 */
class MovimientosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MovimientosTable
     */
    protected $Movimientos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Movimientos',
        'app.Campos',
        'app.Lotes',
        'app.Tropas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Movimientos') ? [] : ['className' => MovimientosTable::class];
        $this->Movimientos = $this->getTableLocator()->get('Movimientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Movimientos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
