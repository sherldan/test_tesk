<?php $__env->startSection('content'); ?>
    <div>
        <h3>Редактировать данные автомобиля:</h3>


        <form action="<?php echo e(route('car.update', $car->id)); ?>" method="post" style="align-items: center;justify-content: center;>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>

            <div class="form-row">
                <div class="col-8">
                    <input type="hidden" name="client_id" value="<?php echo e($client->id); ?>">

                    <label for="brand">Бренд автомобиля</label>
                    <input name="brand" type="text" class="form-control mb-3" id="brand" placeholder="Введите адрес">
                </div>
                <div class="col-8">
                    <label for="model">Модель автомобиля</label>
                    <input name="model" type="text" class="form-control mb-3" id="model" placeholder="Введите model">
                </div>
                <div class="col-8">
                    <label for="color">Цвет автомобиля</label>
                    <input name="color" type="text" class="form-control mb-3" id="color" placeholder="Введите color">
                </div>
                <div class="col-8">
                    <label for="registration_number">Регистрационный номер автомобиля</label>
                    <input name="registration_number" type="registration_number" class="form-control mb-3" id="registration_number" placeholder="Введите registration_number">
                </div>

                <div class="col-8">
                    <button type="submit" class="btn btn-outline-primary btn-sm mb-3">Добавить автомобиль</button>
                </div>
            </div>
        </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\localhost\resources\views/car/edit.blade.php ENDPATH**/ ?>