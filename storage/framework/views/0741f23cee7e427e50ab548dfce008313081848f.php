<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Admin <?php $__env->endSlot(); ?>
     <?php $__env->slot('header', null, []); ?> 
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        <?php echo e(__('Item')); ?>

      </h2>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('script', null, []); ?> 
      <script>
        // AJAX DataTable
        var datatable = $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          stateSave: true,
          ajax: {
            url: '<?php echo url()->current(); ?>',
          },
          language: {
            url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
          },
          columns: [{
              data: 'id',
              name: 'id',
            },
            {
              data: 'thumbnail',
              name: 'thumbnail',
              orderable: false,
              searchable: false,
            },
            {
                data: 'name',
              name: 'name'
            },
            {
              data: 'type.name',
              name: 'type.name'
            },
            {
              data: 'brand.name',
              name: 'brand.name'
            },
            {
              data: 'price',
              name: 'price'
            },
            {
              data: 'action',
              name: 'action',
              orderable: false,
              searchable: false,
              width: '15%'
            },
          ],
        });
      </script>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-10">
          <a href="<?php echo e(route('admin.items.create')); ?>"
             class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
            + Buat Item
          </a>
        </div>
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <table id="dataTable">
              <thead>
                <tr>
                  <th style="max-width: 1%">ID</th>
                  <th>Thumbnail</th>
                  <th>Nama</th>
                  <th>Type</th>
                  <th>Brand</th>
                  <th>Harga</th>
                  <th style="max-width: 1%">Aksi</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\vrom_AhmadRidhoniBaru\resources\views/admin/items/index.blade.php ENDPATH**/ ?>