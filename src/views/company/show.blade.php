@extends("layouts.screen")

@section("content")
        <div class="row">
          <h2>Companies</h2>
        </div>
        <div class="row">
          <div class="col m6">
            <a href="/companies" class="btn blue">Company Index</a>
          </div>
          <div class="col m2 offset-m3">
            <form method="post" action="/api/v1/company/{{{ $Company->id }}}">
              {!! csrf_field(); !!}
              <input type="hidden" name="_method" value="delete" />
              <button type="submit" class="btn red">Delete</button>
            </form>
          </div>
          <div class="col m1">
            <a class="btn blue" href="/api/v1/company/{{{ $Company->id }}}/edit">Edit</a>
          </div>
        </div>
        <div class="row">
            <h4>{{{ $Company->name }}}</h4>
        </div>
        <div class="row">
          <div class="col s4">
            {{{ $Company->address }}}<br />
            {{{ $Company->address2 }}}<br />
            {{{ $Company->city }}}, {{{ $Company->state }}} {{{ $Company->zip }}}
          </div>
          <div class="s4 offset-s2">
  @foreach($company_phones as $phone)
            <button type="button" class="btn green" onclick="alert('Dialing is not implemented');">Dial {{{ $phone->number }}}</button>
  @endforeach
          </div>
        </div>
        <div class="row">
            <iframe src="//www.google.com/maps/embed/v1/place?q={{{ $Company->address }}} {{{ $Company->city }}} {{{ $Company->state }}}&zoom=17&key=AIzaSyCTdPxXwY4QoKT1q99sE09Hw2ECbX46ECg">
            </iframe>
        </div>
  @if(isset($employees))
        <div class="row">
            <h5>Employees</h5>
        </div>
  @endif
  @foreach($employees as $employee)
        <div class="row">
          <div class="col s3">
            {{{ $employee->given_name }}} {{{ $employee->surname }}}
          </div>
          <div class="col s3">
            {{{ $employee->email }}}
          </div>
        </div>
  @endforeach
@stop
