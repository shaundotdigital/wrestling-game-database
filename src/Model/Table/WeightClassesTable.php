<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WeightClasses Model
 *
 * @property \Cake\ORM\Association\HasMany $Wrestlers
 *
 * @method \App\Model\Entity\WeightClass get($primaryKey, $options = [])
 * @method \App\Model\Entity\WeightClass newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WeightClass[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WeightClass|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WeightClass patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WeightClass[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WeightClass findOrCreate($search, callable $callback = null, $options = [])
 */
class WeightClassesTable extends Table
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

        $this->setTable('weight_classes');
        $this->setDisplayField('weight_class');
        $this->setPrimaryKey('id');

        $this->hasMany('Wrestlers', [
            'foreignKey' => 'weight_class_id'
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
            ->requirePresence('weight_class', 'create')
            ->notEmpty('weight_class');

        return $validator;
    }
}
