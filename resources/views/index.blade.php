@extends('layout')

@section('content')

<!--Grid row-->
<div class="row mb-4 wow fadeIn">

    @foreach($posts as $p)
  <!--Grid column-->
  <div class="col-lg-4 col-md-12 mb-4">
    <!--Card-->
    <div class="card">

      <!--Card image-->
      <div class="view overlay">
        <img src="{{ asset('images/'.$p->featured ) }}" class="card-img-top" alt="">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">
        <!--Title-->
        <h4 class="card-title">{{  $p->title  }} </h4>
        <!--Category-->
        <div class="row">
            <div class="col-md-12">
                <small>دسته بندی:</small>
                <a href="">
                <span class="badge badge-primary">{{ $p->category->name }}</span>
                </a>
     <!--Tag-->
                @foreach($p->tags as $t)
                <a href="">
                    <span class="badge badge-success">{{ $t->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>

        <!--Text-->
        <p class="card-text">@php echo substr($p->content,0,150); @endphp</p>
        <a href="{{ route('post.detail',$p->slug) }}" target="_blank" class="btn btn-primary btn-md">شروع آموزش
          <i class="fas fa-play ml-2"></i>
        </a>
      </div>

    </div>
    <!--/.Card-->

  </div>
  <!--Grid column-->
  @endforeach

</div>
<!--Grid row-->

<!--Pagination-->
<nav class="d-flex justify-content-center wow fadeIn">
  <ul class="pagination pg-blue">

    <!--Arrow left-->
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>

    <li class="page-item active">
      <a class="page-link" href="#">1
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>

    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
<!--Pagination-->

@endsection
