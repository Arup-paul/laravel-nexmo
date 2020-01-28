
@php
     function convert_service($value){
      $values= [
           1=>'Electrical',
           2=>'AC & refrigerator',
           3=>'Appliance',
           4=>'Plumbing',
           5=>'Painting',
           6=>'Cleaning & Pest control',
           7=>'Driver',
           8=>'House maid',
           9=>'Moving/Shifting',
           10=>'Laundry',
           11=>'Home security',
           12=>'Car-wash',
           13=>'Rent Service',
           14=>'Desktop & laptop',
           15=>'Interior & Decoration',
           16=>'IT_Solutions',
           17=>'salon & beauty parlour',
           18=>'mason contractor',
           19=>'Travels',
           20=>'Medical & laboratory'
      ];

      return $values[$value];
 }
@endphp 
@section('content')


          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">User Profile</h2>
                  
                  <p class="name">{{$viewuser->name}}</p>
                  <span class="number">{{$viewuser->email}}</span>
                  <span class="number">{{$viewuser->phone}}</span>
                </div>
              </div>
              <div class="card mb-8">
                <div class="card-body overview">
                  
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>User Other Details- </p>
                  </div>
                   <ul>
                     <li>Shop Name: {{$viewuser->shop}}</li>
                     <li>Shop Address: {{$viewuser->shop_address}}</li>
                     <li>Country Code: {{$viewuser->country_code}}</li>
                     <li>Service: {{convert_service($viewuser->service)}}</li>
                   </ul>
                  
                </div>
              </div>
            </div>
           
          </div>
        </div>
     
         


@endsection