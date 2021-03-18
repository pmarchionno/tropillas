<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TropasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TropasTable Test Case
 */
class TropasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TropasTable
     */
    protected $Tropas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tropas',
        'app.Movimientos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tropas') ? [] : ['className' => TropasTable::class];
        $this->Tropas = $this->getTableLocator()->get('Tropas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tropas);

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
}
