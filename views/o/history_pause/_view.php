<?php
/**
 * Kanban Task History Pauses (kanban-task-history-pause)
 * @var $this HistorypauseController 
 * @var $data KanbanTaskHistoryPause
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pause_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pause_id), array('view', 'id'=>$data->pause_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_id')); ?>:</b>
	<?php echo CHtml::encode($data->task_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pause_date')); ?>:</b>
	<?php echo CHtml::encode($data->pause_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pause_condition')); ?>:</b>
	<?php echo CHtml::encode($data->pause_condition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unpause_date')); ?>:</b>
	<?php echo CHtml::encode($data->unpause_date); ?>
	<br />


</div>