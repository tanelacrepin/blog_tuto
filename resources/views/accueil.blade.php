
    @extends('layouts.menu')
    @section('title', 'Accueil')
    @section('content')

      	<div class="page-container float-right">
      		<div class="row">

      			<div class="col-md-12">
      			<div class="blog-entry ftco-animate">
                <a href="#" class="blog-image">
                	<img src="#" class="img-fluid" alt="">
                </a>
                <div class="text py-4">
                  <div class="meta">

                    <div>
                        <a href="#">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </div>
                    <div>
                        <form class="" action="#" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button type="submit" name="button">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>

                    </div>

                    <div><a href="#"></a></div>
                    <div><a href="#"></a></div>
                  </div>
                  <h3 class="heading"><a href="#"></a></h3>
                  <p>
                      
                  </p>
                </div>
              </div>


      			</div>



      		</div>
      		<div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
	                <li><a href="#">&lt;</a></li>
	                <li class="active"><span>1</span></li>
	                <li><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
      	</div><!-- end: page-container-->

    @endsection
