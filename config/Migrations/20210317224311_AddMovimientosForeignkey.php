<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddMovimientosForeignkey extends AbstractMigration
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
        $table->addForeignKey('campo1_id', 'campos', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION']);
        $table->addForeignKey('lote1_id', 'lotes', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION']);
        $table->addForeignKey('campo2_id', 'campos', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION']);
        $table->addForeignKey('lote2_id', 'lotes', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION']);
        $table->addForeignKey('tropa_id', 'tropas', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION']);
        $table->update();
    }
}
