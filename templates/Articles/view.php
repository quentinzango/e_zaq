<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $article->has('user') ? $this->Html->link($article->user->name, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Subcategory') ?></th>
                    <td><?= $article->has('subcategory') ? $this->Html->link($article->subcategory->name, ['controller' => 'Subcategories', 'action' => 'view', $article->subcategory->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($article->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($article->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($article->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Localization') ?></th>
                    <td><?= h($article->localization) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $article->price === null ? '' : $this->Number->format($article->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Views') ?></th>
                    <td><?= $article->views === null ? '' : $this->Number->format($article->views) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $article->status === null ? '' : $this->Number->format($article->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($article->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($article->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($article->deleted) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
