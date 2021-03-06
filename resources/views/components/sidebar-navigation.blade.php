<div class="col col-lg-2">
    <div class="card mb-3 border border-light">
        <ul class="list-group list-group-flush">
            <a href="{{ route('vendor.index') }}" class="text-decoration-none {{ (request()->is('dashboard/vendor')) ? 'border-start border-5 border-primary ' : '' }}"><li class="list-group-item sidebar-hover">
                <span><i class="bi bi-grid"></i></span>&nbsp;&nbsp;{{ __('Dashboard') }}</li></a>

            <a href="{{ route('vendor.product.index') }}" class="text-decoration-none {{ (request()->is('dashboard/vendor/product*')) ? 'border-start border-5 border-primary ' : '' }}"><li class="list-group-item sidebar-hover">
                <span><i class="bi bi-trophy"></i></span>&nbsp;&nbsp;{{ __('Products') }}</li></a>
                
            <a href="{{ route('vendor.profile.index') }}" class="text-decoration-none {{ (request()->is('dashboard/vendor/toko*')) ? 'border-start border-5 border-primary ' : '' }}"><li class="list-group-item sidebar-hover">
                <span><i class="bi bi-trophy"></i></span>&nbsp;&nbsp;{{ __('Toko') }}</li></a>

            <a href="" class="text-decoration-none"><li class="list-group-item sidebar-hover">
                <span><i class="bi bi-trophy"></i></span>&nbsp;&nbsp;{{ __('Blog Post') }}</li></a>

            <a href="" class="text-decoration-none"><li class="list-group-item sidebar-hover">
                <span><i class="bi bi-person"></i></span>&nbsp;&nbsp;{{ __('Profile') }}</li></a>

            <a href="{{ route('logout') }}" class="text-decoration-none" onclick="event.preventDefault();
                    document.getElementById('logout-button').submit();"><li class="list-group-item sidebar-hover">
                <span><i class="bi bi-box-arrow-in-right"></i></span>&nbsp;&nbsp;{{ __('Logout') }}</li></a>
            
            <form id="logout-button" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</div>

<style>
    .sidebar-hover {
        background-color: #ffffff
    }
    
    .sidebar-hover:hover {
        background-color: #e9e9e9;
        transition: 0.3s;
    }
</style>