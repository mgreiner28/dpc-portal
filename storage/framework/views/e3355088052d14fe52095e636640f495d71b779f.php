<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo app('translator')->getFromJson('global.app_dashboard'); ?></div>

                <div class="panel-body">
                    <?php echo app('translator')->getFromJson('global.app_dashboard_text'); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>