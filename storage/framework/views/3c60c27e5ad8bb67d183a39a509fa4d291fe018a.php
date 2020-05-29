<?php $__env->startSection('content'); ?>
    <div class="container-fluid app-body">
        <h3>New Page</h3>
        <form id="search-form">
            <div class="form-row">
                <div class="col-7">
                    <input name="searchText" id="searchText" type="text" class="form-control" placeholder="Search">
                </div>
                <div class="input-group date" data-provide="datepicker">
                    <label for="sel1">Date:</label>
                    <input name="searchDate" type="text" class="form-control datepicker" data-provide="datepicker" id="searchDate">
                    <div class="input-group-addon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sel1">Groups:</label>
                    <select name="select" class="form-control" id="sel1">
                        <option>All Group</option>
                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($group->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover social-accounts">
                    <thead>
                    <tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($bufferPostings)): ?>
                        <?php $__currentLoopData = $bufferPostings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td width="350">
                                    <div class="media">
                                        <div class="media-body media-middle" style="width: 180px;">
                                            <?php echo e($posting->groupInfo->name); ?>

                                        </div>
                                    </div>
                                </td>
                                <td><?php echo e($posting->groupInfo->type); ?></td>
                                <td>
                                    <div class="media-left">
                                        <a href="">
                                            <span class="fa fa-<?php echo e($posting->accountInfo->type); ?>"></span>
                                            <img width="50" class="media-object img-circle" src="<?php echo e($posting->accountInfo->avatar); ?>" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <?php echo e($posting->post_text); ?>

                                </td>
                                <td>
                                    <?php echo e($posting->sent_at); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr><td><?php echo e($bufferPostings->links()); ?></td></tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>