<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Skill Entity
 *
 * @property int $id
 * @property string $skill_name
 * @property int $skill_levels_id
 *
 * @property \App\Model\Entity\SkillLevel $skill_level
 * @property \App\Model\Entity\Wrestler[] $wrestlers
 */
class Skill extends Entity
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
