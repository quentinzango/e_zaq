<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $subcategories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles form content">
            <?= $this->Form->create($article, ['type' => 'file']) ?> <!-- Ajout de 'type' => 'file' -->
            <fieldset>
                <legend><?= __('Add Article') ?></legend>
                
                <!-- Sélection de l'utilisateur -->
                <?= $this->Form->control('user_id', ['options' => $users, 'label' => 'User']) ?>

                <!-- Sélection de la sous-catégorie -->
                <?= $this->Form->control('subcategorie_id', ['options' => $subcategories, 'label' => 'Subcategory']) ?>

                <!-- Champ pour télécharger l'image -->
                <?= $this->Form->control('image', ['type' => 'file', 'label' => 'Image']) ?>

                <!-- Champ pour le nom de l'article -->
                <?= $this->Form->control('name', ['label' => 'Name']) ?>

                <!-- Champ pour la description de l'article -->
                <?= $this->Form->control('description', ['label' => 'Description']) ?>

                <!-- Champ pour le prix de l'article -->
                <?= $this->Form->control('price', ['label' => 'Price']) ?>

                <!-- Champ pour le nombre de vues -->
                <?= $this->Form->control('views', ['label' => 'Views']) ?>

                <!-- Champ pour le statut de l'article -->
                <?= $this->Form->control('status', ['label' => 'Status']) ?>

                <!-- Champ pour la localisation -->
                <?= $this->Form->control('localization', ['label' => 'Localization']) ?>

                <!-- Champ pour la suppression logique -->
                <?= $this->Form->control('deleted', ['empty' => true, 'label' => 'Deleted']) ?>

            </fieldset>
            
            <!-- Bouton de soumission -->
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
