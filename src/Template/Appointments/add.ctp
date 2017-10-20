<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?php echo $this->Element('actions', ['type' => 'Appointment', 'typePlurals' => 'Appointments']); ?>
</nav>
<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Add Appointment') ?></legend>
        <?php
            echo $this->Form->control('patient_id', ['options' => $patients]);
            echo $this->Form->control('doctor_id', ['options' => $doctors]);
            echo $this->Form->control('appointment_date');
            echo $this->Form->control('modifiled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
