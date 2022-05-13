<!--フラッシュメッセージ-->
@if (session('message'))
 <div class="alert alert-primary text-center">  
   {{ session('message') }}
 </div>  
@endif