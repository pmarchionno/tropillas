<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lote[]|\Cake\Collection\CollectionInterface $lotes
 */
?>
<div class="lotes index content">
    <?= $this->Html->link(__('New Lote'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lotes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('campo_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lotes as $lote): ?>
                <tr>
                    <td><?= $this->Number->format($lote->id) ?></td>
                    <td><?= h($lote->name) ?></td>
                    <td><?= $lote->has('campo') ? $this->Html->link($lote->campo->name, ['controller' => 'Campos', 'action' => 'view', $lote->campo->id]) : '' ?></td>
                    <td><?= h($lote->created) ?></td>
                    <td><?= h($lote->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lote->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lote->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lote->id)]) ?>
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
