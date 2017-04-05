<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Abilities Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AbilityLevels
 * @property \Cake\ORM\Association\BelongsToMany $Games
 * @property \Cake\ORM\Association\BelongsToMany $Wrestlers
 *
 * @method \App\Model\Entity\Ability get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ability newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ability[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ability|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ability[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ability findOrCreate($search, callable $callback = null, $options = [])
 */
class AbilitiesTable extends Table
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

        $this->setTable('abilities');
        $this->setDisplayField('abilityNamedLevel');
        $this->setPrimaryKey('id');

        $this->belongsTo('AbilityLevels', [
            'foreignKey' => 'ability_level_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Games', [
            'foreignKey' => 'ability_id',
            'targetForeignKey' => 'game_id',
            'joinTable' => 'abilities_games'
        ]);
        $this->belongsToMany('Wrestlers', [
            'foreignKey' => 'ability_id',
            'targetForeignKey' => 'wrestler_id',
            'joinTable' => 'wrestlers_abilities'
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
            ->requirePresence('ability_name', 'create')
            ->notEmpty('ability_name');

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
        $rules->add($rules->existsIn(['ability_level_id'], 'AbilityLevels'));

        return $rules;
    }
}
