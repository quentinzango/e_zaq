<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcategory $subcategory
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Subcategories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subcategories form content">
            <?= $this->Form->create($subcategory) ?>
            <fieldset>
                <legend><?= __('Add Subcategory') ?></legend>
                <?php
                    echo $this->Form->control('categorie_id', ['options' => $categories]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('deleted', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
