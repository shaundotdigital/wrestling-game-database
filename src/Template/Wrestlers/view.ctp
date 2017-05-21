<?php
/**
* @var \App\View\AppView $this
*/
?>
<div class="wrestler-header <?=($wrestler->game->game_name)?>">
  <div class="container">
    <div class="content-wrestler-header-left <?= strtolower($wrestler->first_name). '-' . strtolower($wrestler->last_name) ?>">
      <div class="wrestler-render push-left">
        <div class="wrestler-image">
          <?= $this->Html->image('renders/' . strtolower(str_replace(' ', '', $wrestler->game->game_name)) . '/' . $wrestler->pac . '-' . $wrestler->game->release_year . '.png')?>
        </div>
      </div>
      <div class="wrestler-info">
        <div class="wrestler-firstname">
          <h3><?= $wrestler->first_name ?></h3>
        </div>
        <div class="wrestler-lastname">
          <h3><?= $wrestler->last_name ?></h3>
        </div>
        <div class="wrestler-nickname">
          <h3><? if ($wrestler->nickname) {
            echo h($wrestler->nickname);
          } ?></h3>
        </div>
        <!-- <div class="wrestler-overall">
          <tr><?= __('Overall') ?>
            <h2><?= $this->Number->format($wrestler->overall) ?></h2>
          </tr>
        </div> -->
      </div>
    </div>
    <div class="content-wrestler-header-right <?= strtolower(str_replace(' ', '', $wrestler->game->game_name))?>" align="right">
      <div class="game-info">
        <!-- <div class="game-logo">
          <?= $this->Html->image('games/logos/'.$wrestler->game->game_img)?>
        </div> -->
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="wrestlers view large-8 columns content">
    <div class="panel panel-default">
      <div class="panel-heading" id="panel-comment">
        <?= __('Attributes') ?>
      </div>
      <div class="Attributes">
        <table cellpadding="0" cellspacing="0" class="panel-table">
          <?php foreach ($wrestler->attributes_points as $attributesPoints): ?>
            <tr class="inlineblock33">
              <td>
                <?= h($attributesPoints->attribute->attribute_name) ?>
              </td>
              <td class="float-right attributeValue"><span class="label attribute"><?= h($attributesPoints->value) ?></span></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
  <div class="wrestlers view medium-4 columns content">
    <div class="panel panel-default">
      <div class="panel-heading" id="panel-comment">
        <? if ($wrestler->nickname) {
          echo h($wrestler->nickname);
        } ?>
        <?=($wrestler->wrestler_name)?>
      </div>
      <table class="vertical-table">
        <tr>
          <th scope="row"><?= __('Gender') ?></th>
          <td><?= $wrestler->has('gender') ? $this->Html->link($wrestler->gender->gender, ['controller' => 'Genders', 'action' => 'view', $wrestler->gender->id]) : '' ?></td>
        </tr>
        <tr><th scope="row"><?= __('Height') ?></th>
          <td><?= $wrestler->has('height') ? $this->Html->link($wrestler->height->height, ['controller' => 'Heights', 'action' => 'view', $wrestler->height->id]) : '' ?></td>
        </tr>
        <tr>
          <th scope="row"><?= __('Weight Class') ?></th>
          <td><?= $wrestler->has('weight_class') ? $this->Html->link($wrestler->weight_class->weight_class, ['controller' => 'WeightClasses', 'action' => 'view', $wrestler->weight_class->id]) : '' ?></td>
        </tr>
        <tr>
          <th scope="row"><?= __('Reaction') ?></th>
          <td><?= $wrestler->has('reaction') ? $this->Html->link($wrestler->reaction->crowd_reaction, ['controller' => 'Reactions', 'action' => 'view', $wrestler->reaction->id]) : '' ?></td>
        </tr>
        <tr>
          <th scope="row"><?= __('Pac') ?></th>
          <td><?= $this->Number->format($wrestler->pac) ?></td>
        </tr>
      </table>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" id="panel-comment">
        <?= __('Personality') ?>
      </div>
      <div class="related">
        <?php if (!empty($wrestler->wrestlers_personality)): ?>
          <table cellpadding="0" cellspacing="0" class="panel-table">
            <?php foreach ($wrestler->wrestlers_personality as $wrestlersPersonality): ?>
              <tr>
                <td>
                  <div class="positive-personality">
                    <?= h($wrestlersPersonality->personality->name) ?>
                  </div>
                </td>
                <td class="personality-slider">
                  <div class="personality-range-slider">
                    <input class="personality-range-slider__range" type="range" value='<?= h($wrestlersPersonality->value) ?>' min="-100" max="100" disabled>
                  </div>
                </td>
                <td style=float:right;>
                  <div class="negative-personality">
                    <?= h($wrestlersPersonality->personality->negative_name) ?>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        <?php endif; ?>
      </div>
    </div>



    <div class="panel panel-default">
      <div class="panel-heading" id="panel-comment">
        <?= __('Hit Points') ?>
      </div>
    <div class="related">
        <?php if (!empty($wrestler->wrestlers_hp)): ?>
        <table cellpadding="0" cellspacing="0" class="panel-table">
            <!-- <tr>
                <th scope="col"><?= __('Head') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Arms') ?></th>
                <th scope="col"><?= __('Legs') ?></th>
            </tr> -->
            <?php foreach ($wrestler->wrestlers_hp as $wrestlersHp): ?>
            <tr>
              <div class="wrestler-hp head">
                <td><?= __('Head') ?></td>
                <td class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider__range" type="range" value='<?= h($wrestlersHp->head) ?>' min="0" max="2000" disabled>
                  </div>
                </td>
                <td class="float-right"><?= h($wrestlersHp->head) ?></td>
              </div>
            </tr>
            <tr>
              <div class="wrestler-hp body">
                <td><?= __('Body') ?></td>
                <td class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider__range" type="range" value='<?= h($wrestlersHp->body) ?>' min="0" max="2000" disabled>
                  </div>
                </td>
                <td class="float-right"><?= h($wrestlersHp->body) ?></td>
              </div>
            </tr>
            <tr>
              <div class="wrestler-hp arms">
                <td><?= __('Arms') ?></td>
                <td class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider__range" type="range" value='<?= h($wrestlersHp->arms) ?>' min="0" max="2000" disabled>
                  </div>
                </td>
                <td class="float-right"><?= h($wrestlersHp->arms) ?></td>
              </div>
            </tr>
            <tr>
              <div class="wrestler-hp legs">
                <td><?= __('Legs') ?></td>
                <td class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider__range" type="range" value='<?= h($wrestlersHp->legs) ?>' min="0" max="2000" disabled>
                  </div>
                </td>
                <td class="float-right"><?= h($wrestlersHp->legs) ?></td>
              </div>
            </tr>
              <th class="wrestler-hp total-hp"><?= __('Total Hp') ?></th>
              <tr>
                <td><?= h($wrestlersHp->total_hp) ?></td>
              </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
  </div>
  </div>
<span class="personality-range-slider__value"><?= h($wrestlersPersonality->value) ?></span>

  <div class="wrestlers view large-12 columns content">
    <div class="related">
      <div class="panel panel-default">
        <div class="panel-heading" id="panel-comment">
          <?= __('Abilities') ?>
        </div>
        <?php if (!empty($wrestler->abilities)): ?>
          <div class="Abilities">
            <table cellpadding="0" cellspacing="0" class="panel-table">
              <?php foreach ($wrestler->abilities as $abilities): ?>
                <tr class="inlineblock20">
                  <td class="abilityValue">
                    <div class="abilities-image">
                      <!-- <?='Level' .' '. h($abilities->ability_level_id) ?> -->
                      <?= $this->Html->image('assets/abilities/' . strtolower(str_replace(' ', '', $wrestler->game->game_name)) . '/' . strtolower(str_replace(' ', '-',$abilities->ability_name)) . '-' . $abilities->ability_level_id . '.png') ?>
                    </div>
                    <?= h($abilities->ability_name) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="related">
      <div class="panel panel-default">
        <div class="panel-heading" id="panel-comment">
          <?= __('Skills') ?>
        </div>
        <?php if (!empty($wrestler->skills)): ?>
          <table cellpadding="0" cellspacing="0" class="panel-table">
            <?php foreach ($wrestler->skills as $skills): ?>
              <tr class="inlineblock">
                <td>
                  <?= h($skills->skill_name) ?>
                </td>
                <td class="float-right skillValue">
                  <?= h($skills->skill_levels_id) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
