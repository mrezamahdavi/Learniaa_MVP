@extends('layout')

@section('content')

<!--Grid row-->


        <div class="row">
            <div class="col-sm-12 col-sm-offset-2">
            <div class="card">


                    <div class="card-header">


                               <img src="{{ asset("/images/orderprocess.png") }}" height="70px" width="60%" style=" margin-left: auto;
                               margin-right: auto;" alt="">
                    <br>
                    </div>

                    <div class="card-body">


    @include('layouts.error')


    <form method="post" action="{{url('file')}}" enctype="multipart/form-data" id="form_upload">

        @csrf

        <input type="hidden" name="category" class="form-control" value="">


        <div class="row">

            <div class="col-lg-4">
            <div class="form-group">
                    <label class="form-control-label blue-text" for="input">عنوان پروژه</label>
                    <input type="text" name="title" class="form-control" style="height: 52px">
                </div>
            </div>

            <div class="col-lg-8">
                    <div class="form-group">
                            <label class="form-control-label blue-text" for="input">توضیحات پروژه</label>
                            <textarea name="description" id="" cols="30" rows="1" required="required" class="form-control"></textarea>
                        </div>
                    </div>


                    <div class="col-lg-4">
                            <div class="form-group">
                                    <label class="form-control-label blue-text" for="input">(مالک / صاحب) اثر  </label>
                                    <input type="text" name="name" class="form-control" >
                                </div>
                            </div>



           @include('ordertypes.type')


    </div>

    <hr>

    <div class="row">

    <div class="col-lg-4">

    </div>


    <div class="col-lg-4">
        <div class="form-group text-center">
                <label class="form-control-label blue-text" for="input">  قیمت  ( ریال ) </label>
                <input type="text" name="price" class="form-control text-center" value="0" disabled readonly>
                <span></span>
            </div>
        </div>


    <div class="col-lg-4">

     </div>

    </div>

      <div class="input-group flcustom control-group lst increment"  >
            <div class="input-group-btn">
            <button class="btn btn-success" type="button" onclick="newclone()" >
                <i class="fldemo glyphicon glyphicon-plus"></i>+</button>
            <label for=""class="blue-text text-left">ارسال فایل</label>
        </div>
     </div>

        <div class="clone hide">
            <div class="flcustom control-group lst input-group"  >

            </div>
          </div>



        <button type="submit" class="btn btn-success" style="margin-top:10px">ثبت درخواست</button>
    </form>


                </div>
            </div>
        </div>
    </div>

<!--Grid row-->



<script type="text/javascript">

 function newclone()
 {
    var item = "<div class=\"flcustom control-group lst input-group\"><input name=\"Files[]\"  type=\"file\"><div class=\"input-group-btn\"><button class=\"btn btn-danger waves-effect waves-light\" type=\"button\" onclick=\"remove_clone(this)\"><i class=\"fldemo glyphicon glyphicon-remove\"></i> حذف</button></div></div>" ;
    $(".increment").append(item);

  //  var lsthmtl = $(".clone").html();
  //  $(".increment").after(lsthmtl);
 }

 function remove_clone(e)
 {
    e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
 }




</script>

@endsection
