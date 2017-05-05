@extends({{ $page->layout or "layouts.screen" }})

@section('content')
  <table id="companies" class="table striped">
  </table>

<script>
var url = "/api/v1/company";

var companies = $('#companies').DataTable({
                       ajax: url,
                       columns: [
                           { title: "Name" },
                           { title: "Address" },
                           { title: "City" },
                           { title: "State" }.
                           { title: "ZIP" }}
                       ], "dom": '<"row"<"col-sm-4"f><"col-sm-4 text-center"i><"col-sm-4"p>>tip',
                       "iDisplayLength": 50,
                       "order": [[ 0, "desc" ]]});
</script>
