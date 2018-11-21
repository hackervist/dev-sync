<?php $__env->startSection('title'); ?>
    <title>Dev-Sync </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
</ol>

<div
        class="fb-like"
        data-share="true"
        data-width="450"
        data-show-faces="true">
</div>

<!--example></example-->

<?php echo $__env->make('pages.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<br><br>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">

    <h1>Dev-sync </h1>

    <p>Collaboration made easy.
    </p>
    <img src="/images/vcollab.jpg" alt="Smiley face" >

</div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>