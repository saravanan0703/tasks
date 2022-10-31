<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table class="table table-striped">
  <tr>
  <td>Id</td>
  <td>Name</td>
  <td>Price</td>
  <td>Action</td>
  </tr>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td><?php echo e($product->id); ?></td>
  <td><?php echo e($product->name); ?></td>
  <td><?php echo e($product->price); ?></td>
  <td><a href="<?php echo e(url('/products/' . $product->id . '/show')); ?>" class="btn btn-info btn-md">View Detail</a>
  </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH /home/quilltez/Public/Task-data/resources/views/products.blade.php ENDPATH**/ ?>