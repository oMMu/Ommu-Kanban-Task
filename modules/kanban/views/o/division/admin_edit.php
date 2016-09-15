<?php
/**
 * Kanban User Divisions (kanban-user-division)
 * @var $this DivisionController * @var $model KanbanUserDivision *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Kanban User Divisions'=>array('manage'),
		$model->name=>array('view','id'=>$model->division_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>