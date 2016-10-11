<div class="hidden">
  require_once('/vendor/fzaninotto/faker/src/autoload.php')
</div>
@extends('layout')
@section('content')
  <div class="row backg">
    <div class="col-md-12">
      <div class="col-md-12">
        <div class="col-md-10 inner col-xs-10 col-xs-offset-1 col-sm-6">
          <div class="text-box">
            <div>
              <h4>How many users do you want?</h4>
              <br>
              <form class="form-inline">
                <div class="form-group">
                  <input type="text" class="form-control" name="num" placeholder="Enter # of users" Value="">
                </div>
                <br><br>
                <div>
                <button type="submit" class="btn btn-danger">Generate!</button>
              </div>
              </form>
              <h5>(Min: 1 | Max: 99)</h5>
          </div>
              <h2 class="intro">Developer's Best Friend</h2>
              <div>


            <div class="row">
                <?php for ($i=0; $i < $number; $i++) { ?>
              <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1" >

                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 class="panel-title">{{$faker->name;}}</h3>
                  </div>
                  <div class="panel-body">

                        <div class="row">
                          <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{$faker->imageUrl($width = 480, $height = 480)}}" class="img-circle img-responsive"> </div>
                          <div class=" col-md-8 col-lg-8 ">
                            <table class="table table-user-information">
                              <tbody>
                                <tr>
                                  <td>Home Address</td>
                                  <td>{{$faker->address;}}</td>
                                </tr>
                                <tr>
                                  <td>Date of Birth</td>
                                  <td>{{$faker->date($format = 'm/d/y', $max = 'now')}}</td>
                                </tr>
                                <tr>
                                  <td>Email</td>
                                  <td><a href="mailto:info@support.com">{{$faker->email;}}</a></td>
                                </tr>
                                  <td>Phone Number</td>
                                  <td>{{$faker->phoneNumber;}}(Landline)
                                  </td>

                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                        <br>


                </div>

                </div>

              </div>
              <?php } ?>

            </div>
    </div>
          </div>
        </div>
      </div>
    </div>
</div>
@stop
