@extends('layouts.app')

@section('content')

<div class="wrapper" id="page-wrapper"></div>
<div class="container" id="content" tabindex="-1">
<div class="row">

        <a style="cursor:pointer;margin-left: 12px" class="metrostyle eenmetro bg-warning rounded" href="">
            <span class="fa fa-tag" style="font-size: 2em;color:white ;padding-left: 0.3em;margin-top: 3px;float: left"></span>
            <span style="color: white;font-size:1.3em;float: right;margin-top: 5px;padding-right: 0.5em">{{ $tags }}</span>
            <span style="color: white;float: left;margin-top: 35px;margin-left:00px;margin-right: 30px">برچسب ها </span>
        </a>

        <a style="cursor:pointer;margin-left: 12px" class="metrostyle eenmetro bg-info rounded" href="">
                <span class="fa fa-bars" style="font-size: 2em;color:white ;padding-left: 0.3em;margin-top: 3px;float: left"></span>
                <span style="color: white;font-size:1.3em;float: right;margin-top: 5px;padding-right: 0.5em">{{ $categories }}</span>
                <span style="color: white;float: left;margin-top: 35px;margin-left:00px;margin-right: 30px">دسته بندی ها</span>
            </a>

            <a style="cursor:pointer;margin-left: 12px" class="metrostyle eenmetro bg-danger  rounded" href="">
                    <span class="fa fa-newspaper" style="font-size: 2em;color:white ;padding-left: 0.3em;margin-top: 3px;float: left"></span>
                    <span style="color: white;font-size:1.3em;float: right;margin-top: 5px;padding-right: 0.5em">{{ $posts }}</span>
                    <span style="color: white;float: left;margin-top: 35px;margin-left:00px;margin-right: 30px">پست ها</span>
                </a>

                <a style="cursor:pointer;margin-left: 12px" class="metrostyle eenmetro bg-success rounded" href="">
                        <span class="fa fa-user" style="font-size: 2em;color:white ;padding-left: 0.3em;margin-top: 3px;float: left"></span>
                        <span style="color: white;font-size:1.3em;float: right;margin-top: 5px;padding-right: 0.5em">{{ $users }}</span>
                        <span style="color: white;float: left;margin-top: 35px;margin-left:00px;margin-right: 30px">کاربران</span>
                    </a>

                    <a style="cursor:pointer;margin-left: 12px" class="metrostyle eenmetro bg-secondary rounded" href="">
                            <span class="fa fa-atlas" style="font-size: 2em;color:white ;padding-left: 0.3em;margin-top: 5px;float: left"></span>
                            <span style="color: white;font-size:1.3em;float: right;margin-top: 5px;padding-right: 0.5em">7</span>
                            <span style="color: white;float: left;margin-top: 35px;margin-left:00px;margin-right: 30px">سفارش ها</span>
                        </a>

            <!-- mommad -->


</div>


</div>
@endsection
