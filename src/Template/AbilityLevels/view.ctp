<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ability Level'), ['action' => 'edit', $abilityLevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ability Level'), ['action' => 'delete', $abilityLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abilityLevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ability Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ability Level'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="abilityLevels view large-9 medium-8 columns content">
    <h3><?= h($abilityLevel->level) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= h($abilityLevel->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($abilityLevel->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Abilities') ?></h4>
        <?php if (!empty($abilityLevel->abilities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ability Name') ?></th>
                <th scope="col"><?= __('Ability Level Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($abilityLevel->abilities as $abilities): ?>
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
</div>
