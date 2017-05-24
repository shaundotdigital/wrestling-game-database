<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GameDlc Entity
 *
 * @property int $id
 * @property int $game_id
 * @property string $dlc_name
 * @property int $dlc_number
 *
 * @property \App\Model\Entity\Game $game
 * @property \App\Model\Entity\Wrestler[] $wrestlers
 */
class GameDlc extends Entity
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
