<?php
/**
* @var \App\View\AppView $this
*/
?>
<!-- <div class="container">
<?php
$this->Html->addCrumb('Wrestler', '/wrestlers');
$this->Html->addCrumb($wrestler->game->game_name, '/games/view/' . strtolower(str_replace(' ', '-', $wrestler->game->id)));
$this->Html->addCrumb($wrestler->wrestler_name, '/wrestlers/view/' . strtolower(str_replace(' ', '-', $wrestler->id)));
?>
</div> -->

<div class="wrestler-header <?=strtolower(str_replace(' ', '-', $wrestler->game->game_name)) ?>">
  <div class="container">      <div class="wrestler-render left">
          <div class="wrestler-image">
            <?= $this->Html->image('renders/' . strtolower(str_replace(' ', '', $wrestler->game->game_name)) . '/' . $wrestler->pac . '-' . $wrestler->game->release_year . '.png')?>
          </div>
        </div>
    <div class="content-wrestler-header <?= strtolower($wrestler->first_name). '-' . strtolower($wrestler->last_name) ?>">

      <div class="wrestler-overall left">
        <span class="label main-overall">
          <?= $this->Number->format($wrestler->overall) ?>
        </span>
      </div>
      <div class="wrestler-info left">
      <div class="wrestler-name">
          <small><?= $wrestler->first_name ?></small>
          <h3><?= $wrestler->last_name ?></h3>
      </div>
      <div class="wrestler-more">
        <small>
        <?= $wrestler->height->height ?>
        -
        <?= $wrestler->weight_class->weight_class ?>
        <? if ($wrestler->nickname) { ?>- <?
          echo h($wrestler->nickname);
        } ?>
      </small>
    </div>
      </div>
    </div>
    <div class="content-game-header">
      <div class="game-info">
        <div class="game-logo">
          <?= $this->Html->image('games/logos/'.$wrestler->game->game_img)?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="content">
  <div class="wrestler large-8 columns">
    <div class="panel panel-default">
      <div class="panel-heading" id="panel-comment">
        <?= __('Attributes') ?>
      </div>
      <div class="wrestler-attributes">
        <table cellpadding="0" cellspacing="0" class="panel-table">
          <?php foreach ($wrestler->attributes_points as $attributesPoints): ?>
            <tr class="wrestler-attribute-<?= strtolower(str_replace(' ', '-', $attributesPoints->attribute->attribute_name)) ?> col-3">
              <td class="attribute-name left">
                <?= h($attributesPoints->attribute->attribute_name) ?>
              </td>
              <td class="attribute-value right">
                <span class="label attribute">
                  <?= h($attributesPoints->value) ?>
              </span></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

  <div class="wrestler medium-4 columns">
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
      <div class="wrestler-personality">
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
                  <div class="personality-range-value">
                      <span class="personality-range-slider__value"><?= h($wrestlersPersonality->value) ?></span>
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
        <?= __('Hit Points Ratio') ?>
      </div>
    <div class="wrestler-hitpoints">
        <?php if (!empty($wrestler->wrestlers_hp)): ?>
        <table cellpadding="0" cellspacing="0" class="panel-table">
            <?php foreach ($wrestler->wrestlers_hp as $wrestlersHp): ?>
            <tr class="wrestler-hp head">
                <td><?= __('Head') ?></td>
                <td class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider__range" type="range" value='<?= h($wrestlersHp->head) ?>' min="0" max="2000" disabled>
                  </div>
                </td>
                <td style="float:right;"><?= h($wrestlersHp->head) ?>.0 pts</td>
            </tr>
            <tr class="wrestler-hp body">
                <td><?= __('Body') ?></td>
                <td class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider__range" type="range" value='<?= h($wrestlersHp->body) ?>' min="0" max="2000" disabled>
                  </div>
                </td>
                <td style="float:right;"><?= h($wrestlersHp->body) ?>.0 pts</td>
            </tr>
            <tr class="wrestler-hp arms">
                <td><?= __('Arms') ?></td>
                <td class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider__range" type="range" value='<?= h($wrestlersHp->arms) ?>' min="0" max="2000" disabled>
                  </div>
                </td>
                <td style="float:right;"><?= h($wrestlersHp->arms) ?>.0 pts</td>
            </tr>
            <tr class="wrestler-hp legs">
                <td><?= __('Legs') ?></td>
                <td class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider__range" type="range" value='<?= h($wrestlersHp->legs) ?>' min="0" max="2000" disabled>
                  </div>
                </td>
                <td style="float:right;"><?= h($wrestlersHp->legs) ?>.0 pts</td>
            </tr>
            <?php endforeach; ?>
        </table>
        <div class="wrestler-total-hp">
          <div class="wrestler-hp-title"><?= __('Total') ?></div>
          <div class="wrestler-hp-total"><?= h($wrestlersHp->total_hp) ?>.0 pts</div>
        </div>
        <?php endif; ?>
    </div>
  </div>
  </div>

  <div class="wrestler large-12 columns">
      <div class="panel panel-default">
        <div class="panel-heading" id="panel-comment">
          <?= __('Abilities') ?>
        </div>
        <?php if (!empty($wrestler->abilities)): ?>
          <div class="wrestler-abilities">
            <table cellpadding="0" cellspacing="0" class="panel-table">
              <?php foreach ($wrestler->abilities as $abilities): ?>
                <tr class="row-2">
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
      <div class="panel panel-default">
        <div class="panel-heading" id="panel-comment">
          <?= __('Skills') ?>
        </div>
        <?php if (!empty($wrestler->skills)): ?>
          <div class="wrestler-skills">
          <table cellpadding="0" cellspacing="0" class="panel-table">
            <?php foreach ($wrestler->skills as $skills): ?>
              <tr class="col-4">
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
