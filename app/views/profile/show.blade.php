@extends('layouts.master')
@section('content')
<div class="page-header">
<div class="pull-right">
	<div class="btn-group">
		<a href="{{route('profiles.index')}}" class="btn btn-default">Back</a>
		<a href="{{route('profiles.edit')}}" class="btn btn-default">Edit profile</a>
	</div>
</div>
	<h2>show profile</h2>
</div>
 <!--user detail goes in here-->
 <p class="lead">Firstname{{$profile->Firstname }}</p>
 <p class="lead">Lastname{{$profile->lastname}}</p>
 <p class="lead">PhoneNumber{{$profile->phone}}</p>
 <p class="lead">Photo{{$profile->photo}}</p>
 <p class="lead">Curriculumn V{{$profile->resume}}</p>
 <p class="lead">Nickname{{$profile->nickname}}</p>
@stop