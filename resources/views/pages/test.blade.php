@extends('layout.master')
@section('Noidung')
<h2>Laravel</h2>
@if($chao!="")
{{$chao}}
@else
{{"Khong có giá trị"}}
@endif
<br>
<!-- cách 2  -->
{{$chao or "Không có biến chào"}}
<br>
<!-- forelse -->
<?php $mang=array("abc","khj","hihi","huy"); ?>
@forelse($mang as $value)
      @continue($value=="abc")   <!-- bỏ qua vòng lặp có giá trị là abc -->
      @break($value=="hihi")          <!-- đến giá trị là hihi thì thoát khỏi vòng lặp-->
       {{$value}}           <!--  nếu mảng có gt thì in ra -->
@empty
        {{"mảng rỗng rồi"}} 
@endforelse
<!-- vòng for -->
@for($i=1; $i<10; $i++)
{{$i." "}}
@endfor

@endsection