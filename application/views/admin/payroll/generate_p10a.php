<?php
/* Payroll > Advance Salary view
*/
?>
<?php $session = $this->session->userdata('username');?>
<?php $user_info = $this->Xin_model->read_user_info($session['user_id']);?>
<?php $role_resources_ids = $this->Xin_model->user_role_resource(); ?>

<hr class="border-light m-0 mb-3">
<div class="ui-bordered px-4 pt-4 mb-4">
	<?php $attributes = array('name' => 'generate_p10a', 'id' => 'generate_p10a', 'class' => 'm-b-1 add form-hrm', "method"=>"post");?>
	<?php $hidden = array('user_id' => $session['user_id']);?>
	<?php echo form_open('admin/payroll/p10a_form', $attributes, $hidden);?>
	<div class="form-row">
		<div class="col-md-4 mb-4" id="employee_ajax">
			<label class="form-label"><?php echo $this->lang->line('module_company_title');?></label>
			<select id="company_id" name="company_id" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('xin_choose_an_employee');?>">
				<?php foreach($all_companies as $company) {?>
					<option value="<?php echo $company->company_id;?>"> <?php echo $company->name;?></option>
				<?php } ?>
			</select>
		</div>
		<div class="col-md-4 mb-4">
			<label class="form-label"><?php echo $this->lang->line('xin_year');?></label>
			<input class="form-control hr_month_year" placeholder="<?php echo $this->lang->line('xin_select_month');?>" id="month_year" name="month_year" type="text" value="<?php echo date('Y-m');?>">
		</div>
		<div class="col-md-4 col-xl-2 mb-4">
			<label class="form-label d-none d-md-block">&nbsp;</label>
			<button type="submit" class="btn btn-secondary btn-block"> <i class="fas fa-check-square"></i> <?php echo $this->lang->line('xin_p9_g');?> </button>
		</div>
	</div>
	<?php echo form_close(); ?> </div>


<style type="text/css">
	.hide-calendar .ui-datepicker-calendar { display:none !important; }
	.hide-calendar .ui-priority-secondary { display:none !important; }
</style>
