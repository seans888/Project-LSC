<?php echo $this->Form->create('Signup', array('id' => 'SignupForm', 'url' => $this->here)); ?>
	<h2>Step 1: Account Information</h2>

    <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_contact_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_email_address')->textInput(['maxlength' => true]) ?>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>