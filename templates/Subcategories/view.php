<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcategory $subcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subcategory'), ['action' => 'edit', $subcategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subcategory'), ['action' => 'delete', $subcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subcategories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subcategory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subcategories view content">
            <h3><?= h($subcategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $subcategory->has('category') ? $this->Html->link($subcategory->category->name, ['controller' => 'Categories', 'action' => 'view', $subcategory->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subcategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($subcategory->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subcategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subcategory->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subcategory->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($subcategory->deleted) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
