<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AttributesGames Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Attributes
 * @property \Cake\ORM\Association\BelongsTo $Games
 *
 * @method \App\Model\Entity\AttributesGame get($primaryKey, $options = [])
 * @method \App\Model\Entity\AttributesGame newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AttributesGame[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AttributesGame|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AttributesGame patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AttributesGame[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AttributesGame findOrCreate($search, callable $callback = null, $options = [])
 */
class AttributesGamesTable extends Table
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

        $this->setTable('attributes_games');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Attributes', [
            'foreignKey' => 'attribute_id',
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
        $rules->add($rules->existsIn(['attribute_id'], 'Attributes'));
        $rules->add($rules->existsIn(['game_id'], 'Games'));

        return $rules;
    }
}
