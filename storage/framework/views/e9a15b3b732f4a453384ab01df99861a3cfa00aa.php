 <?php $__env->startSection('title', '| Create New Portfolio'); ?> <?php $__env->startSection('stylesheet'); ?> <?php echo Html::style('assets/css/parsley.css'); ?> <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?> <div class="row"> <div class="col-md-8 col-md-offset-2"> <h1>Create New Portfolio</h1> <hr> <?php echo Form::open(array('route' => 'portfolios.store','data-parsley-validate'=>'')); ?> <?php echo e(Form::label('title', 'Title')); ?> <?php echo e(Form::text('title',null , array('class' => 'form-control',' placeholder'=> 'Enter The Title' , 'required' => '', 'maxlength' => '100'))); ?> <?php echo e(Form::label('slug', 'Slug')); ?> <?php echo e(Form::text('slug',null , array('class' => 'form-control',' placeholder'=> 'Enter The Slug' , 'required' => '', 'minlength'=>'5', 'maxlength' => '100'))); ?> <?php echo e(Form::label('body', 'Body')); ?> <?php echo e(Form::textarea('body', null , array('class' => 'form-control', ' placeholder' => 'Enter your little story', 'required' => ''))); ?> <?php echo e(Form::label('phoneno', 'Phone no')); ?> <?php echo e(Form::text('phoneno' , '123' , array('class' => 'form-control' , 'required' => '') )); ?> <?php echo e(Form::submit('Create new Portfolio', array('class' => 'btn btn-info btn-lg btn-block' , 'style'=> 'margin-top:20px;'))); ?> <?php echo Form::close(); ?> </div> </div> <?php $__env->stopSection(); ?> <?php $__env->startSection('scripts'); ?> <script type="text/javascript" src="<?php echo e(mix('assets/js/parsley.min.js')); ?>"></script> <?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>