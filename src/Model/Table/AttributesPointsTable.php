<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AttributesPoints Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Wrestlers
 * @property \Cake\ORM\Association\BelongsTo $Attributes
 *
 * @method \App\Model\Entity\AttributesPoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\AttributesPoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AttributesPoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AttributesPoint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AttributesPoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AttributesPoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AttributesPoint findOrCreate($search, callable $callback = null, $options = [])
 */
class AttributesPointsTable extends Table
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

        $this->setTable('attributes_points');
        $this->setDisplayField('attribute_name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Wrestlers', [
            'foreignKey' => 'wrestler_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Attributes', [
            'foreignKey' => 'attribute_id',
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
            ->integer('value')
            ->requirePresence('value', 'create')
            ->notEmpty('value');

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
        $rules->add($rules->existsIn(['attribute_id'], 'Attributes'));

        return $rules;
    }
}
