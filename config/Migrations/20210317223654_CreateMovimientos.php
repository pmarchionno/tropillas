<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateMovimientos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('movimientos');
        $table->addColumn('fecha', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('campo1_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('lote1_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('campo2_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('lote2_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('tropa_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('cantidad', 'integer', [
            'default' => 1,
            'limit' => 11,
            'null' => true,
        ]);
        $table->create();
    }
}
