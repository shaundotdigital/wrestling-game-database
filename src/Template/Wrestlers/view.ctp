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
        <div class="game-logo">
          <?= $this->Html->image('games/logos/'.$wrestler->game->game_img)?>
        </div>
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
              <td class="float attributeValue"><span class="label attribute"><?= h($attributesPoints->value) ?></span></td>
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
                <!-- <td>
                  <? if ($wrestlersPersonality->value > 0) {
                    echo h($wrestlersPersonality->personality->name);
                  } else {
                    echo h($wrestlersPersonality->personality->negative_name);
                  } ?>
                </td> -->
                <td><?= h($wrestlersPersonality->personality->name) ?></td>
                <td class="personalityValue" style="text-align: center">
                  <?= h($wrestlersPersonality->value) ?>
                </td>
                <td class="float"><?= h($wrestlersPersonality->personality->negative_name) ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        <?php endif; ?>
      </div>
    </div>
  </div>





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
                <td class="float skillValue">
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
