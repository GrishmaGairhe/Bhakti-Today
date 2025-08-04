@if(Session::has('success'))
<div id="alert" class="fixed top-4 right-4 bg-green-500 text-white text-xl font-bold rounded-lg p-4 transition-all duration-1000">
    {{session('success')}}
</div>
<script>
    setTimeout(() => {
        document.querySelector('.fixed').style.marginRight = '-100%';
    }, 3000);
</script>
@endif