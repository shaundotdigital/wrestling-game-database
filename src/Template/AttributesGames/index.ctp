<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attributes Game'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attributesGames index large-9 medium-8 columns content">
    <h3><?= __('Attributes Games') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('attribute_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attributesGames as $attributesGame): ?>
            <tr>
                <td><?= $this->Number->format($attributesGame->id) ?></td>
                <td><?= $attributesGame->has('attribute') ? $this->Html->link($attributesGame->attribute->attribute_name, ['controller' => 'Attributes', 'action' => 'view', $attributesGame->attribute->id]) : '' ?></td>
                <td><?= $attributesGame->has('game') ? $this->Html->link($attributesGame->game->game_name, ['controller' => 'Games', 'action' => 'view', $attributesGame->game->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attributesGame->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attributesGame->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attributesGame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributesGame->id)]) ?>
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
