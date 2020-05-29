Hi <?php echo e(ucwords($name)); ?>,
<p>You're 2 seconds away from getting started with Bulkly. Click the confirmation link bellow to activate your account.</p>
<?php echo e(route('confirmation', $verification_token)); ?>