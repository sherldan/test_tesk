<?php $__env->startSection('content'); ?>
    <div>
<h3>Редактировать данные клиента:</h3>
        <form action="<?php echo e(route('client.update', $client->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>

                <div class="form-group">
                    <label for="full_name">ФИО клиента</label>
                    <input name="full_name" type="text" class="form-control" id="full_name" placeholder="Введите фамилию, имя и отчество" value="<?php echo e($client->full_name); ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Телефон клиента</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Введите телефон" value="<?php echo e($client->phone); ?>">
                </div>
                <select class="form-select" name="sex" >
                    <option selected>Выберите пол</option>
                    <option value="муж.">муж.</option>
                    <option value="жен.">жен.</option>
                </select>
                <div class="form-group">
                    <label for="address">Адрес клиента</label>
                    <input name="address" type="address" class="form-control" id="address" placeholder="Введите адрес" value="<?php echo e($client->address); ?>">
                </div>


            <button type="submit" class="btn btn-primary">Применить изменения</button>
        </form>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\localhost\resources\views/client/edit.blade.php ENDPATH**/ ?>