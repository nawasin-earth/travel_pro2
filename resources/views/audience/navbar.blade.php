<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Your-Body-Font:400|Your-Heading-Font:400,700" rel="stylesheet">
    <style>
/* 12columns.css | Created by Katherine Kato | Released under the MIT license */
/* GitHub: https://kathykato.github.io/12columns/ */
@import url("https://fonts.googleapis.com/css?family=Old+Standard+TT:400|Muli:300,700");


body {
  font-family: "Your-Body-Font", sans-serif;
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.6;
  margin: 0;
  padding: 0;

  background: #fff;
  text-rendering: optimizeLegibility;
}

.nav-link {
  transition: color 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  color: #d5cdcd;
  text-decoration: none;
}
.nav-link:hover {
  color: #fff;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
ul li {
  margin: 0 1.5rem 0 0;
}



nav {
  position: relative;
  padding: 1.25rem 0 1.25rem 0;
  background: #1e1e1e;
}
nav ul {
  display: flex;
  justify-content: flex-start;
}


#logo {
  color: #fff;
  font-weight: 700;
  font-size: 0.875rem;
  letter-spacing: 0.125rem;
  text-transform: uppercase;
  margin: 0;
}

.container {
  margin: auto;
  padding: 0 1rem;
  max-width: 68rem;
  width: 100%;
}

header {
  background: linear-gradient(0deg, #fff 0%, #fff 13%, #1e1e1e 13%, #1e1e1e 50%);
}
header section {
  padding: 0;
}




    nav {
      background-color: #1F1F1F; /* Set the background color of the navigation bar */
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000; /* Set a high z-index to ensure it's above other elements */
    }

    nav ul {
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-align: center;
      padding: 5px 20px; /* Add some padding for better visibility */
      margin: 0;
    }

    nav ul li {
      font-size: 0.875rem;
      font-weight: 700;
      letter-spacing: 0.15rem;
      line-height: .1rem;
      text-transform: uppercase;
      margin: 0 1.5rem 0 0;
    }

    nav ul li:last-child {
      margin: 0;
    }

    #ayana-lin {
      color: var(--white);
      font-weight: 700;
      font-size: 0.987rem;
      letter-spacing: 0.125rem;
      text-transform: uppercase;
      margin: 0;
      margin-right: auto;
    }

    nav ul {
      margin-left: auto;
    }

    /* Custom Dropdown Styles */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-item {
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-item:hover {
      border: 1px solid #3D3D3D;
      color: #2A2A2A; 
    }



    * {
  box-sizing: border-box;
}
*::before, *::after {
  box-sizing: border-box;
}



    </style>
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <ul class="navbar-nav">
        <li id="ayana-lin"><a href="{{ url('/') }}" class="nav-link">Tour Nua Isaan</a></li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('audience.vRanking') }}">ติดอันดับ</a>
          </li>
          <li class="nav-item">
    @auth
        <a class="nav-link" href="{{ route('favorite') }}">รายการโปรด</a>
    @else
        <a class="nav-link" href="#" onclick="openLoginModal()">รายการโปรด</a>
    @endauth
</li>
<li class="nav-item">
            <a class="nav-link" href="{{ route('audience.vNews') }}">ข่าว</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
          </li>
          @endif

          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              ชื่อ: {{ Auth::user()->name }}
            </a>

            <div class="dropdown-content">
              <a class="dropdown-item" href="{{ route('profile') }}">ข้อมูลส่วนตัว</a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                ออกจากระบบ
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </nav>


<script>
    function openLoginModal() {
    // เปิดหน้าต่างลอยเตือนให้เข้าสู่ระบบ
    var agree = confirm('กรุณาเข้าสู่ระบบเพื่อเข้าถึงรายการโปรด');
    if (agree) {
        // ถ้าผู้ใช้กดตกลง ให้ redirect ไปยังหน้า login
        window.location.href = "{{ route('login') }}";
    } else {
        // ถ้าผู้ใช้กดยกเลิก ไม่ต้องกระทำอะไร
    }
}

</script>


</body>

</html>
