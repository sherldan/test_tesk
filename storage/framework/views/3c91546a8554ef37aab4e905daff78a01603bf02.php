<h3>Добавить автомобиль</h3>
<div class="row">
    <div class="col-6">
        <div class="border mb-3" style="padding-left: 2ex; padding-right: 2ex">
            <form action="<?php echo e(route('car.store')); ?>" method="post" >
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="anotherBrand">Марка автомобиля</label>
                    <input type="text" name="anotherBrand" class="form-control" id="anotherBrand" placeholder="Введите марку авто">
                </div>
                <div class="form-group">
                    <label for="anotherModel">Модель автомобиля</label>
                    <input type="text" name="anotherModel" class="form-control" id="anotherModel" placeholder="Введите модель авто">
                </div>
                <div class="form-group">
                    <label for="anotherColor">Цвет кузова</label>
                    <input type="text" name="anotherColor" class="form-control" id="anotherColor" placeholder="Введите цвет авто">
                </div>
                <div class="form-group">
                    <label for="anotherRegistrationNumber">Регистрационный номер</label>
                    <input type="text" name="anotherRegistrationNumber" class="form-control" id="anotherRegistrationNumber" placeholder="Введите рег. номер авто">
                </div>
                <button type="submit" class="btn btn-outline-primary mb-3">Добавить автомобиль</button>
            </form>
        </div>
    </div>
</div>


<a href="<?php echo e(route('client.index')); ?>">
    <button type="button" class="btn btn-info mb-3">Назад</button>
</a>
<?php /**PATH E:\OpenServer\domains\localhost\resources\views/car/create.blade.php ENDPATH**/ ?>