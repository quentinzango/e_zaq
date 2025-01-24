<div class="login-form-container">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Connection') ?></legend>
        <?= $this->Form->control('email', ['label' => 'Email', 'class' => 'form-control']) ?>
        
        <div class="password-container">
            <?= $this->Form->control('password', ['label' => 'Password', 'type' => 'password', 'class' => 'form-control', 'id' => 'passwordField']) ?>
            <button type="button" class="btn btn-link" id="togglePassword" style="position: absolute; right: 15px; top: 35px;">
                <i class="fas fa-eye" id="eyeIcon"></i> <!-- Icône d'œil pour afficher/masquer le mot de passe -->
            </button>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary btn-block']) ?>
    <?= $this->Form->end() ?>

    <!-- Conteneur pour les liens -->
    <div class="form-links">
        <div class="left-link">
            <?= $this->Html->link("Matriculate", ['action' => 'add'], ['class' => 'btn btn-link']) ?>
        </div>
        <div class="right-link">
            <?= $this->Html->link("Forgot password?", ['action' => 'reset password'], ['class' => 'btn btn-link']) ?>
        </div>
    </div>
</div>
