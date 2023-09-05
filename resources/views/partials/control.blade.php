@php
    $current_route=request()->route()->getName();
@endphp

<div class="row pt-2 bg-white rounded">
    <div class="col-sm-10">
        <div>
            <a href="{{ route('login') }}" class="btn btn-app">
                <i class="fas fa-sign-in"></i> Login
            </a>
            
            <a href="{{ route('register') }}" class="btn btn-app active">
                <i class="fas fa-user-plus"></i> Register
            </a>
        </div>
    </div>
</div>