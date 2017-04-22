<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AbilityLevels Model
 *
 * @property \Cake\ORM\Association\HasMany $Abilities
 *
 * @method \App\Model\Entity\AbilityLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\AbilityLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AbilityLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AbilityLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AbilityLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AbilityLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AbilityLevel findOrCreate($search, callable $callback = null, $options = [])
 */
class AbilityLevelsTable extends Table
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

        $this->setTable('ability_levels');
        $this->setDisplayField('level');
        $this->setPrimaryKey('id');

        $this->hasMany('Abilities', [
            'foreignKey' => 'ability_level_id'
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
            ->requirePresence('level', 'create')
            ->notEmpty('level');

        return $validator;
    }
}
