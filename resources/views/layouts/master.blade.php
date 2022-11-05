<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{asset('images/logo.png')}}">
                    <h2>WELL<span class="wellcoms">HADAR</span></h2>
                </div>
                <div class="close" id="close-btn"> 
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="">
                    <span class="material-symbols-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="" class="active" >
                    <span class="material-symbols-sharp">home_max</span>
                    <h3>Units</h3>
                </a>
                <a href="">
                    <span class="material-symbols-sharp">dns</span>
                    <h3>Datahosts</h3>
                </a>
                <a href="">
                    <span class="material-symbols-sharp">nest_cam_indoor</span>
                    <h3>Wells</h3>
                </a>
                <a href="">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Reports</h3>
                </a>
                <a href="">
                    <span class="material-symbols-sharp">group</span>
                    <h3>Users</h3>
                </a>
                
                <a href="">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>      
            </div>
        </aside>

        @yield('main')

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-sharp">light_mode</span>
                    <span class="material-symbols-sharp active">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey,<b>Yassine</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                </div>
            </div>
            <div class="recent-updates">
                <h2>Recent updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-2.jpg">
                        </div>
                        <div class="message">
                            <p><b>Abdelhadi</b> update hasp ID:846571</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>                       
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg">
                        </div>
                        <div class="message">
                            <p><b>Tarik</b> Create 3 users</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>    
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-4.jpg">
                        </div>
                        <div class="message">
                            <p><b>Imad</b> Create new well </p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>       