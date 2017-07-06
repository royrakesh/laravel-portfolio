<?php $__env->startSection('title' , 'Edit the Portfolio'); ?>

<?php $__env->startSection('stylesheet'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(mix('assets/css/parsley.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(mix('assets/css/select2.min.css')); ?>" />

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



<div class="row">

   <?php echo Form::model($portfolio , ['route' => ['portfolios.update' , $portfolio->id ] , 'method'=> 'PUT'] ); ?>

        <div class="col-md-8">
                  <?php echo e(Form::label('title' , 'Title')); ?>

                  <?php echo e(Form::text('title', null , array('class' => 'form-control input-lg form-spacing-top'))); ?>



                  <?php echo e(Form::label('slug' , 'Slug', ['class' => 'form-spacing-top'])); ?>

                  <?php echo e(Form::text('slug', null , ['class' => 'form-control'])); ?>



                  <?php echo e(Form::label('category_id' , 'Category:')); ?>

                  <?php echo e(Form::select('category_id', $categories , null , ['class' => 'form-control'])); ?>


                  
                  <?php echo e(Form::label('tags' , 'Tags:')); ?>

                  <?php echo e(Form::select('tags[]', $tags , null , ['class' => 'select2-multi form-control' , 'multiple' => 'multiple'])); ?>



       



                  <?php echo e(Form::label('body' , 'Body' , array('class' => 'form-spacing-top' ))); ?>

                  <?php echo e(Form::textarea('body', null , array('class'=> 'form-control'))); ?>

         
               
               
        </div>



        <div class="col-md-4">   <!-- Sidebar -->
                <div class="well">
                        <dl class="dl-horizontal">
                                <dt>Created At:</dt>
                                <dd><?php echo e(date('jS M , Y h:ia' , strtotime($portfolio->created_at))); ?></dd>
                        </dl>

                        <dl class="dl-horizontal">
                                <dt>Last Updated:</dt>
                               <dd><?php echo e(date('jS M , Y h:ia' , strtotime($portfolio->updated_at))); ?></dd>
                        </dl>

                        <hr>

                        <div class="row">
                                <div class="col-sm-6">

                                      <?php echo Html::linkRoute('portfolios.show' , 'Cancel' , array($portfolio->id) , array('class'=>'btn btn-danger btn-block') ); ?>

                                </div>
                                <div class="col-sm-6">

                                     <?php echo e(Form::submit('Save Chnages',array('class'=>'btn btn-success btn-block'))); ?>

                                        
                                </div>
                        </div>

                </div>
        </div>

      <?php echo Form::close(); ?>


</div>   <!-- end of .row (form) -->

<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

       <script type="text/javascript" src="<?php echo e(asset('assets/js/select2.full.js')); ?>"></script> 

       <script type="text/javascript">
           
           $('.select2-multi').select2();

       </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>