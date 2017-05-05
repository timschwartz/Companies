@extends("layouts.screen")

@section("content")
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
        <button type="submit" class="btn blue">Save</button>
      </form>
@stop
