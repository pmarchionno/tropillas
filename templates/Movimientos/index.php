<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimiento[]|\Cake\Collection\CollectionInterface $movimientos
 */
?>
<div class="movimientos index content">
    <?= $this->Html->link(__('New Movimiento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Movimientos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('campo1_id') ?></th>
                    <th><?= $this->Paginator->sort('lote1_id') ?></th>
                    <th><?= $this->Paginator->sort('campo2_id') ?></th>
                    <th><?= $this->Paginator->sort('lote2_id') ?></th>
                    <th><?= $this->Paginator->sort('tropa_id') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movimientos as $movimiento): ?>
                <tr>
                    <td><?= $this->Number->format($movimiento->id) ?></td>
                    <td><?= h($movimiento->fecha) ?></td>
                    <td><?= $this->Number->format($movimiento->campo1_id) ?></td>
                    <td><?= $this->Number->format($movimiento->lote1_id) ?></td>
                    <td><?= $movimiento->has('campo') ? $this->Html->link($movimiento->campo->name, ['controller' => 'Campos', 'action' => 'view', $movimiento->campo->id]) : '' ?></td>
                    <td><?= $movimiento->has('lote') ? $this->Html->link($movimiento->lote->name, ['controller' => 'Lotes', 'action' => 'view', $movimiento->lote->id]) : '' ?></td>
                    <td><?= $movimiento->has('tropa') ? $this->Html->link($movimiento->tropa->name, ['controller' => 'Tropas', 'action' => 'view', $movimiento->tropa->id]) : '' ?></td>
                    <td><?= $this->Number->format($movimiento->cantidad) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movimiento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movimiento->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimiento->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
