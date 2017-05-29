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
  <div class="container">
    <div class="wrestler-render left">
      <div class="wrestler-image">
        <?= $this->Html->image('renders/' . strtolower(str_replace(' ', '-', $wrestler->game->game_name)) . '/' . $wrestler->pac . '-' . $wrestler->game->release_year . '.png')?>
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
            <? if ($wrestler->reaction->crowd_reaction) { ?>- <?
              echo $wrestler->reaction->crowd_reaction;
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
    <?php if (!empty($wrestler->attributes_points)): ?>
      <div class="wrestler large-8 columns">
        <div class="panel attributes">
          <div class="panel-heading panel-title">
            <?= __('Attributes') ?>
          </div>
          <div class="panel-table">
            <?php foreach ($wrestler->attributes_points as $attributesPoints): ?>
              <div class="wrestler-attribute item col-3 <?= strtolower(str_replace(' ', '-', $attributesPoints->attribute->attribute_name)) ?>">
                <span class="attribute-name left "><?= h($attributesPoints->attribute->attribute_name) ?></span>
                <div class="attribute-value">
                  <span class="label attribute right"><?= h($attributesPoints->value) ?></span>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>
        <?php if (!empty($wrestler->skills)):

        $skill_levels_id_1 = array();
        $skill_levels_id_2 = array();
        $skill_levels_id_3 = array();
        $skill_levels_id_4 = array();

        foreach ($wrestler->skills as $skill) {
          switch ($skill->skill_levels_id) {
            case 1:
              array_push($skill_levels_id_1, $skill);
              break;
            case 2:
              array_push($skill_levels_id_2, $skill);
              break;
            case 3:
              array_push($skill_levels_id_3, $skill);
              break;
            case 4:
              array_push($skill_levels_id_4, $skill);
              break;
            default:
              break;
          }
        } ?>
        <div class="panel skills">
          <div class="panel-heading panel-title">
            <?= __('Skills') ?>
          </div>
          <div class="panel-table">
            <div class="wrestler-skills item col-4">
              <div class="panel-heading panel-title minor">
                <?= __('Basic Action') ?>
              </div>
              <?php foreach ($skill_levels_id_1 as $skill): ?>
                <div class="skill">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <?= h($skill->skill_name) ?>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="wrestler-skills item col-4">
              <div class="panel-heading panel-title minor">
                <?= __('Special Match Action') ?>
              </div>
              <?php foreach ($skill_levels_id_2 as $skill): ?>
                <div class="skill">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <?= h($skill->skill_name) ?>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="wrestler-skills item col-4">
              <div class="panel-heading panel-title minor">
                <?= __('Special Action') ?>
              </div>
              <?php foreach ($skill_levels_id_3 as $skill): ?>
                <div class="skill">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <?= h($skill->skill_name) ?>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="wrestler-skills item col-4">
              <div class="panel-heading panel-title minor">
                <?= __('OMG!') ?>
              </div>
              <?php foreach ($skill_levels_id_4 as $skill): ?>
                <div class="skill">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <?= h($skill->skill_name) ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="wrestler medium-4 columns">
      <?php if (!empty($wrestler->wrestlers_hp)): ?>
        <div class="panel hit-point-ratio">
          <div class="panel-heading panel-title">
            <?= __('Hit Points Ratio') ?>
          </div>
          <div class="panel-table">
            <?php foreach ($wrestler->wrestlers_hp as $wrestlersHp): ?>
              <div class="wrestler-hp head item">
                <div class="hp-name left">
                  <?= __('Head') ?>
                </div>
                <div class="hp-pts right">
                  <?= h($wrestlersHp->head) ?>.0 pts
                </div>
                <div class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider-range" type="range" value='<?= h($wrestlersHp->head) ?>' min="0" max="2000" disabled>
                  </div>
                </div>
              </div>
              <div class="wrestler-hp body item">
                <div class="hp-name left">
                  <?= __('Body') ?>
                </div>
                <div class="hp-pts right">
                  <?= h($wrestlersHp->body) ?>.0 pts
                </div>
                <div class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider-range" type="range" value='<?= h($wrestlersHp->body) ?>' min="0" max="2000" disabled>
                  </div>
                </div>
              </div>
              <div class="wrestler-hp arms item">
                <div class="hp-name left">
                  <?= __('Arms') ?>
                </div>
                <div class="hp-pts right">
                  <?= h($wrestlersHp->arms) ?>.0 pts
                </div>
                <div class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider-range" type="range" value='<?= h($wrestlersHp->arms) ?>' min="0" max="2000" disabled>
                  </div>
                </div>
              </div>
              <div class="wrestler-hp legs item">
                <div class="hp-name left">
                  <?= __('Legs') ?>
                </div>
                <div class="hp-pts right">
                  <?= h($wrestlersHp->legs) ?>.0 pts
                </div>
                <div class="hp-slider">
                  <div class="hp-range-slider">
                    <input class="hp-range-slider-range" type="range" value='<?= h($wrestlersHp->legs) ?>' min="0" max="2000" disabled>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <div class="wrestler-total-hp">
              <div class="wrestler-hp-title"><?= __('Total') ?></div>
              <div class="wrestler-hp-total"><?= h($wrestlersHp->total_hp) ?>.0 pts</div>
            </div>
          </div>
        <?php endif; ?>
          <?php if (!empty($wrestler->wrestlers_personality)): ?>
            <div class="panel personality">
              <div class="panel-heading panel-title">
                <?= __('Personality') ?>
              </div>
                <div class="panel-table">
                  <?php foreach ($wrestler->wrestlers_personality as $wrestlersPersonality): ?>
                    <div class="wrestler-personality item">
                      <div class="positive-personality left">
                        <?= h($wrestlersPersonality->personality->name) ?>
                      </div>
                      <div class="negative-personality right">
                        <?= h($wrestlersPersonality->personality->negative_name) ?>
                      </div>
                      <div class="personality-slider">
                        <div class="personality-range-slider">
                          <input class="personality-range-slider-range" type="range" value='<?= h($wrestlersPersonality->value) ?>' min="-100" max="100" disabled>
                        </div>
                        <div class="personality-range-value">
                            <span class="personality-range-slider-value"><?= h($wrestlersPersonality->value) ?></span>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>
            </div>
            <?php if (!empty($wrestler->abilities)): ?>
            <div class="wrestler medium-4 columns">
                <div class="panel abilities">
                  <div class="panel-heading panel-title">
                    <?= __('Abilities') ?>
                  </div>
                      <div class="panel-table">
                        <?php foreach ($wrestler->abilities as $abilities): ?>
                        <div class="wrestler-abilities item col-1">
                            <div class="ability-value">
                              <div class="abilities-image left">
                                <?= $this->Html->image('assets/abilities/' . strtolower(str_replace(' ', '', $wrestler->game->game_name)) . '/' . strtolower(str_replace(' ', '-',$abilities->ability_name)) . '-' . $abilities->ability_level_id . '.png') ?>
                                <?= h($abilities->ability_name) ?>
                              </div>
                              <div class="ability-level right">
                                 (<?='Lvl' .' '. h($abilities->ability_level_id) ?>)
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                </div>
            </div>
          <?php endif; ?>
      </div>
      </div>
