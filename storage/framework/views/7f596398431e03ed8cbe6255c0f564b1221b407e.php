<?php $__env->startSection('content'); ?>


<div class="container-fluid app-body settings-page">
	<h3>Support</h3>
	<div class="feedback_from">
		<p><strong>Need help? Have question? Drop us a line below.</strong></p>
		<form id="send-idea">
		<?php echo e(csrf_field()); ?>

			<input type="hidden" name="email" value="<?php echo e($user->email); ?>">
			<input type="hidden" name="sub" value="Support page">
			<input type="hidden" name="feed" value="Thanks for contacting us, we'll be in touch shortly.">
			<textarea class="form-control" name="message"></textarea>
			<button type="button" class="btn btn-default width-btn btn-dc btn-center">Contact Support</button>
		</form>
	
	</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>