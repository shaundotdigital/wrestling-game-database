<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reactions Model
 *
 * @property \Cake\ORM\Association\HasMany $Wrestlers
 *
 * @method \App\Model\Entity\Reaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reaction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Reaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reaction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reaction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reaction findOrCreate($search, callable $callback = null, $options = [])
 */
class ReactionsTable extends Table
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

        $this->setTable('reactions');
        $this->setDisplayField('crowd_reaction');
        $this->setPrimaryKey('id');

        $this->hasMany('Wrestlers', [
            'foreignKey' => 'reaction_id'
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
            ->requirePresence('crowd_reaction', 'create')
            ->notEmpty('crowd_reaction');

        return $validator;
    }
}
