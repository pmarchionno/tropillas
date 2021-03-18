<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campos Model
 *
 * @property \App\Model\Table\LotesTable&\Cake\ORM\Association\HasMany $Lotes
 *
 * @method \App\Model\Entity\Campo newEmptyEntity()
 * @method \App\Model\Entity\Campo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Campo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Campo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CamposTable extends Table
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

        $this->setTable('campos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Lotes', [
            'foreignKey' => 'campo_id',
        ]);

//        $this->belongsTo('MovimientosA', [
//            'foreignKey' => 'campo1_id',
//            'className' => 'Movimientos'
//        ]);
//        $this->belongsTo('Movimientos', [
//            'foreignKey' => 'campo2_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
