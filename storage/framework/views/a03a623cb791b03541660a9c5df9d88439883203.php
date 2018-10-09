<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('global.users.title'); ?></h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('global.app_view'); ?>
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.users.fields.name'); ?></th>
                            <td field-key='name'><?php echo e($user->name); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.users.fields.email'); ?></th>
                            <td field-key='email'><?php echo e($user->email); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->getFromJson('global.users.fields.role'); ?></th>
                            <td field-key='role'>
                                <?php $__currentLoopData = $user->role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleRole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singleRole->title); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#sales" aria-controls="sales" role="tab" data-toggle="tab">Sales</a></li>
<!--<li role="presentation" class=""><a href="#sales" aria-controls="sales" role="tab" data-toggle="tab">Sales</a></li>-->
<li role="presentation" class=""><a href="#purchases" aria-controls="purchases" role="tab" data-toggle="tab">Purchases</a></li>
<!--<li role="presentation" class=""><a href="#purchases" aria-controls="purchases" role="tab" data-toggle="tab">Purchases</a></li>-->
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="sales">
<table class="table table-bordered table-striped <?php echo e(count($sales) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('global.sales.fields.file-number'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.client'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.property'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.city-town-village'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.county'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.buyer'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.agent'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.buyer-attorney'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.rep-agmt'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.approval-letter'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.buyer-approval-letter'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.search-update'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.survey-update'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.tax-receipts'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.tax-certificate'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.sewer-water-compliance'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.proposed-deed'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.mortgage-commitment'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.seach-taxes-deed'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.mortgage-payoff-info'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.title-report-from-buyer'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.clsoing-docs-drafted'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.closing-statement'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.closing-statement-to-buyer'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.closing-date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.notes'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.internal-notes'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.rates'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.assigned-to'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.created-by'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($sales) > 0): ?>
            <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($sale->id); ?>">
                    <td field-key='file_number'><?php echo e($sale->file_number); ?></td>
                                <td field-key='client'><?php echo e($sale->client); ?></td>
                                <td field-key='property'><?php echo e($sale->property); ?></td>
                                <td field-key='city_town_village'><?php echo e($sale->city_town_village); ?></td>
                                <td field-key='county'><?php echo e($sale->county); ?></td>
                                <td field-key='buyer'><?php echo e($sale->buyer); ?></td>
                                <td field-key='agent'><?php echo e($sale->agent); ?></td>
                                <td field-key='buyer_attorney'><?php echo e($sale->buyer_attorney); ?></td>
                                <td field-key='rep_agmt'><?php echo e($sale->rep_agmt); ?></td>
                                <td field-key='approval_letter'><?php echo e($sale->approval_letter); ?></td>
                                <td field-key='buyer_approval_letter'><?php echo e($sale->buyer_approval_letter); ?></td>
                                <td field-key='search_update'><?php echo e($sale->search_update); ?></td>
                                <td field-key='survey_update'><?php echo e($sale->survey_update); ?></td>
                                <td field-key='tax_receipts'><?php echo e($sale->tax_receipts); ?></td>
                                <td field-key='tax_certificate'><?php echo e($sale->tax_certificate); ?></td>
                                <td field-key='sewer_water_compliance'><?php echo e($sale->sewer_water_compliance); ?></td>
                                <td field-key='proposed_deed'><?php echo e($sale->proposed_deed); ?></td>
                                <td field-key='mortgage_commitment'><?php echo e($sale->mortgage_commitment); ?></td>
                                <td field-key='seach_taxes_deed'><?php echo e($sale->seach_taxes_deed); ?></td>
                                <td field-key='mortgage_payoff_info'><?php echo e($sale->mortgage_payoff_info); ?></td>
                                <td field-key='title_report_from_buyer'><?php echo e($sale->title_report_from_buyer); ?></td>
                                <td field-key='clsoing_docs_drafted'><?php echo e($sale->clsoing_docs_drafted); ?></td>
                                <td field-key='closing_statement'><?php echo e($sale->closing_statement); ?></td>
                                <td field-key='closing_statement_to_buyer'><?php echo e($sale->closing_statement_to_buyer); ?></td>
                                <td field-key='closing_date'><?php echo e($sale->closing_date); ?></td>
                                <td field-key='notes'><?php echo $sale->notes; ?></td>
                                <td field-key='internal_notes'><?php echo $sale->internal_notes; ?></td>
                                <td field-key='rates'><?php echo e($sale->rates); ?></td>
                                <td field-key='assigned_to'><?php echo e($sale->assigned_to->name ?? ''); ?></td>
                                <td field-key='created_by'><?php echo e($sale->created_by->name ?? ''); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.restore', $sale->id])); ?>

                                    <?php echo Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.perma_del', $sale->id])); ?>

                                    <?php echo Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_view')): ?>
                                    <a href="<?php echo e(route('admin.sales.show',[$sale->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_edit')): ?>
                                    <a href="<?php echo e(route('admin.sales.edit',[$sale->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.destroy', $sale->id])); ?>

                                    <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="35"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="sales">
