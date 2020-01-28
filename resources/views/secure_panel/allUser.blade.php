

@section('content')

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">All User</h2>
              <div class="row">
                <div class="col-12">
                <h2 style="color:red; font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('delete_user');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('delete_user',' ');
                         }
                       

                     ?>
                 </h2>
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Shop Name</th>
                          <th>Phone Number</th>
                          <th>status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                      <tbody>
                        <?php foreach($allUser as $item){?>
                         <tr>
                            <th>{{$item->name}}</th>
                            <th>{{$item->shop}}</th>
                            <th>{{$item->phone}}</th>
                            <th>
                            
                            <?php if($item->active == 1){?>
                            <span class=" btn btn-xs btn-success">active</span>
                            <?php }else{?>
                            <span class=" btn btn-xs btn-danger">unactive</span>
                            <?php } ?>
                            </th>
                            <th>
                            <a href="{{URL::to('/viewuser/'.$item->id)}}" class="btn btn-outline-primary">View</a>
                            <?php if($item->active == 0){?>
                              <a href="{{URL::to('/active/'.$item->id)}}" class="btn btn-outline-success btn-sm">active</a>
                              <?php }else{?>
                              <a href="{{URL::to('/unactive/'.$item->id)}}" class="btn btn-xs btn-outline-danger">unactive</a>
                              <?php } ?>
                              <a href="{{URL::to('/delete/'.$item->id)}}" class="btn btn-outline-danger">Delete</a>
                            </th>
                         </tr>
                        <?php } ?>
                     
                    
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
     
            
         


@endsection 