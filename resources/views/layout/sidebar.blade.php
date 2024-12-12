 <!--begin::Sidebar-->
 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
   <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../" class="brand-link"> <!--begin::Brand Image--> <img src="../../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
   <div class="sidebar-wrapper">
       <nav class="mt-2"> <!--begin::Sidebar Menu-->
           <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
               <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                       <p>
                           Master Data
                           <i class="nav-arrow bi bi-chevron-right"></i>
                       </p>
                   </a>
                   <ul class="nav nav-treeview">
                       <li class="nav-item"> <a href="{{url('/student')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                               <p>Students</p>
                           </a> </li>
                       <li class="nav-item"> <a href="{{url('/userdata')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                               <p>Users</p>
                           </a> </li>
                       <li class="nav-item"> <a href="{{url('/departments')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                               <p>Department</p>
                           </a> </li>
                   </ul>
               </li>

               <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                <p>
                    Transaction
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
                </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{url('/registrations')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Registration</p>
                            </a> </li>
                        <li class="nav-item"> <a href="{{url('/payments')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Payment</p>
                            </a> </li>
                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                        Log and Document
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="{{url('/logs')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Log</p>
                                </a> </li>
                            <li class="nav-item"> <a href="{{url('/documents')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Document</p>
                                </a> </li>
                        </ul>
                </li>

           </ul> <!--end::Sidebar Menu-->
       </nav>
   </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->
