<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimiento $movimiento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Movimientos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientos form content">
            <?= $this->Form->create($movimiento) ?>
            <fieldset>
                <legend><?= __('Add Movimiento') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('campo1_id', ['options' => $campos, 'empty' => true]);
                    echo $this->Form->control('lote1_id', ['options' => $lotes, 'empty' => true]);
                    echo $this->Form->control('campo2_id', ['options' => $campos, 'empty' => true]);
                    echo $this->Form->control('lote2_id', ['options' => $lotes, 'empty' => true]);
                    echo $this->Form->control('tropa_id', ['options' => $tropas, 'empty' => true]);
                    echo $this->Form->control('cantidad');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
