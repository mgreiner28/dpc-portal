<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.roles.title'); ?></h3>
    
    <?php echo Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id]]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_edit'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('title', trans('global.roles.fields.title').'*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('title')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('title')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('permission', trans('global.roles.fields.permission').'*', ['class' => 'control-label']); ?>

                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-permission">
                        <?php echo e(trans('global.app_select_all')); ?>

                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-permission">
                        <?php echo e(trans('global.app_deselect_all')); ?>

                    </button>
                    <?php echo Form::select('permission[]', $permissions, old('permission') ? old('permission') : $role->permission->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-permission' , 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('permission')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('permission')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    ##parent-placeholder-b6e13ad53d8ec41b034c49f131c64e99cf25207a##

    <script>
        $("#selectbtn-permission").click(function(){
            $("#selectall-permission > option").prop("selected","selected");
            $("#selectall-permission").trigger("change");
        });
        $("#deselectbtn-permission").click(function(){
            $("#selectall-permission > option").prop("selected","");
            $("#selectall-permission").trigger("change");
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>