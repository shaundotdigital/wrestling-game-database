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

<div class="attributesPoints form large-9 medium-8 columns content">
  <h3><?= h($wrestler->wrestler_name) ?></h3>
    <?= $this->Form->create($wrestler->attributesPoint, ['url' => ['controller' => 'AttributesPoints', 'action' => 'edit']]) ?>
    <fieldset>
        <legend><?= __('Edit Attributes Point') ?></legend>
        <?php
            foreach ($wrestler->attributes_points as $attribute)
            {
              echo $this->Form->hidden($attribute->id.'.wrestler_id', ['value' => $wrestler->id]);
              echo $this->Form->hidden($attribute->id.'.attribute_id', ['value' => $attribute->id]);
              echo $this->Form->input($attribute->id.'.value' ,['label' => $attribute->attribute->attribute_name, 'value' => $attribute->value]);
            }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
