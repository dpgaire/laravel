@extends('layout/master')

@section('body')


    <h1 class="text-center">The first view using laravel</h1>
    <br>
    <h1 class="text-center">I am exited to do laravel </h1>
   <h1 class="text-center"><?php print_r($stu); ?> </h1>
   <h1 class="text-center"><?php print_r($mks); ?> </h1>
   <h1 class="text-center"><?php print_r($add); ?> </h1>
   <h1 class="text-center">{{$cba}} </h1>
   <!-- <h1 class="text-center">{{$script}} </h1> -->

   <h1>
    <!-- It will not run the script  -->
    {{$script}}
   </h1>
   <h1>
    <!-- The way of running the script  -->
    {!! $script !!}
   </h1>
   <h1>
    <!-- To tell laravel this not the part of laravel  -->
    @{{$script}}
   </h1>
   <h1>{{$hari or "Not found"}}</h1>

   <!-- If and else using blade syntax  -->
   <?php $error="DATA NOT FOUND";?>
   @if($hari=="Condition")
   
       {{ $hari }}
   
   @elseif($hari=="Ram")
         {{ $hari }}
   @else
        {{ $error }}
    @endif
   
@endsection
   

