<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AbilitiesGames Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Abilities
 * @property \Cake\ORM\Association\BelongsTo $Games
 *
 * @method \App\Model\Entity\AbilitiesGame get($primaryKey, $options = [])
 * @method \App\Model\Entity\AbilitiesGame newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AbilitiesGame[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AbilitiesGame|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AbilitiesGame patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AbilitiesGame[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AbilitiesGame findOrCreate($search, callable $callback = null, $options = [])
 */
class AbilitiesGamesTable extends Table
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

        $this->setTable('abilities_games');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Abilities', [
            'foreignKey' => 'ability_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Games', [
            'foreignKey' => 'game_id',
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
        $rules->add($rules->existsIn(['ability_id'], 'Abilities'));
        $rules->add($rules->existsIn(['game_id'], 'Games'));

        return $rules;
    }
}
