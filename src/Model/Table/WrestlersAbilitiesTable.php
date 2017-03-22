<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WrestlersAbilities Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Wrestlers
 * @property \Cake\ORM\Association\BelongsTo $Abilities
 *
 * @method \App\Model\Entity\WrestlersAbility get($primaryKey, $options = [])
 * @method \App\Model\Entity\WrestlersAbility newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WrestlersAbility[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WrestlersAbility|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WrestlersAbility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WrestlersAbility[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WrestlersAbility findOrCreate($search, callable $callback = null, $options = [])
 */
class WrestlersAbilitiesTable extends Table
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

        $this->setTable('wrestlers_abilities');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Wrestlers', [
            'foreignKey' => 'wrestler_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Abilities', [
            'foreignKey' => 'ability_id',
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
        $rules->add($rules->existsIn(['ability_id'], 'Abilities'));

        return $rules;
    }
}
