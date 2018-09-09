<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/material-theme/assets/css/select2.mini.css')); ?>" 
            type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/material-theme/assets/css/create_post.css')); ?>" 
            type="text/css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?> 
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">HOME</a></li>
                <li class="active">Add Project</li>
            </ol>
            <!--end breadcrumb--> <!--end page-title-->
            <section class="block">
                <div class="page-title center"><h1>Post A Project</h1></div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="byMsg byMsgError" id="formErrors"><?php echo e($error); ?></article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <form class="inner-box" method="post" action="/projects" 
                                enctype="multipart/form-data">
                            <section>
                                <h3>Create A Project/Achievement
                                    <a href="/projects" class="pull-right">
                                        <button type="button" class="btn btn-primary m-b-5">
                                            <i class="fa fa- fa-chevron-left"></i> Projects List
                                        </button>
                                    </a>
                                </h3>
                                <hr>
                                <div class="row mar-bottom-0">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input-field">
                                            <label for="adtitle">Project Title *
                                                <span id="for_adtitle" class="valError text-danger small"></span>
                                            </label>
                                            <input type="text" name="name" id="adtitle" required="" 
                                                    value="<?php echo e(old('name')); ?>" 
                                                    placeholder="Title">
                                        </div>
                                        <!--end input-field-->
                                    </div>
                                </div>

                                <!--end row-->
                                <div class="row mar-bottom-0">
                                    <div class="input-field col s12">
                                        <label for="description">Description/Comment *
                                            <span id="for_description"
                                                  class="valError text-danger small">
                                            </span>
                                        </label>
                                            <textarea id="description" 
                                                      class="materialize-textarea" 
                                                      rows="4" name="comment">
                                                        <?php echo e(old('comment')); ?>

                                            </textarea>
                                    </div>
                                    <!--end input-field-->
                                </div>
                            </section>
                            <section>
                                <h3>States & Benefits</h3>
                                <hr>
                                <div class="row mar-bottom-0">
                                    <div class="input-field">
                                        <table class="table table-hover checkboxtable payment">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-field">
                                                        <div class="col-md-12">
                                                            <select class="meterialselec" 
                                                                name="states[]" id="states"
                                                                multiple="" required="">
                                                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option  
                                                                            value="<?php echo e($st->id); ?>">
                                                                            <?php echo e($st->name); ?>

                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <span id="for_package" 
                                                                class="valError">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mar-bottom-0">
                                    <div class="input-field">
                                        <table class="table table-hover checkboxtable payment">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-field">
                                                        <div class="col-md-12">
                                                            <select class="meterialselec" 
                                                                name="benefits[]" id="benefits"
                                                                multiple="">
                                                                    <?php $__currentLoopData = $benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option  
                                                                            value="<?php echo e($bft->id); ?>">
                                                                            <?php echo e($bft->name); ?>

                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <span id="for_package" 
                                                                class="valError">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <h3>Project Images 
                                    <span class="note">
                                        (Add up to 5 photos. Use a real image of the project, not catalogs.)
                                    </span>
                                </h3>
                                <p id="for_ad_image" class="valError text-danger small"></p>
                                <div class="file-upload-previews"></div>
                                <div class="file-upload">
                                    <input type="file" name="project_images[]" 
                                    class="file-upload-input with-preview" multiple title="Click to add files" 
                                    maxlength="5" accept="jpg|png" 
                                    onchange="checkFile(this)" id="img">
                                    <span>CLICK OR DRAG IMAGES HERE (MAX 5)</span>
                                    <input type="hidden" id="imgCount" value="1"/>
                                    <input type="hidden" id="previousImages" name="previousImages" value="1">
                                </div>
                            </section>
                            <hr>
                            <section>
                                <h2 class="heading5">
                                    <span class="maintext">Choose Category</span>
                                </h2>
                                <div class="well">
                                    
                                    <div class="input-field">
                                        <table class="table table-hover checkboxtable payment">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-field">
                                                        <div class="col-md-12">
                                                            <select class="meterialselect" 
                                                                name="category_id" id="cat">
                                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option 
                                                                        value="<?php echo e($categ->id); ?>">
                                                                        <?php echo e($categ->name); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <span id="for_package" 
                                                                class="valError">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <h4>Status</h4>
                                <div class="well">
                                    <div class="input-field">
                                        <table class="table table-hover checkboxtable payment">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-field">
                                                        <div class="col-md-12">
                                                            <select class="meterialselect" 
                                                                name="completed" id="complet">
                                                                    <option value="0">
                                                                        Abandon
                                                                    </option>
                                                                    <option value="1">
                                                                        Completed
                                                                    </option>
                                                                    <option value="2">
                                                                        Uncompleted
                                                                    </option>
                                                            </select>
                                                            <span id="for_package" 
                                                                class="valError">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="input-field">
                                        <table class="table table-hover checkboxtable payment">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-field">
                                                        <div class="col-md-12">
                                                            <select class="meterialselect" 
                                                                name="status" id="status">
                                                                    <option value="1">
                                                                        Active
                                                                    </option>
                                                                    <option value="0">
                                                                        NonActive
                                                                    </option>
                                                            </select>
                                                            <span id="for_package" 
                                                                class="valError">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <h4>Date</h4>
                                <div class="well">
                                    <div class="input-field">
                                       Started On: <input type="date" name="started_at" class="datepicker">
                                    </div>
                                    <div class="input-field">
                                       Ended On: <input type="date" name="ended_at" class="datepicker">
                                    </div>
                                </div>
                            </section>
                            <section class="center">
                                <div class="input-field">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="submit"  class="btn btn-primary btn-rounded" 
                                            value="SAVE PROJECT">
                                </div>
                                <!--end input-field-->
                            </section>
                        </form>
                        <!--end form-->
                    </div>
                    
                </div>
                <!--end row-->
            </section>
        </div>
        <!--end container-->
    </div> <!--end page-content-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('material-theme/assets/js/jQuery.MultiFile.min.js')); ?>"></script>
    <script src="<?php echo e(asset('material-theme/assets/js/select2.mini.js')); ?>"></script>
    <script src="<?php echo e(asset('material-theme/assets/js/ad_post_js.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>