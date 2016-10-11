
@extends('layout')
@section('content')

<div class="row">
  <div class="col-md-12 backg">
    <div class="col-md-10 inner col-xs-10 col-xs-offset-1 col-sm-6">
      <div class="text-box">
        <div>
          <h4>How many paragraphs do you want?</h4>
          <br>
          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Paragraphs</label>
              <input type="text" class="form-control" name="num" placeholder="5" Value="5"><br>
            </div>
            <button type="submit" class="btn btn-danger">Generate!</button>
          </form>
          <h5>(Max: 99)</h5>
      </div>
          <h2 class="intro">-----------</h2>
          <p><{{implode('<p>', $paragraphs);}}</p>
      </div>
    </div>
  </div>
</div>
@stop
