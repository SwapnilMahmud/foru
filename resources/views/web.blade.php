{{$data['name']}}
@if($data['name']=='swapnil')
  {{'RIFA'}}
@else
  {{'No'}}
@endif

@for($i=0 ; $i<5 ; $i++)
   {{$i }}
@endfor
@foreach($file as $list)
  {{$list}}
@endforeach
