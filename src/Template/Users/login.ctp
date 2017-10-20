<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns content">
    <div class="panel">
    <h3 class="text-center">Patientcare Admin Login</h3>
    <?php echo $this->Form->create(); ?>
    <?php echo $this->Form->input('Email'); ?>
    <?php echo $this->Form->input('Password', array('type' => 'password')); ?>
    <?php echo $this->Form->submit('Login', array('class' => 'button')); ?>
    <?php echo $this->Form->end(); ?>
    </div>
</div>
