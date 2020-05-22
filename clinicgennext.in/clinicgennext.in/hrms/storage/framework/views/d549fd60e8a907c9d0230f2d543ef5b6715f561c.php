
<?php $__env->startSection('title', __('Salary List')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo __('PAYROLL'); ?> 
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
            <li><a><?php echo __('Payroll'); ?></a></li>
            <li class="active"><?php echo __('Salary List'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Salary List'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div  class="col-md-6">
                    <a href="<?php echo url('/hrm/payroll'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i> <?php echo __('Manage Salary'); ?></a>
                </div>
                
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="<?php echo __('Search..'); ?>">
                </div>
                <!-- Notification Box -->
                <div class="col-md-12">
                    <?php if(!empty(Session::get('message'))): ?>
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i> <?php echo Session::get('message'); ?>

                    </div>
                    <?php elseif(!empty(Session::get('exception'))): ?>
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-warning"></i> <?php echo Session::get('exception'); ?>

                    </div>
                    <?php endif; ?>
                </div>
                <!-- /.Notification Box -->
                <div class="col-md-12 table-responsive">
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo __('SL#'); ?></th>
                                <th><?php echo __('Employee Name'); ?></th>
                                <th><?php echo __('Designation'); ?></th>
                                <th><?php echo __('Employee Type'); ?></th>
                                <th><?php echo __('Gross Salary'); ?></th>
                                <th><?php echo __('Deductions'); ?></th>
                                <th><?php echo __('Net Salary'); ?></th>
                                <th class="text-center"><?php echo __('Updated At'); ?></th>
                                <th class="text-center"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php ($sl = 1); ?>
                            <?php $__currentLoopData = $salaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $salary['name']; ?></td>
                                <td><?php echo $salary['designation']; ?></td>
                                <td>
                                    <?php if($salary['employee_type'] == 1): ?>
                                   <?php echo __('Provision'); ?> 
                                    <?php elseif($salary['employee_type'] == 2): ?>
                                    <?php echo __('Permanent'); ?>

                                    <?php elseif($salary['employee_type'] == 3): ?>
                                    <?php echo __('Full Time'); ?>

                                    <?php elseif($salary['employee_type'] == 4): ?>
                                   <?php echo __('Part Time'); ?> 
                                    <?php else: ?>
                                    <?php echo __('Adhoc'); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                <?php ($gross_salary = $salary['basic_salary'] + $salary['house_rent_allowance'] + $salary['medical_allowance'] + $salary['special_allowance'] + $salary['other_allowance']); ?>
                                <?php echo $gross_salary; ?>

                                </td>
                                <td>
                                <?php ($total_deduction = $salary['tax_deduction'] + $salary['provident_fund_deduction'] + $salary['other_deduction']); ?>
                                <?php echo $total_deduction; ?>

                                </td>
                                <td><?php echo $gross_salary - $total_deduction; ?></td>

                                <td class="text-center"><?php echo date("d F Y", strtotime($salary['updated_at'])); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo url('/hrm/payroll/manage-salary/' . $salary['user_id']); ?>"><i class="icon fa fa-edit"></i> <?php echo __('Edit'); ?></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>