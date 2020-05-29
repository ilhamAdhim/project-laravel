@extends('master')

@section('title',"Research Group")

@section('content')

<div class="mb-3">
    <a href="/lecturer/{{$code}}" class="btn btn-danger"> Back to Profile </a>
</div>
<br>

<div class="row mx-auto container">
    <!-- GROUP RESEARCH -->
    @if(!empty($research))
    <div class="container">
        <div class="card-deck">
            @foreach ($research as $gr => $value)
            <!-- Card -->

            <div class="card card-image"
                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                <!-- Content -->
                <div class="rgba-black-strong d-flex">
                    <div class="card-body">
                        <div class="text-white py-4 ml-4">

                            <h5 class="blue-text"> <i class="material-icons">computer</i> <b> <?=$value->research?></h5>
                            </b>

                            <p class="text-white card-text pull-right pt-2">Registered as
                                <strong> <?=$value->priority?></strong> </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            @endforeach
            @else
            <div class="mx-auto">
                <strong> You are not included in any group research </strong>
            </div>

            @endif
        </div>
    </div>
</div>




@endsection