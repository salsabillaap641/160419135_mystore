@extends('layouts.conquer2')
@section('title')
    Daftar Category
@endsection
@section('content')
<h2>List category</h2>
<p>Table</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            
        </tr>
    </thead>
<tbody>
    @foreach ($listdata as $li)
    <tr>
        <td>{{$li->name}}</td>
        <td>{{$li->description}}</td>
        <td>
            <ul>
            @foreach($li->products as $lim)
                <li>{{$lim->generic_name}}</li>
            @endforeach
             </ul>
            <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#detail_{{$li->id}}'
            onclick='showProducts({{ $li->id }})'>
            Detail</a>
              
              <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header">
                         <h4 class="modal-title">product di kategori {{$li->name}}</h4>
                      </div>
                      <div class="modal-body">
                        @foreach($li->products as $lim)
                            <li>{{$lim->generic_name}}</li>
        
                               {{-- <p>Description</p>
                               <p>{{$li->description}}</p>
                               <p>Restriction Formula</p>
                               <p>{{$li->restriction_formula}} --}}
                        @endforeach
                      </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                   </div>
                </div>
              </div>
        </td>
        
    </tr>
    @endforeach
</tbody>
</table> 
{{-- <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-wide">
       <div class="modal-content" id="showproducts">
         <!--loading animated gif can put here-->
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div> --}}
@endsection