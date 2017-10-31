 @extends('layout.head')

    <!-- Page Content -->
    <div class="container">
		<div class="row">
			<a href="{{URL::route('admin')}}"><button type="submit" class="btn btn-primary">ADD NEWS</button></a>
		</div>

	  @foreach($data as $value)
	  <hr>
        <!-- Project One -->
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive" src="{{$value->img}}" alt="">
                </a>
            </div>
            <div class="col-md-6">
				<h3>{{ $value->title }} </h3>
                <h4>{{ $value->source }}, {{$value->datatime}}</h4>
                <p>{{ $value->desc }}</p>
				<p><a href="{{ $value->link }}"><button class="btn btn-info">Detalii</button></a></p>
            </div>
        </div>
        <!-- /.row -->
     @endforeach
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
    <script src="{{url('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>

</body>

</html>
