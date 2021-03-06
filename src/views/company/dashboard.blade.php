@extends("layouts.screen")

@section('content')
      <div class="row">
          <h2>Companies</h2>
      </div>
      <div class="row">
        <div class="col m6 offset-m6" style="text-align: right;">
          <a class="btn blue" href="/api/v1/company/create">New Company</a>
        </div>
      </div>

      <table id="companies" class="table striped">
      </table>

<script>
var url = "/api/v1/company";

$.fn.dataTableExt.oStdClasses.sPageButton = "btn blue table-button";

var companies = $('#companies').DataTable({
                       ajax: url,
                       columns: [
                           { title: "Name" },
                           { title: "Address" },
                           { title: "City" },
                           { title: "Contacts" }
                       ], "dom": '<"row"<"col-sm-4"f><"col-sm-4 text-center"i><"col-sm-4"p>>tip',
                       "iDisplayLength": 50,
                       "order": [[ 0, "desc" ]]});

$('#companies tbody').on('click', 'tr', function () {
 var data = companies.row(this).data();
 window.location = url+"/"+data[5];
});
</script>
@stop
