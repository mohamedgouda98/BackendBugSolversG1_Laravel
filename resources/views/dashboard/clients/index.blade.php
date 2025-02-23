@extends('dashboard.layouts.master')
@section('content')
    <!-- Main -->
     <div class="flex flex-col grow lg:scrollable-y-auto lg:[scrollbar-width:auto] lg:light:[--tw-scrollbar-thumb-color:var(--tw-content-scrollbar-color)] pt-5" id="scrollable_content">
      <main class="grow" role="content">

       <!-- Container -->
       <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
         <div class="card card-grid min-w-full">
          <div class="card-body">
           <div data-datatable="true" data-datatable-state-save="false" id="team_crew_table">
            <div class="scrollable-x-auto">
             <table class="table table-auto table-border" data-datatable-table="true">
              <thead>
               <tr>
                <th class="min-w-[5px]">
                 <span class="sort asc">
                  <span class="sort-label font-small text-gray-10">
                   #
                  </span>
                  <span class="sort-icon">
                  </span>
                 </span>
                </th>
                <th class="min-w-[100px]">
                 <span class="sort">
                  <span class="sort-label font-normal text-gray-700">
                   Name
                  </span>
                  <span class="sort-icon">
                  </span>
                 </span>
                </th>
                <th class="min-w-[100px]">
                 <span class="sort">
                  <span class="sort-label font-normal text-gray-700">
                   logo
                  </span>
                  <span class="sort-icon">
                  </span>
                 </span>
                </th>
                <th class="min-w-[180px]">
                  <span class="sort">
                   <span class="sort-label font-normal text-gray-700">
                    image
                   </span>
                   <span class="sort-icon">
                   </span>
                  </span>
                 </th>
                <th class="min-w-[180px]">
                 <span class="sort">
                  <span class="sort-label font-normal text-gray-700">
                   URL
                  </span>
                  <span class="sort-icon">
                  </span>
                 </span>
                </th>


                <th class="min-w-[180px]">
                 <span class="sort">
                  <span class="sort-label font-normal text-gray-700">
                   Description
                  </span>
                  <span class="sort-icon">
                  </span>
                 </span>
                </th>
                <th class="min-w-[10px]">
                 <span class="sort">
                  <span class="sort-label font-normal text-gray-700">
                   Activity
                  </span>
                  <span class="sort-icon">
                  </span>
                 </span>
                </th>
               </tr>
              </thead>
              <tbody>

                {{-- name
logo
image
url
description --}}
              @foreach($clients as $client)
                  <tr>
                    <td class="text-gray-10 font-normal">
                      <a class="text-sm font-medium text-gray-10 hover:text-primary-active mb-px" href="#">
                          {{$loop->iteration}}
                      </a>
                  </td>
                      <td>
                            <div class="flex flex-col">
                                    {{$client->name}}
                            </div>

                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                            <img  class="rounded-full size-9 shrink-0" src="{{asset($client->logo)}}"/>
                        </div>
                    </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                            <img  class="rounded-full size-9 shrink-0" src="{{asset($client->image)}}"/>
                        </div>
                    </td>
                      <td class="text-gray-800 font-normal">
                          <a class="text-sm font-medium text-gray-900 hover:text-primary-active mb-px" href="#">
                              {{$client->url}}
                          </a>
                      </td>


                      <td class="text-gray-800 font-normal">
                              <p>{{$client->description}}</p>
                      </td>

                      <td class="text-center">
                          <div class="menu flex-inline" data-menu="true">
                              <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-placement-rtl="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                                  <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                      <i class="ki-filled ki-dots-vertical">
                                      </i>
                                  </button>
                                  <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">


                                      <div class="menu-item">
                                          <a class="menu-link" href="{{route('dashboard.client.edit',$client->id)}}">
                                              <span class="menu-icon">
                                               <i class="ki-filled ki-pencil">
                                               </i>
                                              </span>
                                              <span class="menu-title">
                                               Edit
                                              </span>
                                          </a>
                                      </div>

                                      <div class="menu-separator">
                                      </div>
                                      <div class="menu-item">
                                          <a class="menu-link" href="{{route('dashboard.client.delete',$client->id)}}">
                                              <span class="menu-icon">
                                               <i class="ki-filled ki-trash">
                                               </i>
                                              </span>
                                              <span class="menu-title">
                                               Remove
                                              </span>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </td>
                  </tr>
              @endforeach
              </tbody>
             </table>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <!-- End of Container -->

@endsection
