@if (session()->has('message'))
    <div 
    class="position-fixed top-0 start-50 translate-middle-x laravel-bg text-light px-5 py-3"
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 1500)"
    x-show="show"
   >
        {{ session('message') }}
    </div>
@endif
