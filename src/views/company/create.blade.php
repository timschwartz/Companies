@extends("layouts.screen")

@section("content")
        <div class="row">
          <h2>Companies</h2>
        </div>
        <div class="row">
          <div class="col m6">
            <a href="/companies" class="btn blue">Company Index</a>
          </div>
          <div class="col m1 offset-m5">
            <button type="submit" class="btn blue">Save</button>
          </div>
        </div>

      <form method="post" action="/api/v1/company">
        {!! csrf_field() !!}
        <div class="row">
            <label for="name">Company name</label>
            <input type="text" id="name" name="name" placeholder="Company name" />
        </div>
        <div class="row">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Address" />
        </div>
        <div class="row">
            <label for="address2">Address 2</label>
            <input type="text" id="address2" name="address2" placeholder="Address line 2" />
        </div>
        <div class="row">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="City" />
        </div>
        <div class="row">
            <label for="state">State</label>
            <input type="text" id="state" name="state" placeholder="State" />
        </div>
        <div class="row">
            <label for="zip">ZIP</label>
            <input type="text" id="zip" name="zip" placeholder="ZIP" />
        </div>
        <div class="row">
          <div class="col m1 offset-m11">
            <button type="submit" class="btn blue">Save</button>
          </div>
        </div>
      </form>
@stop
