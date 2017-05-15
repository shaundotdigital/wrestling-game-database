<?php
/**
  * @var \App\View\AppView $this
  */
?>
<h3><?= h($wrestler->wrestler_name) ?></h3>
  <div class="wrestlers view large-8 columns content">
  <table class="vertical-table">
      <tr>
          <th scope="row"><?= __('Gender') ?></th>
          <td><?= $wrestler->has('gender') ? $this->Html->link($wrestler->gender->gender, ['controller' => 'Genders', 'action' => 'view', $wrestler->gender->id]) : '' ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Height') ?></th>
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
          <th scope="row"><?= __('Game') ?></th>
          <td><?= $wrestler->has('game') ? $this->Html->link($wrestler->game->game_name, ['controller' => 'Games', 'action' => 'view', $wrestler->game->id]) : '' ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Pac') ?></th>
          <td><?= $this->Number->format($wrestler->pac) ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Overall') ?></th>
          <td><?= $this->Number->format($wrestler->overall) ?></td>
      </tr>
  </table>


      <div class="Attributes">
          <table cellpadding="0" cellspacing="0">
              <?php foreach ($wrestler->attributes_points as $attributesPoints): ?>
              <tr class="inlineblock" >
                  <td><?= h($attributesPoints->attribute->attribute_name) ?></td>
                  <td class="attributePoint"><span class="label attribute"><?= h($attributesPoints->value) ?></span></td>
              </tr>
              <?php endforeach; ?>
          </table>
      </div>


</div>

<div class="wrestlers view medium-4 columns content">
    <div class="related">
        <h4><?= __('Personalty') ?></h4>
        <?php if (!empty($wrestler->wrestlers_personalty)): ?>
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($wrestler->wrestlers_personalty as $wrestlersPersonalty): ?>
            <tr>
                <td><?= h($wrestlersPersonalty->personality->name) ?></td>
                <td><?= h($wrestlersPersonalty->value) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
      <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Abilities') ?></h4>
        <?php if (!empty($wrestler->abilities)): ?>
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($wrestler->abilities as $abilities): ?>
            <tr>
                <td><?= h($abilities->ability_name) ?></td>
                <td><?= h($abilities->ability_level_id) ?></td>
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
            <tr>
                <td><?= h($skills->skill_name) ?></td>
                <td><?= h($skills->skill_levels_id) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
