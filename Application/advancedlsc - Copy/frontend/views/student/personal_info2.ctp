<?php echo $this->Form->create('Signup', array('id' => 'SignupForm', 'url' => $this->here)); ?>
	<h2>Step 1: Account Information</h2>

	   <?= $form->field($model, 'type')->dropDownList([ 'Reserve' => 'Reserve', 'Enroll' => 'Enroll', ], ['prompt' => '']) ?>

 <!--   <?= $form->field($model, 'number_of_hours')->textInput() ?> -->

    <?= $form->field($model, 'review_class')->dropDownList([ 'Comprehensive College Entrance Exam' => 'Comprehensive College Entrance Exam', 'Highschool Entrance Exam' => 'Highschool Entrance Exam', 'Civil Service Examination' => 'Civil Service Examination', 'Law Aptitude Examination/Law School Admission Test' => 'Law Aptitude Examination/Law School Admission Test', 'National Medical Admission Test' => 'National Medical Admission Test', 'Career Service Examination' => 'Career Service Examination', 'SAT Reasoning Test' => 'SAT Reasoning Test', 'Graduate Management Admission Test' => 'Graduate Management Admission Test', 'Graduate Record Examination' => 'Graduate Record Examination', ], ['prompt' => '']) ?>
	?>
	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>