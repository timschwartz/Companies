@extends("layouts.screen")

@section("content")
        <div class="row">
          <h2>Companies</h2>
        </div>
        <div class="row">
          <div class="col m6">
            <a href="/companies" class="btn blue">Company Index</a>
          </div>
          <div class="col m6" style="text-align: right;">
            <a class="btn blue" href="/api/v1/company/{{{ $Company->id }}}/edit">Edit</a>
            <a class="btn red" href="#" onclick="alert('Not implemented');">Delete</a>
          </div>
        </div>
        <div class="row">
            <label for="name">Company name</label>
            <input type="text" id="name" name="name" value="{{{ $Company->name }}}" readonly />
        </div>
        <div class="row">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{{ $Company->address }}}" readonly />
        </div>
        <div class="row">
            <label for="address2">Address 2</label>
            <input type="text" id="address2" name="address2" value="{{{ $Company->address2 }}}" readonly />
        </div>
        <div class="row">
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="{{{ $Company->city }}}" readonly />
        </div>
        <div class="row">
            <label for="state">State</label>
            <input type="text" id="state" name="state" value="{{{ $Company->state }}}" readonly />
        </div>
        <div class="row">
            <label for="zip">ZIP</label>
            <input type="text" id="zip" name="zip" value="{{{ $Company->zip }}}" readonly />
        </div>
@stop
