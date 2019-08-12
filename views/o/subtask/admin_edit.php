<?php
/**
 * Kanban Task Subs (kanban-task-sub)
 * @var $this SubtaskController 
 * @var $model KanbanTaskSub 
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */

	$this->breadcrumbs=array(
		'Kanban Task Subs'=>array('manage'),
		$model->subtask_id=>array('view','id'=>$model->subtask_id),
		Yii::t('phrase', 'Update'),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>