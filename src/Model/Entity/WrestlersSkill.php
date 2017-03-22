<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WrestlersSkill Entity
 *
 * @property int $id
 * @property int $wrestler_id
 * @property int $skill_id
 *
 * @property \App\Model\Entity\Wrestler $wrestler
 * @property \App\Model\Entity\Skill $skill
 */
class WrestlersSkill extends Entity
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
