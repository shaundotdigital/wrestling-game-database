<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="section-header smackdowndb-head">
  <div class="container">
    <div class="wrapper">
      <div class="section-masthead" itemprop="description">
        <h1>Home</h1>
        <p>The SmackDown Database aims to assist the Wrestling Video game community by documenting information and building an ever growing source of data.</p>
      </div>

    </div>
  </div>
  <svg class="section-header-mask" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1920 58" style="enable-background:new 0 0 1920 58;" xml:space="preserve">
    <g>
    	<path class="st0" d="M0,58h959.3C547.3,58,506,48,0,0.2V58z"/>
    	<path class="st0" d="M960.7,58H1920V0.2C1414,48,1372.7,58,960.7,58z"/>
    </g>
  </svg>
</section>
<div class="container">
  <div class="wrestlers index large-12 medium-8 columns content">
    <?php if (!empty($wrestlers)): ?>
      <div class="table-responsive">
        <div class="table panel">
          <div class="table-row panel-heading panel-title">
            <div class="table-head"><?= $this->Paginator->sort('overall')?></div>
            <div class="table-head">Name</div>
            <div class="table-head">Reaction</div>
            <div class="table-head"><?= $this->Paginator->sort('height_id')?></div>
            <div class="table-head"><?= $this->Paginator->sort('weight_class_id')?></div>
            <div class="table-head"><?= $this->Paginator->sort('game_id')?></div>
          </div>
          <?php foreach ($wrestlers as $wrestler): ?>
          <div class="table-row">
            <div class="table-cell"><span class="label overall"><?= $this->Number->format($wrestler->overall) ?></span></div>
            <div class="table-cell"><?= $this->Html->link(__($wrestler->wrestler_name), ['action' => 'view', $wrestler->id]) ?> </div>
            <div class="table-cell"><?= h ($wrestler->reaction->crowd_reaction) ?></div>
            <div class="table-cell"><?= h ($wrestler->height->height) ?></div>
            <div class="table-cell"><?= h ($wrestler->weight_class->weight_class) ?></div>
            <div class="table-cell"><?= $wrestler->has('game') ? $this->Html->link($wrestler->game->game_name, ['controller' => 'Games', 'action' => 'view', $wrestler->game->id]) : '' ?></div>
          </div>
        <?php endforeach; ?>
        </div>
      </table>
    </div>
    <?php endif; ?>
  </div>
  <div class="paginator">
      <ul class="pagination">
          <?= $this->Paginator->first('<< ' . __('first')) ?>
          <?= $this->Paginator->prev('< ' . __('previous')) ?>
          <?= $this->Paginator->numbers() ?>
          <?= $this->Paginator->next(__('next') . ' >') ?>
          <?= $this->Paginator->last(__('last') . ' >>') ?>
      </ul>
      <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} of {{count}} total')]) ?></p>
  </div>
</div>
