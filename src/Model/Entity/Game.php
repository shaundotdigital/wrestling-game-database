<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Game Entity
 *
 * @property int $id
 * @property string $game_name
 * @property string $release_year
 *
 * @property \App\Model\Entity\Wrestler[] $wrestlers
 * @property \App\Model\Entity\Ability[] $abilities
 * @property \App\Model\Entity\Attribute[] $attributes
 * @property \App\Model\Entity\Platform[] $platforms
 */
class Game extends Entity
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
