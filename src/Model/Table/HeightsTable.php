<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Heights Model
 *
 * @property \Cake\ORM\Association\HasMany $Wrestlers
 *
 * @method \App\Model\Entity\Height get($primaryKey, $options = [])
 * @method \App\Model\Entity\Height newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Height[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Height|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Height patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Height[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Height findOrCreate($search, callable $callback = null, $options = [])
 */
class HeightsTable extends Table
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

        $this->setTable('heights');
        $this->setDisplayField('height');
        $this->setPrimaryKey('id');

        $this->hasMany('Wrestlers', [
            'foreignKey' => 'height_id'
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
            ->requirePresence('height', 'create')
            ->notEmpty('height');

        return $validator;
    }
}
