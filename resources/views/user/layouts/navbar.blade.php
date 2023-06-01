<nav class="main-navbar">
    <div class="container">
        <ul>
            
            <li
                class="menu-item  ">
                <a href="{{url('/')}}" class='menu-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="menu-item  has-sub">
                <a href="" class='menu-link'>
                    <i class="bi bi-stack"></i>
                    <span>Produk Menu</span>
                </a>
                <div
                    class="submenu ">
                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                    <div class="submenu-group-wrapper">
                        
                        <ul class="submenu-group">
                            
                            <li
                                class="submenu-item  ">
                                <a href="{{url('/coffee')}}"
                                    class='submenu-link'>Kopi</a>

                            </li>
                        
                            <li
                                class="submenu-item  ">
                                <a href="{{url('/foods')}}"
                                    class='submenu-link'>Makanan</a>

                            </li>
                            
                        </ul>
                        
                    </div>
                </div>
            </li>
            
            <li
                class="menu-item active has-sub">
                <a href="" class='menu-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Tentang</span>
                </a>
                <div
                    class="submenu ">
                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                    <div class="submenu-group-wrapper">
                        
                        <ul class="submenu-group">

                            <li
                                class="submenu-item  ">
                                <a href="{{url('/maps')}}"
                                    class='submenu-link'>Lokasi Kami</a>

                            </li>

                            <li
                                class="submenu-item  ">
                                <a href="{{url('/contact')}}"
                                    class='submenu-link'>Hubungi Kami</a>

                            </li>
                            
                        </ul>
                        
                    </div>
                </div>
            </li>
            
            
            
            <li
                class="menu-item  has-sub">
                <a href="" class='menu-link'>
                    <i class="bbi bi-person-badge-fill"></i>
                    <span>Join</span>
                </a>
                <div
                    class="submenu ">
                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                    <div class="submenu-group-wrapper">
                        
                        <ul class="submenu-group">

                            <li
                                class="submenu-item  ">
                                <a href="{{url('/login')}}"
                                    class='submenu-link'>Login</a>
                            </li>
                            
                            <li
                                class="submenu-item  ">
                                <a href="{{url('/register')}}"
                                    class='submenu-link'>Register</a>
                            </li>
                        
                        </ul>
                        
                    </div>
                </div>
            </li>
            
        </ul>
    </div>
</nav>