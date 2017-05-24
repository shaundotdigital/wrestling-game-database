<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genders'), ['controller' => 'Genders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gender'), ['controller' => 'Genders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Heights'), ['controller' => 'Heights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Height'), ['controller' => 'Heights', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weight Classes'), ['controller' => 'WeightClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weight Class'), ['controller' => 'WeightClasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reactions'), ['controller' => 'Reactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reaction'), ['controller' => 'Reactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attributes Points'), ['controller' => 'AttributesPoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attributes Point'), ['controller' => 'AttributesPoints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers Hp'), ['controller' => 'WrestlersHp', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestlers Hp'), ['controller' => 'WrestlersHp', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers Personality'), ['controller' => 'WrestlersPersonality', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestlers Personality'), ['controller' => 'WrestlersPersonality', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skills'), ['controller' => 'Skills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skills', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlers form large-9 medium-8 columns content">
    <?= $this->Form->create($wrestler) ?>
    <fieldset>
        <legend><?= __('Add Wrestler') ?></legend>
        <?php
            echo $this->Form->control('pac');
            echo $this->Form->control('first_name');
            echo $this->Form->control('nickname');
            echo $this->Form->control('last_name');
            echo $this->Form->control('overall');
            echo $this->Form->control('brand_id', ['options' => $brands, 'empty' => true]);
            echo $this->Form->control('gender_id', ['options' => $genders]);
            echo $this->Form->control('height_id', ['options' => $heights]);
            echo $this->Form->control('weight_class_id', ['options' => $weightClasses]);
            echo $this->Form->control('reaction_id', ['options' => $reactions]);
            echo $this->Form->control('game_id', ['options' => $games]);
            echo $this->Form->control('game_dlc_id', ['options' => $gameDlcs, 'empty' => true]);
            echo $this->Form->control('abilities._ids', ['options' => $abilities]);
            echo $this->Form->input('skills._ids' ,array('multiple' => 'checkbox',));
        ?>
        <br><legend><?= __('Add HP') ?></legend><br>
        <?php
            echo $this->Form->hidden('wrestler_id', ['value' => $wrestler->id]);
            echo $this->Form->control('head', ['value' => $hp->head]);
            echo $this->Form->control('body', ['value' => $hp->body]);
            echo $this->Form->control('arms', ['value' => $hp->arms]);
            echo $this->Form->control('legs', ['value' => $hp->legs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
