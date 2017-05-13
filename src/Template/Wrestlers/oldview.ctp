<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wrestler'), ['action' => 'edit', $wrestler->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wrestler'), ['action' => 'delete', $wrestler->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestler->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genders'), ['controller' => 'Genders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gender'), ['controller' => 'Genders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Heights'), ['controller' => 'Heights', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Height'), ['controller' => 'Heights', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Weight Classes'), ['controller' => 'WeightClasses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weight Class'), ['controller' => 'WeightClasses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reactions'), ['controller' => 'Reactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reaction'), ['controller' => 'Reactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes Points'), ['controller' => 'AttributesPoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attributes Point'), ['controller' => 'AttributesPoints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers Hp'), ['controller' => 'WrestlersHp', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestlers Hp'), ['controller' => 'WrestlersHp', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers Personalty'), ['controller' => 'WrestlersPersonalty', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestlers Personalty'), ['controller' => 'WrestlersPersonalty', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skills'), ['controller' => 'Skills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skills', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wrestlers view large-9 medium-8 columns content">
    <h3><?= h($wrestler->wrestler_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wrestler Name') ?></th>
            <td><?= h($wrestler->wrestler_name) ?></td>
        </tr>
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
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wrestler->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Overall') ?></th>
            <td><?= $this->Number->format($wrestler->overall) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Attributes Points') ?></h4>
        <td class="actions">
          <?php if(empty($wrestler->attributes_points)): ?>
            <?= $this->Html->link(__('Add'), ['controller' => 'Wrestlers', 'action' => 'addattributes', $wrestler->id]) ?>
          <?php else: ?>
            <?= $this->Html->link(__('Edit'), ['controller' => 'Wrestlers', 'action' => 'editattributes', $wrestler->id]) ?>
          </td>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Attribute Name') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($wrestler->attributes_points as $attributesPoints): ?>
            <tr>
                <td><?= h($attributesPoints->id) ?></td>
                <td><?= h($attributesPoints->attribute->attribute_name) ?></td>
                <td><?= h($attributesPoints->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AttributesPoints', 'action' => 'view', $attributesPoints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AttributesPoints', 'action' => 'delete', $attributesPoints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributesPoints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Wrestlers Hp') ?></h4>
        <?= var_dump($wrestler->wrestlers_hp) ?>
        <?php if (!empty($wrestler->wrestlers_hp)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Wrestler Id') ?></th>
                <th scope="col"><?= __('Head') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Arms') ?></th>
                <th scope="col"><?= __('Legs') ?></th>
                <th scope="col"><?= __('Total Hp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($wrestler->wrestlers_hp as $wrestlersHp): ?>
            <tr>
                <td><?= h($wrestlersHp->id) ?></td>
                <td><?= h($wrestlersHp->wrestler_id) ?></td>
                <td><?= h($wrestlersHp->head) ?></td>
                <td><?= h($wrestlersHp->body) ?></td>
                <td><?= h($wrestlersHp->arms) ?></td>
                <td><?= h($wrestlersHp->legs) ?></td>
                <td><?= h($wrestlersHp->total_hp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WrestlersHp', 'action' => 'view', $wrestlersHp->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WrestlersHp', 'action' => 'edit', $wrestlersHp->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WrestlersHp', 'action' => 'delete', $wrestlersHp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersHp->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Wrestlers Personalty') ?></h4>
        <?php if (!empty($wrestler->wrestlers_personalty)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Personality Name') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($wrestler->wrestlers_personalty as $wrestlersPersonalty): ?>
            <tr>
                <td><?= h($wrestlersPersonalty->id) ?></td>
                <td><?= h($wrestlersPersonalty->personality->name) ?></td>
                <td><?= h($wrestlersPersonalty->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WrestlersPersonalty', 'action' => 'view', $wrestlersPersonalty->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WrestlersPersonalty', 'action' => 'edit', $wrestlersPersonalty->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WrestlersPersonalty', 'action' => 'delete', $wrestlersPersonalty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersPersonalty->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
      <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Abilities') ?></h4>
        <?php if (!empty($wrestler->abilities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ability Name') ?></th>
                <th scope="col"><?= __('Ability Level Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($wrestler->abilities as $abilities): ?>
            <tr>
                <td><?= h($abilities->id) ?></td>
                <td><?= h($abilities->ability_name) ?></td>
                <td><?= h($abilities->ability_level_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Abilities', 'action' => 'view', $abilities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Abilities', 'action' => 'edit', $abilities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Abilities', 'action' => 'delete', $abilities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abilities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Skills') ?></h4>
        <?php if (!empty($wrestler->skills)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Skill Name') ?></th>
                <th scope="col"><?= __('Skill Levels Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($wrestler->skills as $skills): ?>
            <tr>
                <td><?= h($skills->id) ?></td>
                <td><?= h($skills->skill_name) ?></td>
                <td><?= h($skills->skill_levels_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Skills', 'action' => 'view', $skills->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Skills', 'action' => 'edit', $skills->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skills', 'action' => 'delete', $skills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skills->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
