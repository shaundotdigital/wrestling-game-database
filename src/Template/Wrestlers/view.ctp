<?php
/**
  * @var \App\View\AppView $this
  */
?>
    <div class="content-header <?=($wrestler->game->game_name)?>">
      <div class="container">
        <div class="content-header-left <?=($wrestler->wrestler_name)?>">
            <div class="wrestler-header">
                <div class="wrestler-info">
                    <div class="wrestler-name">
                    <h3><?= h($wrestler->wrestler_name) ?></h3>
                    <tr><?= __('Overall') ?>
                      <td><?= $this->Number->format($wrestler->overall) ?></td>
                    </tr>
                    </div>
                    <div class="wrestler-render">
                        <!-- <?= $this->Html->image('renders/' . $wrestler->pac . '-2014.png')?> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right <?=($wrestler->game->game_name)?>" align="right">
            <div class="game-info">
                <div class="game-logo">
                    <!-- <?= $this->Html->image('games/' . $wrestler->game->game_name . '-logo.png')?> -->
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="container">
    <div class="wrestlers view large-8 columns content">
        <div class="Attributes">
            <table cellpadding="0" cellspacing="0">
                <?php foreach ($wrestler->attributes_points as $attributesPoints): ?>
                <tr class="inlineblock">
                    <td>
                        <?= h($attributesPoints->attribute->attribute_name) ?>
                    </td>
                    <td class="float"><span class="label attribute"><?= h($attributesPoints->value) ?></span></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="related">
            <h4><?= __('Abilities') ?></h4>
            <?php if (!empty($wrestler->abilities)): ?>
            <table cellpadding="0" cellspacing="0">
                <?php foreach ($wrestler->abilities as $abilities): ?>
                <tr class="inlineblock">
                    <td>
                        <?= h($abilities->ability_name) ?>
                    </td>
                    <td class="float">
                        <?= h($abilities->ability_level_id) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Skills') ?></h4>
            <?php if (!empty($wrestler->skills)): ?>
            <table cellpadding="0" cellspacing="0">
                <?php foreach ($wrestler->skills as $skills): ?>
                <tr class="inlineblock">
                    <td>
                        <?= h($skills->skill_name) ?>
                    </td>
                    <td class="float">
                        <?= h($skills->skill_levels_id) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
    <div class="wrestlers view medium-4 columns content">
        <table class="vertical-table">
            <tr>
                <th scope="row">
                    <?= __('Gender') ?>
                </th>
                <td>
                    <?= $wrestler->has('gender') ? $this->Html->link($wrestler->gender->gender, ['controller' => 'Genders', 'action' => 'view', $wrestler->gender->id]) : '' ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?= __('Height') ?>
                </th>
                <td>
                    <?= $wrestler->has('height') ? $this->Html->link($wrestler->height->height, ['controller' => 'Heights', 'action' => 'view', $wrestler->height->id]) : '' ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?= __('Weight Class') ?>
                </th>
                <td>
                    <?= $wrestler->has('weight_class') ? $this->Html->link($wrestler->weight_class->weight_class, ['controller' => 'WeightClasses', 'action' => 'view', $wrestler->weight_class->id]) : '' ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?= __('Reaction') ?>
                </th>
                <td>
                    <?= $wrestler->has('reaction') ? $this->Html->link($wrestler->reaction->crowd_reaction, ['controller' => 'Reactions', 'action' => 'view', $wrestler->reaction->id]) : '' ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?= __('Pac') ?>
                </th>
                <td>
                    <?= $this->Number->format($wrestler->pac) ?>
                </td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('Personality') ?></h4>
            <?php if (!empty($wrestler->wrestlers_personality)): ?>
            <table cellpadding="0" cellspacing="0">
                <?php foreach ($wrestler->wrestlers_personality as $wrestlersPersonality): ?>
                <tr>
                    <td>
                        <?
                    if ($wrestlersPersonality->value > 0) {
                      echo h($wrestlersPersonality->personality->name);
                    } else {
                      echo h($wrestlersPersonality->personality->negative_name);
                    }
                  ?>
                    </td>
                    <td>
                        <?= h($wrestlersPersonality->value) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
  </div>
