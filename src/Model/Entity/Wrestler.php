<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Wrestler Entity
 *
 * @property int $id
 * @property string $wrestler_name
 * @property int $overall
 * @property int $gender_id
 * @property int $height_id
 * @property int $weight_class_id
 * @property int $reaction_id
 * @property int $game_id
 *
 * @property \App\Model\Entity\Gender $gender
 * @property \App\Model\Entity\Height $height
 * @property \App\Model\Entity\WeightClass $weight_class
 * @property \App\Model\Entity\Reaction $reaction
 * @property \App\Model\Entity\Game $game
 * @property \App\Model\Entity\AttributesPoint[] $attributes_points
 * @property \App\Model\Entity\WrestlersHp[] $wrestlers_hp
 * @property \App\Model\Entity\WrestlersPersonalty[] $wrestlers_personalty
 * @property \App\Model\Entity\Ability[] $abilities
 * @property \App\Model\Entity\Skill[] $skills
 */
class Wrestler extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}