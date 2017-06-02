<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="section-header games-head">
  <div class="container">
    <div class="wrapper">
      <div class="section-masthead" itemprop="description">
        <h1>Game Library</h1>
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
  <div class="content push-footer">
    <div class="games index large-12 columns content">
        <div class="panel-table">
        <?php foreach ($games as $game): ?>
        <? $titleSymbols = array( '!', ':', '.' ,'\'');?>
            <div class="game item col-3 <?= strtolower(str_replace($titleSymbols, '', (str_replace(' ', '-', $game->game_name))))?>">
              <div class="content-game panel">
                <?= $this->Html->image('games/poster-art/' . strtolower(str_replace($titleSymbols, '', (str_replace(' ', '-', $game->game_name)))) . '-' . $game->release_year . '.jpg', ['url' => ['controller' => 'Games', 'action' => 'view', $game->id]])?>
                <div class="game-name">
                  <h3><?= $this->Html->link(__(($game->game_name)), ['controller' => 'Games', 'action' => 'view', $game->id]) ?></h3>
                </div>
                <div class="game-year">
                Release Year: <?= h($game->release_year) ?>
                </div>
                <div class="game-platforms">
                  <?php foreach ($game->platforms as $platform): ?>
                  <div class="btn btn-platform <?= strtolower(str_replace($titleSymbols, '', (str_replace(' ', '-', $platform->platform_name))))?>" href="#">
                    <?= str_replace('Nintendo ', '', (str_replace('Portable', 'P', (str_replace('PlayStation', 'PS1', (str_replace('PlayStation ', 'PS', $platform->platform_name))))))) ?>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
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

</div>
</div>
