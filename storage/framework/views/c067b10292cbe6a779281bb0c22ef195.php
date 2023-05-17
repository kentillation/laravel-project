

<?php $__env->startSection('page-content'); ?>
        <div class="container mt-5 mb-5">
            <div class="container border rounded p-5 reports">
                <h1 class="heading1 text-center mb-5"><strong>LIST OF USERS</strong></h1>
                <div class="search">
                    <div class="btn-dl me-2">
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            PDF</button>
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            XLS</button>
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            CSV</button>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search name...">
                    </div>
                </div>
                <div class="container mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="text-bg-secondary">
                                <tr>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>EMAIL VERIFIED AT.</th>
                                    <th>PASSWORD</th>
                                    <th>REMEMBER TOKEN</th>
                                    <th>CREATED AT</th>
                                    <th>UPDATE AT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->email_verified_at); ?></td>
                                    <td><?php echo e($user->password); ?></td>
                                    <td><?php echo e($user->remember_token); ?></td>
                                    <td><?php echo e($user->created_at); ?></td>
                                    <td><?php echo e($user->updated_at); ?></td>
                                    <td>
                                        <a href="edit/<?php echo e($user->id); ?>">
                                            <button class="btn-view btn-sm" title="EDIT">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="delete/<?php echo e($user->id); ?>">
                                            <button class="btn-restricted btn-sm" title="DELETE">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="split">
                    <div>
                        <p>TOTAL RECORD(S):</p>
                    </div>
                    <div>
                        <span>Previous &nbsp;</span>
                        <button class="btn-nav" title="Previous">
                            <i class="bi bi-chevron-left p-1"></i>
                        </button>
                        <a href="#">
                            <button class="btn-nav" title="Next">
                                <i class="bi bi-chevron-right p-1"></i>
                            </button>
                        </a>
                        <span>&nbsp; Next</span>
                    </div>
                </div>
                <div class="split mt-2">
                    <div></div>
                    <p>Page: 1</p>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('includes/sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NOLITC17\Documents\Kent\Activities\Laravel\first-project\resources\views/pages/Reports/dashboard.blade.php ENDPATH**/ ?>