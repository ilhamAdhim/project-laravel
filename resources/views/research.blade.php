@extends('master')

@section('title',"Research Group")

@section('content')

<div class="mb-3">
    <a href="/lecturer/{{$account[0]->code}}" class="btn btn-danger"> Back to Profile </a>
</div>

<div class="row mx-auto container">
    <!-- GROUP RESEARCH -->
    @if(!empty($research))
        @foreach ($research as $gr => $value)
    <div class="col-sm-4">
        <li> <?=$value->research?> : <?=$value->priority?></li>
    </div>
    @endforeach 
    @else
    <div class="mx-auto">
        <strong> You are not included in any group research </strong>
    </div>

    @endif

</>





@endsection
