<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tropa[]|\Cake\Collection\CollectionInterface $tropas
 */
?>
<div class="tropas index content">
    <?= $this->Html->link(__('New Tropa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tropas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tropas as $tropa): ?>
                <tr>
                    <td><?= $this->Number->format($tropa->id) ?></td>
                    <td><?= h($tropa->name) ?></td>
                    <td><?= $this->Number->format($tropa->cantidad) ?></td>
                    <td><?= h($tropa->created) ?></td>
                    <td><?= h($tropa->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tropa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tropa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tropa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tropa->id)]) ?>
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