<table class="table table-bordered table-striped <?php echo e(count($sales) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('global.sales.fields.file-number'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.client'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.property'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.city-town-village'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.county'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.buyer'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.agent'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.buyer-attorney'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.rep-agmt'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.approval-letter'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.buyer-approval-letter'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.search-update'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.survey-update'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.tax-receipts'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.tax-certificate'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.sewer-water-compliance'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.proposed-deed'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.mortgage-commitment'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.seach-taxes-deed'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.mortgage-payoff-info'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.title-report-from-buyer'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.clsoing-docs-drafted'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.closing-statement'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.closing-statement-to-buyer'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.closing-date'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.notes'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.internal-notes'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.rates'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.assigned-to'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.sales.fields.created-by'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($sales) > 0): ?>
            <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($sale->id); ?>">
                    <td field-key='file_number'><?php echo e($sale->file_number); ?></td>
                                <td field-key='client'><?php echo e($sale->client); ?></td>
                                <td field-key='property'><?php echo e($sale->property); ?></td>
                                <td field-key='city_town_village'><?php echo e($sale->city_town_village); ?></td>
                                <td field-key='county'><?php echo e($sale->county); ?></td>
                                <td field-key='buyer'><?php echo e($sale->buyer); ?></td>
                                <td field-key='agent'><?php echo e($sale->agent); ?></td>
                                <td field-key='buyer_attorney'><?php echo e($sale->buyer_attorney); ?></td>
                                <td field-key='rep_agmt'><?php echo e($sale->rep_agmt); ?></td>
                                <td field-key='approval_letter'><?php echo e($sale->approval_letter); ?></td>
                                <td field-key='buyer_approval_letter'><?php echo e($sale->buyer_approval_letter); ?></td>
                                <td field-key='search_update'><?php echo e($sale->search_update); ?></td>
                                <td field-key='survey_update'><?php echo e($sale->survey_update); ?></td>
                                <td field-key='tax_receipts'><?php echo e($sale->tax_receipts); ?></td>
                                <td field-key='tax_certificate'><?php echo e($sale->tax_certificate); ?></td>
                                <td field-key='sewer_water_compliance'><?php echo e($sale->sewer_water_compliance); ?></td>
                                <td field-key='proposed_deed'><?php echo e($sale->proposed_deed); ?></td>
                                <td field-key='mortgage_commitment'><?php echo e($sale->mortgage_commitment); ?></td>
                                <td field-key='seach_taxes_deed'><?php echo e($sale->seach_taxes_deed); ?></td>
                                <td field-key='mortgage_payoff_info'><?php echo e($sale->mortgage_payoff_info); ?></td>
                                <td field-key='title_report_from_buyer'><?php echo e($sale->title_report_from_buyer); ?></td>
                                <td field-key='clsoing_docs_drafted'><?php echo e($sale->clsoing_docs_drafted); ?></td>
                                <td field-key='closing_statement'><?php echo e($sale->closing_statement); ?></td>
                                <td field-key='closing_statement_to_buyer'><?php echo e($sale->closing_statement_to_buyer); ?></td>
                                <td field-key='closing_date'><?php echo e($sale->closing_date); ?></td>
                                <td field-key='notes'><?php echo $sale->notes; ?></td>
                                <td field-key='internal_notes'><?php echo $sale->internal_notes; ?></td>
                                <td field-key='rates'><?php echo e($sale->rates); ?></td>
                                <td field-key='assigned_to'><?php echo e($sale->assigned_to->name ?? ''); ?></td>
                                <td field-key='created_by'><?php echo e($sale->created_by->name ?? ''); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.restore', $sale->id])); ?>

                                    <?php echo Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.perma_del', $sale->id])); ?>

                                    <?php echo Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_view')): ?>
                                    <a href="<?php echo e(route('admin.sales.show',[$sale->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_edit')): ?>
                                    <a href="<?php echo e(route('admin.sales.edit',[$sale->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.destroy', $sale->id])); ?>

                                    <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="35"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="purchases">
