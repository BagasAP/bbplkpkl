@extends('layouts.master')
@section('contents')


        <div class="panel-heading">
          <h2 class="panel-title">Data Kejuruan</h2>
        </div>

                <td><a class="btn btn-primary" href="kejuruan/create">Create</a></td>
                <td><a class="btn btn-warning" href="javascript:void(0)" onclick="on_edit()">Edit</a></td>
                <td><a class="btn btn-danger" href="javascript:void(0)" onclick="on_delete()">Delete</a></td> <br>  
                <br>
<div class="container-fluid">
<div class="row-fluid">
          <table class="table" id="app">
            {!! $html->table(['class'=>'table-striped'])!!}
          </table>
        </div>
      </div>
 



<script type="text/javascript">
var ids = [];

function addId(obj) {
  //alert("Kode: "+ obj.value + '; ' + (obj.checked? 'terpilih' : 'tidak dipilih'));
  console.log(obj);

  //checkbox terpilih..
  if(obj.checked) {
    ids.push(obj.value);
  } else {
    //checkbox tidak dipilih
    var index = ids.indexOf(obj.value);
    ids.splice(index, 1);
  }
}


function on_edit()
{
  if(ids.length == 0) {
    alert("silahkan pilih data yang ingin di ubah !");
  } else if (ids.length > 1 ){
     alert("silahkan pilih salah satu datanya !");
  }else {
    var konfirmasi = confirm("Apakan anda yakin akan merubah data ?");
    if( konfirmasi == true ) {
        //alert('Eksekusi delete dilakukan..');
        $.ajax({
            url: "kejuruan/edit",
            type: 'post',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            data: {"ids": ids},
            success: function(result) {
              
            }
        });
        setTimeout(function(){
          window.location = "/kejuruan/"+ids+"/edit";  
        }, 1000);
        
    } else {
        alert('Eksekusi rubah data dibatalkan..');
    }
  }
}

function on_delete()
{
  if(ids.length == 0) {
    alert("silahkan pilih data yang ingin dihapus !");
  } else {
    var konfirmasi = confirm("Apakan anda yakin akan menghapus ?");
    if( konfirmasi == true ) {
        //alert('Eksekusi delete dilakukan..');
        $.ajax({
            url: "kejuruan/destroy",
            type: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            data: {"ids": ids},
            success: function(result) {
              
            }
        });
        setTimeout(function(){
          window.location = "/kejuruan";  
        }, 1000);
        
    } else {
        alert('Eksekusi delete data dibatalkan..');
    }
  }
}

</script>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection