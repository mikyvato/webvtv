<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="conteiner">
	<div class="row-fluid">
		<div class="span4 pull-right">
		<?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				//'htmlOptions'=>array('class'=>'nav nav-tabs alert alert-info'),
				'htmlOptions'=>array('class'=>'breadcrumb'),
			));
			//$this->endWidget();
		?>
		</div>

	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $content; ?>
		</div>
	</div>
</div>

<?php $this->endContent(); ?>