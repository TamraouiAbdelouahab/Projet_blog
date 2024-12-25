    <?php $__env->startSection('content'); ?>
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des catégories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(Route('dashboard')); ?>">Accueil</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row mb-2 justify-content-end">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="<?php echo e(Route('category.create')); ?>" class="btn btn-primary btn-sm p-2 text-white"><i class="fas fa-plus"></i> Ajouter catégorie</a>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Table des catégories</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php if($categories->isEmpty()): ?>
                        <p class="p-5 text-center">aucun article trouvé.</p>
                    <?php else: ?>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>slug</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->id); ?></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->slug); ?></td>
                                        <td><?php echo e($category->created_at->format('Y-m-d')); ?></td>
                                        <td>
                                            <a href="<?php echo e(Route('category.edit',$category)); ?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> </a>
                                            <form action="<?php echo e(Route('category.destroy',$category)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" onclick="confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </button>
                                            </form>
                                            <a href="<?php echo e(Route('category.show',$category)); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i> </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Solicode_Mobile\13.Eloquence_advanced (en groupe)\app\resources\views/admin/category/index.blade.php ENDPATH**/ ?>