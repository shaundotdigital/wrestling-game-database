<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wrestlers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Genders
 * @property \Cake\ORM\Association\BelongsTo $Heights
 * @property \Cake\ORM\Association\BelongsTo $WeightClasses
 * @property \Cake\ORM\Association\BelongsTo $Reactions
 * @property \Cake\ORM\Association\BelongsTo $Games
 * @property \Cake\ORM\Association\HasMany $AttributesPoints
 * @property \Cake\ORM\Association\HasMany $WrestlersHp
 * @property \Cake\ORM\Association\HasMany $WrestlersPersonality
 * @property \Cake\ORM\Association\BelongsToMany $Abilities
 * @property \Cake\ORM\Association\BelongsToMany $Skills
 *
 * @method \App\Model\Entity\Wrestler get($primaryKey, $options = [])
 * @method \App\Model\Entity\Wrestler newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Wrestler[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Wrestler|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wrestler patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Wrestler[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Wrestler findOrCreate($search, callable $callback = null, $options = [])
 */
class WrestlersTable extends Table
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


        $this->setTable('wrestlers');
        $this->setDisplayField('wrestler_name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Genders', [
            'foreignKey' => 'gender_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Heights', [
            'foreignKey' => 'height_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('WeightClasses', [
            'foreignKey' => 'weight_class_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Reactions', [
            'foreignKey' => 'reaction_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Games', [
            'foreignKey' => 'game_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AttributesPoints', [
            'foreignKey' => 'wrestler_id'
        ]);
        $this->hasMany('WrestlersHp', [
            'foreignKey' => 'wrestler_id'
        ]);
        $this->hasMany('WrestlersPersonality', [
            'foreignKey' => 'wrestler_id'
        ]);
        $this->belongsToMany('Abilities', [
            'foreignKey' => 'wrestler_id',
            'targetForeignKey' => 'ability_id',
            'joinTable' => 'wrestlers_abilities'
        ]);
        $this->belongsToMany('Skills', [
            'foreignKey' => 'wrestler_id',
            'targetForeignKey' => 'skill_id',
            'joinTable' => 'wrestlers_skills'
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
          ->integer('pac')
          ->requirePresence('pac', 'create')
          ->notEmpty('pac');

        $validator
            ->integer('pac')
            ->requirePresence('pac', 'create')
            ->notEmpty('pac');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('first_name', 'create')
            ->allowEmpty('first_name');

        $validator
            ->requirePresence('nickname', 'create')
            ->allowEmpty('nickname');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->integer('overall')
            ->requirePresence('overall', 'create')
            ->notEmpty('overall');

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
        $rules->add($rules->existsIn(['gender_id'], 'Genders'));
        $rules->add($rules->existsIn(['height_id'], 'Heights'));
        $rules->add($rules->existsIn(['weight_class_id'], 'WeightClasses'));
        $rules->add($rules->existsIn(['reaction_id'], 'Reactions'));
        $rules->add($rules->existsIn(['game_id'], 'Games'));

        return $rules;
    }
}
