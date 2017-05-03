<nav class="large-3 medium-4 columns" id="actions-sidebar">
      <ul class="side-nav">
          <li><?= $this->Html->link(__('List Wrestlers'), ['action' => 'index']) ?></li>
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
          <li><?= $this->Html->link(__('List Wrestlers Personalty'), ['controller' => 'WrestlersPersonalty', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('New Wrestlers Personalty'), ['controller' => 'WrestlersPersonalty', 'action' => 'add']) ?></li>
          <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?></li>
          <li><?= $this->Html->link(__('List Skills'), ['controller' => 'Skills', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skills', 'action' => 'add']) ?></li>
      </ul>
</nav>
