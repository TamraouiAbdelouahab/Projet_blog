    <?php $__env->startSection('content'); ?>
        <div class="card card-primary">
            <div class="container-fluid">
                <div class="row mb-2 pt-4 justify-content-end">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(Route('dashboard')); ?>">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo e(Route('category.index')); ?>">Categories</a></li>
                            <li class="breadcrumb-item active">Ajouter</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <h3 class="card-title">Ajouter un catégorie</h3>
            </div>
            
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo e(Route('category.store')); ?>" method="POST">
                <?php echo csrf_field(); ?> <!-- Pour la sécurité CSRF -->
                <div class="card-body">
                    <!-- Champ Nom -->
                    <div class="form-group">
                        <label for="title">Nom</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Entrez le Nom">
                    </div>
                    <!-- Champ slug -->
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Entrez le slug">
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Solicode_Mobile\13.Eloquence_advanced (en groupe)\app\resources\views/admin/category/create.blade.php ENDPATH**/ ?>