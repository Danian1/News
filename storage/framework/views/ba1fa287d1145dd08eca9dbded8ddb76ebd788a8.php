 

<div class="container">
<?php $__currentLoopData = $url; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <form method="post" action="/insert">
  <?php echo e(csrf_field()); ?>

    <div class="form-group row">
      <label for="link" class="col-sm-2 col-form-label">Link-ul</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="link" name="link" placeholder="Link" >
	  </div>
	  <div class="col-md-3">
		<button type="genetare" class="btn btn-primary">Generate info to link</button>
      </div>
    </div>
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo e($tag->title); ?>">
      </div>
    </div>
	<div class="form-group row">
      <label for="source" class="col-sm-2 col-form-label">Source</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="source" name="source" placeholder="Source" value="">
      </div>
    </div>
	<div class="form-group row">
      <label for="desc" class="col-sm-2 col-form-label">Description</label>
      <div class="col-md-6">
         <textarea class="form-control" rows="5" id="desc" name="desc" placeholder="Description"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="save"> Save</button>
		<input type="reset" class="btn btn-info" name="reset" value="Reset"/>
      </div>
    </div>
  </form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php echo $__env->make('layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>