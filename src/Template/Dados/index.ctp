<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dado[]|\Cake\Collection\CollectionInterface $dados
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dados index large-9 medium-8 columns content">
    <h3><?= __('Dados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $dado): ?>
            <tr>
                <td><?= $this->Number->format($dado->id) ?></td>
                <td><?= h($dado->username) ?></td>
                <td><?= h($dado->password) ?></td>
                <td><?= h($dado->email) ?></td>
                <td><?= h($dado->phone) ?></td>
                <td><?= h($dado->created) ?></td>
                <td><?= h($dado->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dado->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
