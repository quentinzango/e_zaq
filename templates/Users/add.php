<div class="row justify-content-center mt-4">
    <aside class="col-md-3 mb-4">
        <div class="list-group">
            <h4 class="list-group-item list-group-item-action active">Actions</h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
        </div>
    </aside>
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title mb-0">Add User</h3>
            </div>
            <div class="card-body">
                <!-- Ajout de 'type' => 'file' pour autoriser l'upload -->
                <?= $this->Form->create($user, ['class' => 'needs-validation', 'novalidate' => true, 'type' => 'file']) ?>
                <fieldset>
                    <div class="form-group mb-3">
                        <?= $this->Form->control('role_id', [
                            'options' => $roles,
                            'class' => 'form-control',
                            'label' => ['class' => 'form-label'],
                        ]) ?>
                    </div>
                    <div class="form-group mb-3">
                        <?= $this->Form->control('name', [
                            'class' => 'form-control',
                            'label' => ['class' => 'form-label'],
                            'placeholder' => 'Enter your name'
                        ]) ?>
                    </div>
                    <div class="form-group mb-3">
                        <?= $this->Form->control('photo', [
                            'type' => 'file', // Important pour l'upload
                            'class' => 'form-control',
                            'label' => ['class' => 'form-label']
                        ]) ?>
                    </div>
                    <div class="form-group mb-3">
                        <?= $this->Form->control('email', [
                            'type' => 'email',
                            'class' => 'form-control',
                            'label' => ['class' => 'form-label'],
                            'placeholder' => 'Enter your email'
                        ]) ?>
                    </div>
                    <div class="form-group mb-3">
                        <?= $this->Form->control('password', [
                            'type' => 'password',
                            'class' => 'form-control',
                            'label' => ['class' => 'form-label'],
                            'placeholder' => 'Enter your password'
                        ]) ?>
                    </div>
                    <div class="form-check mb-3">
                        <?= $this->Form->control('status', [
                            'type' => 'checkbox',
                            'label' => 'Active',
                            'class' => 'form-check-input'
                        ]) ?>
                    </div>
                    <div class="form-group mb-3">
                        <?= $this->Form->control('deleted', [
                            'type' => 'datetime-local',
                            'class' => 'form-control',
                            'label' => 'Deleted At',
                        ]) ?>
                    </div>

                    <div class="form-group mb-3">
                        <?= $this->Form->control('token', [
                            'class' => 'form-control',
                            'label' => ['class' => 'form-label']
                        ]) ?>
                    </div>
                    <div class="form-group mb-3">
                        <?= $this->Form->control('token_expiration', [
                            'type' => 'datetime-local', // Si un champ datetime est attendu
                            'class' => 'form-control',
                            'label' => ['class' => 'form-label']
                        ]) ?>
                    </div>
                </fieldset>
                <div class="d-grid gap-2">
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>