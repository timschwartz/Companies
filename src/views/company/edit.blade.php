@extends("layouts.screen")

@section("title", "Company: ".$Company->name)

@section("content")
      <div class="row">
        <h2>Companies</h2>
      </div>
      <div class="row">
        <div class="col m6">
          <a href="/api/v1/company" class="btn">Company Index</a>
        </div>
        <div class="col m2 offset-m3">
          <form method="post" action="/api/v1/company/{{{ $Company->id }}}">
            {!! csrf_field(); !!}
            <input type="hidden" name="_method" value="delete" />
            <button type="submit" class="btn">Delete</button>
          </form>
        </div>
        <div class="col m1">
          <form method="post" action="/api/v1/company/{{{ $Company->id }}}" >
              {!! csrf_field(); !!}
              <input type="hidden" name="_method" value="patch" />
              <button class="btn" type="submit">Save</button>
        </div>
      </div>

        <div class="row">
            <label for="name">Company name</label>
            <input type="text" id="name" name="name" value="{{{ $Company->name }}}" />
        </div>
        <div class="row">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{{ $Company->address }}}" />
        </div>
        <div class="row">
            <label for="address2">Address 2</label>
            <input type="text" id="address2" name="address2" value="{{{ $Company->address2 }}}" />
        </div>
        <div class="row">
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="{{{ $Company->city }}}" />
        </div>
        <div class="row">
            <label for="state">State</label>
            <input type="text" id="state" name="state" value="{{{ $Company->state }}}" />
        </div>
        <div class="row">
            <label for="zip">ZIP</label>
            <input type="text" id="zip" name="zip" value="{{{ $Company->zip }}}" />
        </div>
    </form>
@stop
