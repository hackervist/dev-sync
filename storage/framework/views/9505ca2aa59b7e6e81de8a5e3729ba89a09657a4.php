<div>
    <div>
        <?php if($notEnoughImages): ?>

            Not enough images in slider

        <?php else: ?>

            <div id="carousel-marketing-images"   class="carousel slide" data-ride="carousel" data-interval="false">

                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#carousel-marketing-images" data-slide-to="0" class="active"></li>

                    <?php $__currentLoopData = range(1, $count); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                        <li data-target="#carousel-marketing-images" data-slide-to="<?php echo e($number); ?>"></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                </ol>

                <!-- Wrapper for slides -->

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">

                            <img src="<?php echo e($featuredImage->showImage($featuredImage, $imagePath)); ?>"
                                 alt="<?php echo e($featuredImage->image_name); ?>">

                            <div class="carousel-caption">
                                <h1></h1>
                            </div>
                        </div>

                        <?php $__currentLoopData = $activeImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                            <div class="item">

                                <img src="<?php echo e($image->showImage($image, $imagePath)); ?>"
                                     alt="<?php echo e($image->image_name); ?>">


                                <div class="carousel-caption">
                                    <h1> </h1>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                    </div>

                    <!-- Controls -->

                    <a class="left carousel-control" href="#carousel-marketing-images" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#carousel-marketing-images" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

            </div>

        <?php endif; ?>

    </div>
</div>