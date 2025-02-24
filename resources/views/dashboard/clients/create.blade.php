@extends('dashboard.layouts.master')
@section('content')
   <!-- Container -->
   <div class="container-fluid">
    <div class="flex grow gap-5 lg:gap-7.5">

     <div class="flex flex-col items-stretch grow gap-5 lg:gap-7.5">
      <div class="card pb-2.5">
       <div class="card-header" id="basic_settings">
        <h3 class="card-title">
         Basic Settings
        </h3>
       </div>
       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form method="post" action="{{route('dashboard.client.store')}}" enctype="multipart/form-data">
          @csrf
          @include('dashboard.clients._form')
      </form>
      </div>

     </div>
    </div>
   </div>
   <!-- End of Container -->
@endsection
