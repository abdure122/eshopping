

 <!-- Sidebar user (optional) -->
  <div class="bg-white h-100 " style="height: 100%">
 <div  data-spy="scroll"  class="bg-white " >

 <div class="user-panel mt-3 pb-3 mb-3 bg-white ">
    <div class="image">
       <img src="{{asset('logos/'.Auth::user()->Logo)}}" class="img-circle elevation-2 " alt="User Image" width="40">
    </div>
    <div class="info">
      <a href="#" class="d-block">{{Auth::user()->campany_name}}</a>
    </div>
  </div>




    <ul class=" m-auto nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false" >
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="#" class="nav-link bg-primary border border-bottom border-white">
          <i class="nav-icon fas fa-circle"></i>
          <p>
            Manage Catagory
            <i class=" ml-0 left fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item bg-white border border-bottom border-white">
            <a href="/admin/catagory" class="nav-link">
              <i class="far fa- nav-icon"></i>
              <p>View Catagory</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/catagory/create" class="nav-link">
              <i class="far fa- nav-icon"></i>
              <p>Add Catagory</p>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link bg-primary border border-bottom border-white">
          <i class="nav-icon fas fa-circle"></i>
          <p>
            Manage Items
            <i class=" mr-0 left fas fa-angle-left"></i>
          </p>
        </a>

        <ul class="nav nav-treeview justify-content-sm-end">
          <li class="nav-item bg-white border border-bottom border-white">
            <a href="/admin/item" class="nav-link bg-white border border-bottom  text-dark">
                <i class="nav-icon  fas -"></i>
                <p>
                  View Items
                  <i class=" ml-0 left fas fa-angle"></i>
                </p>
              </a>


          </li>
         <li class="nav-item bg-white border border-bottom border-white">
            <a href="/admin/item/create" class="nav-link bg-white border border-bottom border-white text-dark">
                <i class="nav-icon fas "></i>
                <p>
                  Add Items
                  <i class=" ml-0 left fas fa-angle"></i>
                </p>
              </a>
          </li>

        </ul>
      </li>

      <li class="nav-item bg-primary border border-bottom border-white">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-circle"></i>
          <p>
            Manage Order
            <i class=" ml-0 left fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item bg-white border border-bottom border-white">
                <a href="/admin/order" class="nav-link">
                  <i class="far fa- nav-icon"></i>
                  <p>All Order</p>
                </a>
              </li>
          <li class="nav-item bg-white border border-bottom border-white">
            <a href="/admin/new_order" class="nav-link">
              <i class="far fa- nav-icon"></i>
              <p> New Order</p>
            </a>
          </li>

        </ul>
        </li>
          <li class="nav-item bg-primary border border-bottom border-white">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Manage Customer
                <i class=" ml-3 left fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item  bg-white border border-bottom border-white">
                <a href="/admin/user" class="nav-link">
                  <i class="far fa- nav-icon"></i>
                  <p>All Customer</p>
                </a>
              </li>
              <li class="nav-item bg-white border border-bottom border-white">
                <a href="/admin/user/create" class="nav-link">
                  <i class="far fa nav-icon"></i>
                  <p>Add Customer</p>
                </a>
              </li>

            </ul>
          </li>


      </li>


    </ul>
</div>
</div>
