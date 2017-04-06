<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AbilityLevel Entity
 *
 * @property int $id
 * @property string $level
 *
 * @property \App\Model\Entity\Ability[] $abilities
 */
class AbilityLevel extends Entity
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
