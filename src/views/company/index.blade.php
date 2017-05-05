@extends($page->layout or "layouts.screen")

@section("content")
<?php
switch($page->format)
{
    case "json":
        print json_encode($Companies->toArray());
        break;
    case "screen":
?>
      <div class="row">
        <h2>Companies</h2>
      </div>
      <div class="row">
        <div class="col m6">
          <a href="/api/v1/company" class="btn">Company Index</a>
        </div>
        <div class="col m6" style="text-align: right;">
          <a href="/api/v1/company/create" class="btn">New</a>
        </div>
      </div>
@foreach($Companies as $Company)
      <div class="row">
        <a href="/api/v1/company/{{{ $Company->id }}}">
        <div class="col m3">
          {{{ $Company->name }}}
        </div>
        <div class="col m3">
          {{{ $Company->address }}}
          <br />
          {{{ $Company->address2 }}}
        </div>
        <div class="col m2">
          {{{ $Company->city }}}
        </div>
        <div class="col m2">
          {{{ $Company->state }}}
        </div>
        <div class="col m2">
          {{{ $Company->zip }}}
        </div>
        </a>
      </div>
@endforeach
<?php
        break;
}
?>
@stop
