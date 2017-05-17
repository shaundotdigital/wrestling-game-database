<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Weight Class'), ['action' => 'edit', $weightClass->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Weight Class'), ['action' => 'delete', $weightClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weightClass->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Weight Classes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weight Class'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="weightClasses view large-9 medium-8 columns content">
    <h3><?= h($weightClass->weight_class) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Weight Class') ?></th>
            <td><?= h($weightClass->weight_class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($weightClass->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Wrestlers') ?></h4>
        <?php if (!empty($weightClass->wrestlers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Wrestler Name') ?></th>
                <th scope="col"><?= __('Overall') ?></th>
                <th scope="col"><?= __('Gender Id') ?></th>
                <th scope="col"><?= __('Height Id') ?></th>
                <th scope="col"><?= __('Weight Class Id') ?></th>
                <th scope="col"><?= __('Reaction Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($weightClass->wrestlers as $wrestlers): ?>
            <tr>
                <td><?= h($wrestlers->id) ?></td>
                <td><?= h($wrestler->first_name) ?></td>
<td><?= h($wrestler->nickname) ?></td>
<td><?= h($wrestler->last_name) ?></td>
<td><?= h($wrestler->wrestler_name) ?></td>
                <td><?= h($wrestlers->overall) ?></td>
                <td><?= h($wrestlers->gender_id) ?></td>
                <td><?= h($wrestlers->height_id) ?></td>
                <td><?= h($wrestlers->weight_class_id) ?></td>
                <td><?= h($wrestlers->reaction_id) ?></td>
                <td><?= h($wrestlers->game_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Wrestlers', 'action' => 'view', $wrestlers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Wrestlers', 'action' => 'edit', $wrestlers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Wrestlers', 'action' => 'delete', $wrestlers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
