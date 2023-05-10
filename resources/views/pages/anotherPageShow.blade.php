<h1>the another page for showing the list</h1>
@if(count($myList)>0)
   @foreach($myList as $mylist)
      @if($loop->even)
         <strong>{{$mylist}}</strong>
      @else   
         <li>{{$mylist}}</li>
      @endif
   @endforeach
@endif