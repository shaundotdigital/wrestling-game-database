<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GameDlcs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Games
 * @property \Cake\ORM\Association\HasMany $Wrestlers
 *
 * @method \App\Model\Entity\GameDlc get($primaryKey, $options = [])
 * @method \App\Model\Entity\GameDlc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GameDlc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GameDlc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GameDlc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GameDlc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GameDlc findOrCreate($search, callable $callback = null, $options = [])
 */
class GameDlcsTable extends Table
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

        $this->setTable('game_dlcs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Games', [
            'foreignKey' => 'game_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Wrestlers', [
            'foreignKey' => 'game_dlc_id'
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
            ->requirePresence('dlc_name', 'create')
            ->notEmpty('dlc_name');

        $validator
            ->integer('dlc_number')
            ->requirePresence('dlc_number', 'create')
            ->notEmpty('dlc_number');

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
        $rules->add($rules->existsIn(['game_id'], 'Games'));

        return $rules;
    }
}
