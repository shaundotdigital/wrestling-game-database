<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reaction'), ['action' => 'edit', $reaction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reaction'), ['action' => 'delete', $reaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reaction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reactions view large-9 medium-8 columns content">
    <h3><?= h($reaction->crowd_reaction) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Crowd Reaction') ?></th>
            <td><?= h($reaction->crowd_reaction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reaction->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Wrestlers') ?></h4>
        <?php if (!empty($reaction->wrestlers)): ?>
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
            <?php foreach ($reaction->wrestlers as $wrestlers): ?>
            <tr>
                <td><?= h($wrestlers->id) ?></td>
                <td><?= h($wrestlers->wrestler_name) ?></td>
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
