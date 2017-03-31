<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Abilities Game'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="abilitiesGames index large-9 medium-8 columns content">
    <h3><?= __('Abilities Games') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($abilitiesGames as $abilitiesGame): ?>
            <tr>
                <td><?= $this->Number->format($abilitiesGame->id) ?></td>
                <td><?= $abilitiesGame->has('ability') ? $this->Html->link($abilitiesGame->ability->ability_name, ['controller' => 'Abilities', 'action' => 'view', $abilitiesGame->ability->id]) : '' ?></td>
                <td><?= $abilitiesGame->has('game') ? $this->Html->link($abilitiesGame->game->game_name, ['controller' => 'Games', 'action' => 'view', $abilitiesGame->game->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $abilitiesGame->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $abilitiesGame->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $abilitiesGame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abilitiesGame->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
