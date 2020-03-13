<div class="comtainer">
    @if(Session('success'))
<div class="alert alert-success" style="margin-bottom:-100px;margin-top:20px;">
    {{ __("text.home-success") }}
</div>
@endif

@if(Session('error'))
<div class="alert alert-warning"  style="margin-bottom:-100px;margin-top:20px;">
    {{ __("text.home-danger") }}
</div>
@endif
</div>