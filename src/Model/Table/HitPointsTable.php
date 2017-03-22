<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HitPoints Model
 *
 * @method \App\Model\Entity\HitPoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\HitPoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HitPoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HitPoint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HitPoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HitPoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HitPoint findOrCreate($search, callable $callback = null, $options = [])
 */
class HitPointsTable extends Table
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

        $this->setTable('hit_points');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
}
