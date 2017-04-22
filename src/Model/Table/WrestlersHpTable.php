<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WrestlersHp Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Wrestlers
 *
 * @method \App\Model\Entity\WrestlersHp get($primaryKey, $options = [])
 * @method \App\Model\Entity\WrestlersHp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WrestlersHp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WrestlersHp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WrestlersHp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WrestlersHp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WrestlersHp findOrCreate($search, callable $callback = null, $options = [])
 */
class WrestlersHpTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('wrestlers_hp');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Wrestlers', [
            'foreignKey' => 'wrestler_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('head')
            ->requirePresence('head', 'create')
            ->notEmpty('head');

        $validator
            ->integer('body')
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->integer('arms')
            ->requirePresence('arms', 'create')
            ->notEmpty('arms');

        $validator
            ->integer('legs')
            ->requirePresence('legs', 'create')
            ->notEmpty('legs');

        $validator
            ->integer('total_hp')
            ->requirePresence('total_hp', 'create')
            ->notEmpty('total_hp');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['wrestler_id'], 'Wrestlers'));

        return $rules;
    }
}
