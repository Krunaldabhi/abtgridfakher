<?php $__env->startSection('content'); ?>

    <?php $banner_bg = asset('asset/img/banner-bg.jpg'); ?>
        <div class="banner row no-margin" style="background-image: url('<?php echo e($banner_bg); ?>');">
            <div class="banner-overlay"></div>
            <div class="container">
                <div class="col-md-8">
                    <h2 class="banner-head"><span class="strong">Get there</span><br>Your day belongs to you</h2>
                </div>
                <div class="col-md-4">
                    <div class="banner-form">
                        <div class="row no-margin fields">
                            <div class="left">
                                <img src="<?php echo e(asset('asset/img/ride-form-icon.png')); ?>">
                            </div>
                            <div class="right">
                                <a href="<?php echo e(url('register')); ?>">
                                    <h3>Get a <?php echo app('translator')->get('main.service'); ?></h3>
                                    <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                                </a>
                            </div>
                        </div>
                        <div class="row no-margin fields">
                            <div class="left">
                                <img src="<?php echo e(asset('asset/img/ride-form-icon.png')); ?>">
                            </div>
                            <div class="right">
                                <a href="<?php echo e(url('/provider/register')); ?>">
                                    <h3>Provide a <?php echo app('translator')->get('main.service'); ?></h3>
                                    <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                                </a>
                            </div>
                        </div>

                        <p class="note-or">Or <a href="<?php echo e(url('/provider/login')); ?>">sign in</a> with your <?php echo app('translator')->get('main.provider'); ?> account.</p>
                        
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>