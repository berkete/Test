
@section('content')

<h1>Welcome to the door operating page</h1>



            <div class="row" >
                <div class="col-sm-8" style="background-color:lightskyblue">
                    {!! Form::open(['method'=>'POST','action'=>'DoorsController@store','files'=>true]) !!}
                      <div class="row">
                          <div class="col-sm-4">

                              <div class="form-group">
                                  {!! Form::label('Year','Year') !!}
                                  {!! Form::select('year_id',[''=>'Year'],null,['class'=>'form-control']) !!}
                              </div>
                          </div>

                          <div class="col-sm-4">

                              <div class="form-group">
                                  {!! Form::label('Month','Month') !!}
                                  {!! Form::select('month_id',[''=>'month'],null,['class'=>'form-control']) !!}
                              </div>
                          </div>
                          <div class="col-sm-4">

                              <div class="form-group">
                                  {!! Form::label('month','Name') !!}
                                  {!! Form::select('user_id',[''=>'name'],null,['class'=>'form-control']) !!}
                              </div>
                          </div>

                      </div>
                    <hr>
                     <table class="table table-bordered">
                         <thead>
                           <tr>
                             <th>Date</th>
                             <th>IN</th>
                             <th>OUT</th>
                               <th>首位しゃ</th>
                               <th>sss</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr class="success">
                             <td></td>
                             <td></td>
                             <td>j</td>
                               <td>ss</td>
                               <td>ss</td>
                           </tr>
                         </tbody>
                       </table>

                </div>
                <div class="col-sm-4" style="background-color:white">
                    <p> upload dat file</p>
                    <div class="col-sm-3">


                        <div class="form-group" >

                            {!! Form::submit('Upload',['class'=>'btn btn-info']) !!}

                        </div>

                    </div>
                    <div class="col-sm-9">


                        <input type="text" class="form-control" placeholder="search.."  name="search"/>
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>

                    </div>

                    <p> </p>
                </div>


                    {!! Form::close() !!}





                <div class="col-sm-4">

                </div>



            </div>





    @endsection