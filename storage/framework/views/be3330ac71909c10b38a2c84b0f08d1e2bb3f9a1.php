<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Associados</div>

                <div class="panel-body">

                    <table class="table table-responsive table-striped"> 
                      <thead>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Data Nascimento</th>
                      </thead>
                      <body>              
                    <?php $__currentLoopData = $associados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cada_associado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($cada_associado->nome); ?></td>
                        <td><?php echo e($cada_associado->numero); ?></td>
                        <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d h:s:m',$cada_associado->data_nascimento)->format('d/m/Y')); ?>

                        </td>
                      <tr>                      
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </body>

                    </table>                    

                    <?php echo e($associados->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>