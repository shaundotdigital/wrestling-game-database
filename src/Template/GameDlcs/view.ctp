<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game Dlc'), ['action' => 'edit', $gameDlc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game Dlc'), ['action' => 'delete', $gameDlc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gameDlc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Game Dlcs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game Dlc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gameDlcs view large-9 medium-8 columns content">
    <h3><?= h($gameDlc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $gameDlc->has('game') ? $this->Html->link($gameDlc->game->game_name, ['controller' => 'Games', 'action' => 'view', $gameDlc->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dlc Name') ?></th>
            <td><?= h($gameDlc->dlc_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gameDlc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dlc Number') ?></th>
            <td><?= $this->Number->format($gameDlc->dlc_number) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Wrestlers') ?></h4>
        <?php if (!empty($gameDlc->wrestlers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pac') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Nickname') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Overall') ?></th>
                <th scope="col"><?= __('Brand Id') ?></th>
                <th scope="col"><?= __('Gender Id') ?></th>
                <th scope="col"><?= __('Height Id') ?></th>
                <th scope="col"><?= __('Weight Class Id') ?></th>
                <th scope="col"><?= __('Reaction Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col"><?= __('Game Dlc Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($gameDlc->wrestlers as $wrestlers): ?>
            <tr>
                <td><?= h($wrestlers->id) ?></td>
                <td><?= h($wrestlers->pac) ?></td>
                <td><?= h($wrestlers->first_name) ?></td>
                <td><?= h($wrestlers->nickname) ?></td>
                <td><?= h($wrestlers->last_name) ?></td>
                <td><?= h($wrestlers->overall) ?></td>
                <td><?= h($wrestlers->brand_id) ?></td>
                <td><?= h($wrestlers->gender_id) ?></td>
                <td><?= h($wrestlers->height_id) ?></td>
                <td><?= h($wrestlers->weight_class_id) ?></td>
                <td><?= h($wrestlers->reaction_id) ?></td>
                <td><?= h($wrestlers->game_id) ?></td>
                <td><?= h($wrestlers->game_dlc_id) ?></td>
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
