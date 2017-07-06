<?php $__env->startSection('title', '| Create New Portfolio'); ?>

<?php $__env->startSection('stylesheet'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(mix('assets/css/parsley.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(mix('assets/css/select2.min.css')); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Portfolio</h1>
            <hr>
            <?php echo Form::open(array('route' => 'portfolios.store','data-parsley-validate'=>'')); ?>



                <?php echo e(Form::label('title', 'Title')); ?>

                <?php echo e(Form::text('title',null , array('class' => 'form-control',' placeholder'=> 'Enter The Title' , 'required' => '', 'maxlength' => '100'))); ?>


                <?php echo e(Form::label('slug', 'Slug')); ?>

                <?php echo e(Form::text('slug',null , array('class' => 'form-control',' placeholder'=> 'Enter The Slug' , 'required' => '', 'minlength'=>'5', 'maxlength' => '100'))); ?>


                <?php echo e(Form::label('category_id' , 'Category:')); ?>

                <select name="category_id" id="" class="form-control">
                
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                    
                </select>



                <?php echo e(Form::label('tags' , 'Tags:')); ?>

                <select name="tags[]" id="" class="select2-multi form-control" multiple="multiple">
                
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($tag->id); ?>"> <?php echo e($tag->name); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                    
                </select>




                <?php echo e(Form::label('body', 'Body')); ?>

                <?php echo e(Form::textarea('body', null , array('class' => 'form-control', ' placeholder' => 'Enter your little story',  'required' => ''))); ?>



              <?php echo e(Form::submit('Create new Portfolio', array('class' => 'btn btn-info btn-lg btn-block' , 'style'=> 'margin-top:20px;'))); ?>



            <?php echo Form::close(); ?>


        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

       <script type="text/javascript" src="<?php echo e(mix('assets/js/parsley.min.js')); ?>"></script> 
       <script type="text/javascript" src="<?php echo e(asset('assets/js/select2.full.js')); ?>"></script> 

       <script type="text/javascript">
           
           $('.select2-multi').select2();

       </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>