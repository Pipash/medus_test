

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="auth-container">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <nav class="navbar">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="/">
                                        <img src="/images/logo.png">
                                    </a>
                                </div>
                                <div class="collapse navbar-collapse" >
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="/subscriptions">Payment</a></li>
                                        <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="Register" style="margin-top: 40px">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">

                                    <?php if($method == 'get'): ?>
                                        <div class="alert alert-info" role="alert">
                                        Confirmation email has been send. please check your email.
                                        </div>
                                    <?php endif; ?>

                                    <?php if($method == 'post'): ?>
                                        <div class="alert alert-info" role="alert">
                                        Confirmation email has been send <strong>again</strong>. please check your email.
                                        </div>
                                    <?php endif; ?>

                                        <div class="text-center">
                                            <form method="POST" action="/users/confirmation">
                                                <?php echo e(csrf_field()); ?>

                                                <button class="btn btn-default">Resend</button>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>