<?php $__env->startSection('content'); ?>
    <div>
        <h3>Регистрация нового клиента:</h3>
        <form action="<?php echo e(route('client.store')); ?>" method="post" style="align-items: center;justify-content: center;>">
            <?php echo csrf_field(); ?>

            <div class="form-row">
                <div class="col-7">
                    <label for="phone">Телефон клиента</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Введите телефон">

                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                </div>
                <div class="col-7">
                    <label for="full_name">ФИО клиента</label>
                    <input name="full_name" type="text" minlength="3" class="form-control" id="full_name"
                           placeholder="Введите фамилию, имя и отчество">
                </div>

                <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="col-7">
                    <label for="sex">Выберите пол</label>
                    <select class="form-control" id="sex" name="sex">
                        <option value="муж.">Мужчина</option>
                        <option value="жен.">Женщина</option>
                    </select>
                </div>

                <?php $__errorArgs = ['sex'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="col-7">
                    <label for="address">Адрес клиента</label>
                    <input name="address" type="text" class="form-control" id="address" placeholder="Введите адрес">
                </div>

                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="col-7">
                    <label for="brand">Бренд автомобиля</label>
                    <input name="brand" type="text" class="form-control" id="brand" placeholder="Введите адрес">
                </div>

                <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="col-7">
                    <label for="model">Модель автомобиля</label>
                    <input name="model" type="text" class="form-control" id="model" placeholder="Введите model">
                </div>

                <?php $__errorArgs = ['model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="col-7">
                    <label for="color">Цвет автомобиля</label>
                    <input name="color" type="text" class="form-control" id="color" placeholder="Введите color">
                </div>

                <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="col-7">
                    <label for="registration_number">Регистрационный номер автомобиля</label>
                    <input name="registration_number" type="registration_number" class="form-control"
                           id="registration_number" placeholder="Введите registration_number">
                </div>

                <?php $__errorArgs = ['registration_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div id="client_helper" class="form-text mb-3">
                    Если у клиента зарегистрировано больше одного автомобиля, добавьте их на странице "Редактировать".
                </div>
                <div class="col-7">
                    <button type="submit" class="btn btn-primary">Регистрация</button>
                </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\localhost\resources\views/client/create.blade.php ENDPATH**/ ?>