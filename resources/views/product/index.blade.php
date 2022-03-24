@extends('layouts.conquer2')
@section('title')
    Daftar Medicine
@endsection
@section('head_js')
<script>
function showInfo()
    {
      $.ajax({
        type:'POST',
        url:'{{route("product.showInfo")}}',
        data:'_token=<?php echo csrf_token() ?>',
        success: function(data){
          $('#showInfo').html(data.msg)
        }
      });
    }
</script>
@endsection
@section('content')
  <h2>List Medicines</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>
  <a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
  <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">DISCLAIMER</h4>
          </div>
          <div class="modal-body">
            Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
     </div>
  </div>            
  <li>
    <a href="#">Welcome</a>
 </li>
  <li >
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="#" onclick="showInfo()">
       <i class="icon-bulb"></a></i>
    </li>
</ul>
</div>   		
<div id='showInfo'></div>

  {{-- <table class="table table-hover">
    <thead>
      <tr>
        <th>Generin Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Description</th>
        <th>Faskes Tk 1</th>
        <th>Faskes Tk 2</th>
        <th>Faskes Tk 3</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
         <tr>
            <td>{{$li->generic_name}}</td>
            <td>{{$li->form}}</td>
            <td>{{$li->restriction_formula}}</td>
            <td>{{$li->description}}</td>
            <td>{{$li->tk1}}</td>
            <td>{{$li->tk2}}</td>
            <td>{{$li->tk3}}</td>
        </tr>
      @endforeach
    </tbody>
  </table> --}}
  {{-- <div class="row row-cols-3"> --}}
      {{-- @foreach ($listdata as $li) --}}
    {{-- <div class="col-sm-3">
      <div class="card" style="height:30rem" >
          <img src="{{asset('image/'.$li->image)}}" width="100%">
        <div class="card-body">
          <h5 class="card-title">{{$li->generic_name}}</h5>
          <p class="card-text">{{$li->form}}</p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        {{-- </div>
      </div>
    </div> --}}
    {{-- {{-- <h2>List Medicine</h2>
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
      <td>
        <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" 
          data-toggle="modal">{{ $li->id }}</a>  
        
        <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <h4 class="modal-title">{{$li->generic_name}}</h4>
                </div>
                <div class="modal-body">
                         <img src="{{asset('image/'.$li->image)}}" height='200px'/>
                         <p>Description</p>
                         <p>{{$li->description}}</p>
                         <p>Restriction Formula</p>
                         <p>{{$li->restriction_formula}}
                </div>
          <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
             </div>
          </div>
        </div>
      </td>
      <td>{{$li->generic_name}}</td>
      <td>
        <a class='btn btn-info' href="{{route('product.show',$li->id)}}"
           data-target="#show{{$li->id}}" data-toggle='modal'>detail</a>        
        <div class="modal fade" id="show{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
           <div class="modal-content">
             <!-- put animated gif here -->
           </div>
          </div>
        </div>
      </td>
        
    </tr> --}}
    {{-- @endforeach
</tbody>
</table> 
  </div> --}}
  
  @endsection




