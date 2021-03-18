<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovimientosFixture
 */
class MovimientosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'campo1_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lote1_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'campo2_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lote2_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tropa_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'campo1_id' => ['type' => 'index', 'columns' => ['campo1_id'], 'length' => []],
            'lote1_id' => ['type' => 'index', 'columns' => ['lote1_id'], 'length' => []],
            'campo2_id' => ['type' => 'index', 'columns' => ['campo2_id'], 'length' => []],
            'lote2_id' => ['type' => 'index', 'columns' => ['lote2_id'], 'length' => []],
            'tropa_id' => ['type' => 'index', 'columns' => ['tropa_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'movimientos_ibfk_1' => ['type' => 'foreign', 'columns' => ['campo1_id'], 'references' => ['campos', 'id'], 'update' => 'noAction', 'delete' => 'setNull', 'length' => []],
            'movimientos_ibfk_5' => ['type' => 'foreign', 'columns' => ['tropa_id'], 'references' => ['tropas', 'id'], 'update' => 'noAction', 'delete' => 'setNull', 'length' => []],
            'movimientos_ibfk_4' => ['type' => 'foreign', 'columns' => ['lote2_id'], 'references' => ['lotes', 'id'], 'update' => 'noAction', 'delete' => 'setNull', 'length' => []],
            'movimientos_ibfk_3' => ['type' => 'foreign', 'columns' => ['campo2_id'], 'references' => ['campos', 'id'], 'update' => 'noAction', 'delete' => 'setNull', 'length' => []],
            'movimientos_ibfk_2' => ['type' => 'foreign', 'columns' => ['lote1_id'], 'references' => ['lotes', 'id'], 'update' => 'noAction', 'delete' => 'setNull', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'fecha' => '2021-03-18 00:44:51',
                'campo1_id' => 1,
                'lote1_id' => 1,
                'campo2_id' => 1,
                'lote2_id' => 1,
                'tropa_id' => 1,
                'cantidad' => 1,
            ],
        ];
        parent::init();
    }
}
