<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dado $dado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dados form large-9 medium-8 columns content">
    <?= $this->Form->create($dado) ?>
    <fieldset>
        <legend><?= __('Edit Dado') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
