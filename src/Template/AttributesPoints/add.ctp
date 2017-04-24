<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Attributes Points'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attributesPoints form large-9 medium-8 columns content">
    <?= $this->Form->create($attributesPoint) ?>
    <fieldset>
        <legend><?= __('Add Attributes Point') ?></legend>
        <?php
            echo $this->Form->control('wrestler_id', ['options' => $wrestlers]);
            $Count = 0;
            foreach ($attributes as $attribute)
            {
              echo $this->Form->select('attribute_id', ['options' => $attribute]);
              echo $this->Form->control('value' ,['label' => false, 'placeholder' => 'Attribute value']);

              $Count++;
              if ($Count == 2){
                break; //stop foreach loop after 4th loop
              }
            }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