<table class="table table-bordered table-striped <?php echo e(count($purchases) > 0 ? 'datatable' : ''); ?>">
    <thead>
        <tr>
            <th><?php echo app('translator')->getFromJson('global.purchases.fields.file-number'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.client'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.property'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.city-town-village'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.county'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.seller'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.agent'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.seller-attorney'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.bank-attorney'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.rep-agmt'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.approval-letter'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.seller-approval-letter'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.search-update-received'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.survey-update-received'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.tax-receipts'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.sewer-water-compliance'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.pina'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.proposed-deed-received'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.mortgage-commitment'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.mc-rate-lock-expiration'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.mortgage-commitment-sent-seller'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.survey-taxes-deed'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.ordered-title-insurance'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.title-report-to-seller'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.title-report-to-bank'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.hoi-binder'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.hoi-binder-receipt'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.closing-statement-received'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.closing-statement-to-bank'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.closing'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.notes'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.internal-notes'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.rates'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.assigned-to'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.purchases.fields.created-by'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($purchases) > 0): ?>
            <?php $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($purchase->id); ?>">
                    <td field-key='file_number'><?php echo e($purchase->file_number); ?></td>
                                <td field-key='client'><?php echo e($purchase->client); ?></td>
                                <td field-key='property'><?php echo e($purchase->property); ?></td>
                                <td field-key='city_town_village'><?php echo e($purchase->city_town_village); ?></td>
                                <td field-key='county'><?php echo e($purchase->county); ?></td>
                                <td field-key='seller'><?php echo e($purchase->seller); ?></td>
                                <td field-key='agent'><?php echo e($purchase->agent); ?></td>
                                <td field-key='seller_attorney'><?php echo e($purchase->seller_attorney); ?></td>
                                <td field-key='bank_attorney'><?php echo e($purchase->bank_attorney); ?></td>
                                <td field-key='rep_agmt'><?php echo e($purchase->rep_agmt); ?></td>
                                <td field-key='approval_letter'><?php echo e($purchase->approval_letter); ?></td>
                                <td field-key='seller_approval_letter'><?php echo e($purchase->seller_approval_letter); ?></td>
                                <td field-key='search_update_received'><?php echo e($purchase->search_update_received); ?></td>
                                <td field-key='survey_update_received'><?php echo e($purchase->survey_update_received); ?></td>
                                <td field-key='tax_receipts'><?php echo e($purchase->tax_receipts); ?></td>
                                <td field-key='sewer_water_compliance'><?php echo e($purchase->sewer_water_compliance); ?></td>
                                <td field-key='pina'><?php echo e($purchase->pina); ?></td>
                                <td field-key='proposed_deed_received'><?php echo e($purchase->proposed_deed_received); ?></td>
                                <td field-key='mortgage_commitment'><?php echo e($purchase->mortgage_commitment); ?></td>
                                <td field-key='mc_rate_lock_expiration'><?php echo e($purchase->mc_rate_lock_expiration); ?></td>
                                <td field-key='mortgage_commitment_sent_seller'><?php echo e($purchase->mortgage_commitment_sent_seller); ?></td>
                                <td field-key='survey_taxes_deed'><?php echo e($purchase->survey_taxes_deed); ?></td>
                                <td field-key='ordered_title_insurance'><?php echo e($purchase->ordered_title_insurance); ?></td>
                                <td field-key='title_report_to_seller'><?php echo e($purchase->title_report_to_seller); ?></td>
                                <td field-key='title_report_to_bank'><?php echo e($purchase->title_report_to_bank); ?></td>
                                <td field-key='hoi_binder'><?php echo e($purchase->hoi_binder); ?></td>
                                <td field-key='hoi_binder_receipt'><?php echo e($purchase->hoi_binder_receipt); ?></td>
                                <td field-key='closing_statement_received'><?php echo e($purchase->closing_statement_received); ?></td>
                                <td field-key='closing_statement_to_bank'><?php echo e($purchase->closing_statement_to_bank); ?></td>
                                <td field-key='closing'><?php echo e($purchase->closing); ?></td>
                                <td field-key='notes'><?php echo $purchase->notes; ?></td>
                                <td field-key='internal_notes'><?php echo $purchase->internal_notes; ?></td>
                                <td field-key='rates'><?php echo e($purchase->rates); ?></td>
                                <td field-key='assigned_to'><?php echo e($purchase->assigned_to->name ?? ''); ?></td>
                                <td field-key='created_by'><?php echo e($purchase->created_by->name ?? ''); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.purchases.restore', $purchase->id])); ?>

                                    <?php echo Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')); ?>

                                    <?php echo Form::close(); ?>

                                                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.purchases.perma_del', $purchase->id])); ?>

                                    <?php echo Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase_view')): ?>
                                    <a href="<?php echo e(route('admin.purchases.show',[$purchase->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->getFromJson('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase_edit')): ?>
                                    <a href="<?php echo e(route('admin.purchases.edit',[$purchase->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase_delete')): ?>
<?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.purchases.destroy', $purchase->id])); ?>

                                    <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="40"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>

</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('global.app_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>