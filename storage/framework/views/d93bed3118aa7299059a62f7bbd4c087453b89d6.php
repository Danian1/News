 

    <!-- Page Content -->
    <div class="container">
		<div class="row">
			<a href="<?php echo e(URL::route('admin')); ?>"><button type="submit" class="btn btn-primary">ADD NEWS</button></a>
		</div>

	  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  <hr>
        <!-- Project One -->
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive" src="<?php echo e($value->img); ?>" alt="">
                </a>
            </div>
            <div class="col-md-6">
				<h3><?php echo e($value->title); ?> </h3>
                <h4><?php echo e($value->source); ?>, <?php echo e($value->datatime); ?></h4>
                <p><?php echo e($value->desc); ?></p>
				<p><a href="<?php echo e($value->link); ?>"><button class="btn btn-info">Detalii</button></a></p>
            </div>
        </div>
        <!-- /.row -->
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <hr>

        <!-- Pagination
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        		row -->

    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="<?php echo e(url('js/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>

</body>

</html>

<?php echo $__env->make('layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>