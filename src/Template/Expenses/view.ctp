<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
 */
?>

<div id="wrapper">

    <?= $this->element('side-nav') ?>

    
    <div id="page-wrapper" class="gray-bg dashbard-1" >

        <?= $this->element('top-nav') ?>

        <div class="wrapper wrapper-content animated fadeInRight">

<div class="expenses view large-9 medium-8 columns content">
    <h3><?= h($expense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $expense->has('user') ? $this->Html->link($expense->user->name, ['controller' => 'Users', 'action' => 'view', $expense->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expense Field') ?></th>
            <td><?= $expense->has('expense_field') ? $this->Html->link($expense->expense_field->name, ['controller' => 'ExpenseFields', 'action' => 'view', $expense->expense_field->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($expense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($expense->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recurring Duration') ?></th>
            <td><?= $this->Number->format($expense->recurring_duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($expense->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($expense->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recurring') ?></th>
            <td><?= $expense->recurring ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($expense->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reminders') ?></h4>
        <?php if (!empty($expense->reminders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Expense Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($expense->reminders as $reminders): ?>
            <tr>
                <td><?= h($reminders->id) ?></td>
                <td><?= h($reminders->expense_id) ?></td>
                <td><?= h($reminders->date) ?></td>
                <td><?= h($reminders->created) ?></td>
                <td><?= h($reminders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reminders', 'action' => 'view', $reminders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reminders', 'action' => 'edit', $reminders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reminders', 'action' => 'delete', $reminders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reminders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
</div>
</div>


