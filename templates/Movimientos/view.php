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
            <?= $this->Html->link(__('Edit Movimiento'), ['action' => 'edit', $movimiento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Movimiento'), ['action' => 'delete', $movimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimiento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Movimientos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Movimiento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientos view content">
            <h3><?= h($movimiento->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Campo') ?></th>
                    <td><?= $movimiento->has('campo') ? $this->Html->link($movimiento->campo->name, ['controller' => 'Campos', 'action' => 'view', $movimiento->campo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lote') ?></th>
                    <td><?= $movimiento->has('lote') ? $this->Html->link($movimiento->lote->name, ['controller' => 'Lotes', 'action' => 'view', $movimiento->lote->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tropa') ?></th>
                    <td><?= $movimiento->has('tropa') ? $this->Html->link($movimiento->tropa->name, ['controller' => 'Tropas', 'action' => 'view', $movimiento->tropa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($movimiento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Campo1 Id') ?></th>
                    <td><?= $this->Number->format($movimiento->campo1_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lote1 Id') ?></th>
                    <td><?= $this->Number->format($movimiento->lote1_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($movimiento->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($movimiento->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
