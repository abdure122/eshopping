
    <x-guest-layout>
        @include('layouts.header');
       <div class="container">
    
           <div class="row">
             <div class="col-sm-3 ">
                @include('admin.side_bar')
             </div>
             <div class="col-sm-9">
                 <div class="container m-auto">
       @yield('home_content')
            </div>
            </div>
            </div>
            </div>
    
     </x-guest-layout>
   


