<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SkillLevels Model
 *
 * @method \App\Model\Entity\SkillLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\SkillLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SkillLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SkillLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SkillLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SkillLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SkillLevel findOrCreate($search, callable $callback = null, $options = [])
 */
class SkillLevelsTable extends Table
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

        $this->setTable('skill_levels');
        $this->setDisplayField('skill_levels');
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

        $validator
            ->requirePresence('skill_level', 'create')
            ->notEmpty('skill_level');

        return $validator;
    }
}
