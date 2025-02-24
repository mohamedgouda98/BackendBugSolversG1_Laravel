@extends('dashboard.layouts.master')
@section('content')
   <!-- Container -->
   <div class="container-fluid">
    <div class="flex grow gap-5 lg:gap-7.5">

     <div class="flex flex-col items-stretch grow gap-5 lg:gap-7.5">
      <div class="card pb-2.5">
       <div class="card-header" id="basic_settings">
        <h3 class="card-title">
         Show Client : {{ $client->name }}
        </h3>
       </div>
      </div>
     </div>
    </div>
   </div>
@endsection