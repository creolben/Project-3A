
@extends('layout')
@section('content')
<?php
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
?>
  <div class="row features">
    <div class="col-md-12">
      <div class="col-md-12">
        <div class="col-md-10 inner col-xs-10 col-xs-offset-1 col-sm-6">
          <div class="text-box">
            <div>
              <h4>How many paragraphs do you want?</h4>
              <br>
              <form class="form-inline">
                <div class="form-group">
                  <label for="exampleInputName2">Paragraphs</label>
                  <input type="text" class="form-control" id="InputName2" placeholder="5" Value="5">
                </div>
                <button type="submit" class="btn btn-default">Generate!</button>
              </form>
              <h5>(Max: 99)</h5>
          </div>
              <h2 class="intro">Developer's Best Friend</h2>
              <p><?php echo implode('<p>', $paragraphs);?></p>
          </div>
        </div>
      </div>
    </div>
</div>
@stop
