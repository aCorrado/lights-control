<?php
/* @var $this SchedulerController */
/* @var $model Scheduler */

$this->breadcrumbs = array(
    'Schedulers' => array('index'),
    $model->idtbl_schedule,
);

$this->menu = array(
    array('label' => 'List Scheduler', 'url' => array('index')),
    array('label' => 'Create Scheduler', 'url' => array('create')),
    array('label' => 'Update Scheduler', 'url' => array('update', 'id' => $model->idtbl_schedule)),
    array('label' => 'Delete Scheduler', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idtbl_schedule), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Scheduler', 'url' => array('admin')),
);
?>

<h1><?php echo $model->tbl_schedule_title; ?> Schedule</h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        //'idtbl_schedule',
        'tbl_schedule_title',
        'tbl_schedule_date',
        'tbl_schedule_time_on',
        'tbl_schedule_time_off',
        'tbl_schedule_recurring',
        array(// related city displayed as a link
            'label' => 'Scene',
            'type' => 'raw',
            'value' => CHtml::encode($model->tblScenesIdtblScene->tbl_scene_title),
        ),
    ),
));
?>


<?php
foreach ($this->events as $event) {

    foreach ($event as $detail) {
        echo $detail . "</br>";
    }
}
?>