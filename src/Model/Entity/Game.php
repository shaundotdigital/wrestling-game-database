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

    protected function _getReleaseYear() {
      return $this->_properties['release_year'];
    }

    // protected function _getGameImg() {
    //   return str_replace(' ', '', $this->game_name)  . '-' . $this->release_year . '.png';
    // }

    protected function _getGameImg() {
      $titleSymbols = array( '!', ':', '.' ,'\'');
      return strtolower(str_replace($titleSymbols, '', (str_replace(' ', '-', $this->game_name)))) . '-' . $this->release_year . '.png';

    }

}
