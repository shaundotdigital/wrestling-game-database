<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Games Model
 *
 * @property \Cake\ORM\Association\HasMany $Wrestlers
 * @property \Cake\ORM\Association\BelongsToMany $Abilities
 * @property \Cake\ORM\Association\BelongsToMany $Attributes
 * @property \Cake\ORM\Association\BelongsToMany $Platforms
 *
 * @method \App\Model\Entity\Game get($primaryKey, $options = [])
 * @method \App\Model\Entity\Game newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Game[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Game|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Game patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Game[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Game findOrCreate($search, callable $callback = null, $options = [])
 */
class GamesTable extends Table
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

        $this->setTable('games');
        $this->setDisplayField('game_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Wrestlers', [
            'foreignKey' => 'game_id'
        ]);
        $this->belongsToMany('Abilities', [
            'foreignKey' => 'game_id',
            'targetForeignKey' => 'ability_id',
            'joinTable' => 'abilities_games'
        ]);
        $this->belongsToMany('Attributes', [
            'foreignKey' => 'game_id',
            'targetForeignKey' => 'attribute_id',
            'joinTable' => 'attributes_games'
        ]);
        $this->belongsToMany('Platforms', [
            'foreignKey' => 'game_id',
            'targetForeignKey' => 'platform_id',
            'joinTable' => 'games_platforms'
        ]);
        $this->belongsTo('WeightClasses', [
            'foreignKey' => 'game_id',
            'targetForeignKey' => 'weight_class_id',
            'joinType' => 'weight_classes'
        ]);
        $this->belongsTo('Reactions', [
            'foreignKey' => 'game_id',
            'targetForeignKey' => 'reaction_id',
            'joinType' => 'reactions'
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
            ->requirePresence('game_name', 'create')
            ->notEmpty('game_name');

        $validator
            ->requirePresence('release_year', 'create')
            ->notEmpty('release_year');

        return $validator;
    }
}
