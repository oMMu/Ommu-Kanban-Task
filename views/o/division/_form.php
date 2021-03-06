<?php
/**
 * Kanban User Divisions (kanban-user-division)
 * @var $this DivisionController 
 * @var $model KanbanUserDivision 
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */
?>

<?php $form=$this->beginWidget('application.libraries.yii-traits.system.OActiveForm', array(
	'id'=>'kanban-user-division-form',
	'enableAjaxValidation'=>true,
)); ?>

<div class="dialog-content">

	<fieldset>

		<?php //begin.Messages ?>
		<div id="ajax-message">
			<?php echo $form->errorSummary($model); ?>
		</div>
		<?php //begin.Messages ?>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'parent'); ?>
			<div class="desc">
				<?php if(KanbanUserDivision::getDivision() != null) {
					echo $form->dropDownList($model,'parent', KanbanUserDivision::getDivision(), array('prompt'=>'No Parent'));
				} else {
					echo $form->dropDownList($model,'parent', array(0=>'No Parent'));
				}?>
				<?php echo $form->error($model,'parent'); ?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'title'); ?>
			<div class="desc">
				<?php 
				if(!$model->getErrors())
					$model->title = Phrase::trans($model->name, 2);
				echo $form->textField($model,'title', array('maxlength'=>32,'class'=>'span-8')); ?>
				<?php echo $form->error($model,'title'); ?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'description'); ?>
			<div class="desc">
				<?php 
				if(!$model->getErrors())
					$model->description = Phrase::trans($model->desc, 2);
				echo $form->textArea($model,'description', array('maxlength'=>128,'class'=>'span-11 smaller')); ?>
				<?php echo $form->error($model,'description'); ?>
			</div>
		</div>

		<div class="clearfix publish">
			<?php echo $form->labelEx($model,'management'); ?>
			<div class="desc">
				<?php echo $form->checkBox($model,'management'); ?>
				<?php echo $form->labelEx($model,'management'); ?>
				<?php echo $form->error($model,'management'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix publish">
			<?php echo $form->labelEx($model,'tested'); ?>
			<div class="desc">
				<?php echo $form->checkBox($model,'tested'); ?>
				<?php echo $form->labelEx($model,'tested'); ?>
				<?php echo $form->error($model,'tested'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix publish">
			<?php echo $form->labelEx($model,'verified'); ?>
			<div class="desc">
				<?php echo $form->checkBox($model,'verified'); ?>
				<?php echo $form->labelEx($model,'verified'); ?>
				<?php echo $form->error($model,'verified'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix publish">
			<?php echo $form->labelEx($model,'publish'); ?>
			<div class="desc">
				<?php echo $form->checkBox($model,'publish'); ?>
				<?php echo $form->labelEx($model,'publish'); ?>
				<?php echo $form->error($model,'publish'); ?>
			</div>
		</div>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save') , array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>
