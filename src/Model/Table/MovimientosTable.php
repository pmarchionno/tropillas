<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movimientos Model
 *
 * @property \App\Model\Table\CamposTable&\Cake\ORM\Association\BelongsTo $Campos
 * @property \App\Model\Table\LotesTable&\Cake\ORM\Association\BelongsTo $Lotes
 * @property \App\Model\Table\CamposTable&\Cake\ORM\Association\BelongsTo $Campos
 * @property \App\Model\Table\LotesTable&\Cake\ORM\Association\BelongsTo $Lotes
 * @property \App\Model\Table\TropasTable&\Cake\ORM\Association\BelongsTo $Tropas
 *
 * @method \App\Model\Entity\Movimiento newEmptyEntity()
 * @method \App\Model\Entity\Movimiento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movimiento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Movimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimiento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MovimientosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('movimientos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Campos', [
            'foreignKey' => 'campo1_id',
        ]);
        $this->belongsTo('Lotes', [
            'foreignKey' => 'lote1_id',
        ]);
        $this->belongsTo('Campos', [
            'foreignKey' => 'campo2_id',
        ]);
        $this->belongsTo('Lotes', [
            'foreignKey' => 'lote2_id',
        ]);
        $this->belongsTo('Tropas', [
            'foreignKey' => 'tropa_id',
        ]);

//        $this->hasMany('CamposA', [
//            'foreignKey' => 'campo1_id',
//            'joinType' => 'INNER',
//            'className' => 'Campos',
//        ]);
//        $this->hasMany('LotesA', [
//            'foreignKey' => 'lote1_id',
//            'joinType' => 'INNER',
//            'className' => 'Lotes',
//        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->integer('cantidad')
            ->allowEmptyString('cantidad');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['campo1_id'], 'Campos'), ['errorField' => 'campo1_id']);
        $rules->add($rules->existsIn(['lote1_id'], 'Lotes'), ['errorField' => 'lote1_id']);
        $rules->add($rules->existsIn(['campo2_id'], 'Campos'), ['errorField' => 'campo2_id']);
        $rules->add($rules->existsIn(['lote2_id'], 'Lotes'), ['errorField' => 'lote2_id']);
        $rules->add($rules->existsIn(['tropa_id'], 'Tropas'), ['errorField' => 'tropa_id']);

        return $rules;
    }
}
