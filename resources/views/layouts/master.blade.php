
<!DOCTYPE html>

<html lang="en">
<head><script nonce="612e8795-aa4c-4fbc-864f-d8bac8568908">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shopify</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="./img/shopify.png"/>
<link rel="stylesheet" href="/css/app.css">

</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper" id='app'>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">


<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>

</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<p href="index3.html" class="brand-link">
<img src="./img/shopify.png" alt="Shopify Logo" class="brand-image" style="opacity: .8">
<span class="brand-text font-weight-light">Shopify</span>
</p>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<p href="#" class="d-block text-light text-uppercase">
{{Auth::user()->name}}
</p>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item">
<router-link to='/product'  class="nav-link">
<i class="nav-icon fas fa-clipboard-list blue"></i>
<p>
Product
{{--  <span class="right badge badge-danger">New</span>  --}}
</p>
</router-link>
</li>
<li class="nav-item" >
<router-link to='/customer'  class="nav-link">
<i class="nav-icon fa-solid fa-user-gear orange"></i>
<p>
Customer
{{--  <span class="right badge badge-danger">New</span>  --}}
</p>
</router-link>
</li>
<li class="nav-item">
<router-link to='/order'  class="nav-link">
<i class="nav-icon fa-solid fa-cart-shopping green"></i>
<p>
Order
{{--  <span class="right badge badge-danger">New</span>  --}}
</p>
</router-link>
</li>

<li class="nav-item">
     <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
         <i class="nav-icon fa-solid fa-right-from-bracket red"></i>
           <p>
           {{ __('Logout') }}
           </p>                             
    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</li>
</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">


<div class="content">
<div class="container-fluid">

<router-view></router-view>
</div>
</div>

</div>


{{--  <footer class="main-footer">

<div class="float-right d-none d-sm-inline">
Sample Project
</div>

<strong>Copyright &copy;
peiyin.</strong>
</footer>  --}}
</div>

<script src="/js/app.js"></script>



</body>
</html>
