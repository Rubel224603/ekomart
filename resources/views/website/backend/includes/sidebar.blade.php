<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <!-- LOGO -->
            <a class="header-brand1" href="{{route('dashboard')}}">
                <img src="{{asset('/')}}website/assets/images/logo/logo-01.svg" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset('/')}}website/assets/images/logo/logo-01.svg" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{asset('/')}}website/assets/images/logo/logo-01.svg" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset('/')}}website/assets/images/logo/logo-01.svg" class="header-brand-img light-logo1" alt="logo">
            </a><!-- LOGO -->


        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                  fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('dashboard')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
                        <span class="side-menu__label">Category</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                        <li><a href="{{route('category.create')}}" class="slide-item">Add Category</a></li>
                        <li><a href="{{route('category.list')}}" class="slide-item">List Category</a></li>

                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,2H9C7.3438721,2.0018311,6.0018311,3.3438721,6,5v1H5C3.3438721,6.0018311,2.0018311,7.3438721,2,9v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-1h1c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M17,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8h14V19z M17,10H3V9c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V10z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-1V9c-0.0008545-0.7719116-0.3010864-1.4684448-0.7803345-2H21V15z M21,6H7V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V6z"/></svg>
                        <span class="side-menu__label">Sub-Categories</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Tables</a></li>
                        <li><a href="{{route('create.sub-category')}}" class="slide-item">Add Sub-Category</a></li>
                        <li><a href="{{route('list.sub-category')}}" class="slide-item">List Sub Category</a></li>

                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21H20V4.5C20,4.223877,19.776123,4,19.5,4S19,4.223877,19,4.5V21h-3v-8.5c0-0.276123-0.223877-0.5-0.5-0.5S15,12.223877,15,12.5V21h-3V8.5C12,8.223877,11.776123,8,11.5,8S11,8.223877,11,8.5V21H8v-4.5C8,16.223877,7.776123,16,7.5,16S7,16.223877,7,16.5V21H3V2.5C3,2.223877,2.776123,2,2.5,2S2,2.223877,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z"/></svg>
                        <span class="side-menu__label">Brand</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Brand</a></li>
                        <li><a href="{{route('brand.create')}}" class="slide-item"> Add Brand</a></li>
                        <li><a href="{{route('brand.list')}}" class="slide-item">Brand List</a></li>

                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M19.7819214,7.5h-9.2255249l2.5594482-4.4225464C15.9681396,3.4337769,18.4015503,5.1206055,19.7819214,7.5z M14.0211182,8.5l2.0198364,3.503479L14.0192871,15.5H9.9798584l-2.0228882-3.5084229L9.9776611,8.5H14.0211182z M12,3c0.0019531,0,0.0038452,0.0003052,0.0057983,0.0003052L7.380249,10.991272L4.8326416,6.5727539C6.4761353,4.4058838,9.0706177,3,12,3z M3,12c0-1.6405029,0.4459839-3.1737671,1.2128296-4.49823L8.8244019,15.5H3.7061157C3.2515259,14.4241333,3,13.2414551,3,12z M4.2138672,16.5h9.2272339l-2.5576782,4.423584C8.0288696,20.5695801,5.5935059,18.8815918,4.2138672,16.5z M12,21c-0.0021362,0-0.0041504-0.0003052-0.0062866-0.0003052l4.6235962-7.996582l2.550354,4.4237671C17.524231,19.5939941,14.9295654,21,12,21z M15.1746826,8.5h5.1159668C20.7460938,9.5758057,20.9986572,10.7584839,21,12c0,1.6407471-0.446106,3.1741943-1.2131348,4.4987183L15.1746826,8.5z"/></svg>
                        <span class="side-menu__label">Unit</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Unit</a></li>
                        <li><a href="{{route('unit.create')}}" class="slide-item">Add Unit</a></li>
                        <li><a href="{{route('unit.list')}}" class="slide-item"> List Unit</a></li>


                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">

                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12.1124268,2.0010986C7.6941528,1.9389648,4.0620728,5.4703979,4,9.8886719c0,5.4482422,7.3642578,11.7285156,7.6777344,11.9931641C11.7677002,21.958313,11.881958,22.0001831,12,22c0.118042,0.0001831,0.2322998-0.041687,0.3222656-0.1181641C12.6357422,21.6171875,20,15.3369141,20,9.8886719C19.9391479,5.5579224,16.4431763,2.0619507,12.1124268,2.0010986z M12,20.8339844C10.5839844,19.5625,5,14.2666016,5,9.8886719C5.0353394,6.0553589,8.166626,2.973877,12,3c3.833374-0.026123,6.9647217,3.0553589,7,6.8886719C19,14.2626953,13.414978,19.5615234,12,20.8339844z M12,7c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3c1.6561279-0.0018311,2.9981689-1.3438721,3-3C15,8.3431396,13.6568604,7,12,7z M12,12c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2c1.1040039,0.0014038,1.9985962,0.8959961,2,2C14,11.1045532,13.1045532,12,12,12z"/></svg>
                        <span class="side-menu__label">Products</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">

                        <li><a href="{{route('product.create')}}" class="slide-item">Add  Product</a></li>
                        <li><a href="{{route('product.list')}}" class="slide-item">List  Product</a></li>

                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M18,14c-1.4293213,0-2.6744385,0.7554932-3.3817749,1.8830566l-4.9604492-2.2773438C9.8745117,13.1135864,9.9994507,12.5721436,10,12c0-0.5722656-0.1245728-1.1138916-0.3410645-1.6062012l4.9593506-2.2767944C15.3256226,9.2445068,16.5707397,10,18,10c2.208252-0.0021973,3.9978027-1.791748,4-4c0-2.2091675-1.7908325-4-4-4s-4,1.7908325-4,4c0,0.4233398,0.0836182,0.8234253,0.2055054,1.2064209L9.1296997,9.5366821C8.3972168,8.607666,7.2749023,8,6,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c1.2741699-0.0012817,2.3956909-0.6087646,3.1281738-1.5372925l5.0773315,2.3308716C14.0836182,17.1765747,14,17.5766602,14,18c0,2.2091675,1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C22,15.7908325,20.2091675,14,18,14z M18,3c1.6561279,0.0018311,2.9981689,1.3438721,3,3c0,1.6568604-1.3431396,3-3,3s-3-1.3431396-3-3S16.3431396,3,18,3z M6,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C9,13.6568604,7.6568604,15,6,15z M18,21c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C21,19.6568604,19.6568604,21,18,21z"/></svg>
                        <span class="side-menu__label">Sub-menus</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                        <li><a href="#" class="slide-item">Submenu-1</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Submenu-2</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="#">Submenu-2.1</a></li>
                                <li><a class="sub-slide-item" href="#">Submenu-2.2</a></li>

                                <li><a class="sub-slide-item" href="#">Submenu-2.4</a></li>
                                <li><a class="sub-slide-item" href="#">Submenu-2.5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z"/></svg>
                        <span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                        <li><a href="calendar2.html" class="slide-item">Calendar</a></li>
                        <li><a href="chat.html" class="slide-item">Chat</a></li>


                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">E-Mail</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="mail-inbox.html">Inbox</a></li>
                                <li><a class="sub-slide-item" href="mail-compose.html">Compose Mail</a></li>
                                <li><a class="sub-slide-item" href="mail-read.html">Read Mail</a></li>
                                <li><a class="sub-slide-item" href="mail-settings.html">Mail Settings</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>




                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.8535156,8.1464844l-6-6C13.7597656,2.0526733,13.6326294,2,13.5,2H7C5.3438721,2.0018311,4.0018311,3.3438721,4,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8.5C20,8.3673706,19.9473267,8.2402344,19.8535156,8.1464844z M14,3.7069702L18.2930298,8H14V3.7069702z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h6v5.5c0,0.0001831,0,0.0003662,0,0.0005493C13.0001831,8.7765503,13.223999,9.0001831,13.5,9H19V19z"/></svg>
                        <span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Authentication</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>

                        </li>


                    </ul>
                </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                                           width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
