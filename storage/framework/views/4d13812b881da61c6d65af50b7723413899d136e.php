<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body style="
    display: flex;
    justify-content: center;
">
<div class="card" style="width: 50%;">
  <div class="card-body" style="background: #edebe6;font-size: 28px;line-height: 50px;text-align: center;">
    <h2 class="card-title"><?php echo e($products->id); ?> Products Details</h2>
    <b>Id : </b><?php echo e($products->id); ?>

    <br />
    <b>Name :</b> <?php echo e($products->name); ?>

    <br />
    <b>Price : </b><?php echo e($products->price); ?>

    <br />
    <b>Description : </b><?php echo e($products->description); ?>

  </div>
</div>
</body>
</html><?php /**PATH /home/quilltez/Public/Task-data/resources/views/products-details.blade.php ENDPATH**/ ?>