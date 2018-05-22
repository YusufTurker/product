<?php



use kouosl\theme\widgets\GridView;
use kouosl\theme\helpers\Html;



$this->title 	= 'Products Manage';
$data['title'] 	= $this->title;
$this->params['breadcrumbs'][] = $this->title;

$data['title'] = $this->title;
			$this->params['breadcrumbs'][]=$this->title;
			echo GridView::widget([
			'dataProvider' =>$dataProvider,
			'columns' =>[
			'id',
			'name',
			'count',
			'trademark',
			'price',
			'barcodeno'
]
]);