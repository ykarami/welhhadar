@extends('layouts.master')

@section('main')

<main class="unit-main">
    <div class="unit-container">
        @if (count($errors))
        <div class="error">
          <ul>
            @foreach ($errors->all() as $message)
            <li>{{$message}}</li>
            @endforeach
          </ul>
        </div>
        @endif 
        <div class="title">New Unit</div>
        <div class="content">
          <form action="{{url('unit/'.$unit->id)}}" method="post">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
            <div class="unit-details">
              <div class="input-box">
                <span class="details">Unit name</span>
                <input type="text" name="unitName"  value="{{$unit->nomUnit}}">
              </div>
              <div class="input-box">
                <span class="details">Company</span>
                <input type="text" name="company" value="{{$unit->company}}">
              </div>
              <div class="input-box">
                <span class="details">Country</span>
                <input type="text" name="country" value="{{$unit->country}}">
              </div>
              <div class="input-box">
                <span class="details">Well</span>
                <input type="text" name="well" value="{{$unit->activeWell}}">
              </div>
              <div class="input-box">
                <span class="details">Hasp ID</span>
                <input type="text" name="haspId"value="{{$unit->haspId}}">
              </div>
              <div class="input-box">
                <span class="details">Destination</span>
                <select name="destination" >
                  <option value="EUR-01" @if ($unit->destination=="EUR-01") {{ "selected" }} @endif>EUR-01</option>
                  <option value="EUR-02" @if ($unit->destination=="EUR-02") {{ "selected" }} @endif>EUR-02</option>
                  <option value="AFR-01" @if ($unit->destination=="AFR-01") {{ "selected" }} @endif>AFR-01</option>
                  <option value="SAM-01" @if ($unit->destination=="SAM-01") {{ "selected" }} @endif>SAM-01</option>
                  <option value="ASI-01" @if ($unit->destination=="ASI-01") {{ "selected" }} @endif>ASI-01</option>
                  <option value="CHEVRON-01" @if ($unit->destination=="CHEVRON-01") {{ "selected" }} @endif>CHEVRON-01</option>
                  <option value="ENI-01" @if ($unit->destination=="ENI-01") {{ "selected" }} @endif>ENI-01</option>
                </select>
              </div>
              <div class="input-box">
                <span class="details">status</span>
                <select name="status" >
                  <option value="Started" @if ($unit->status=="Started") {{ "selected"}}@endif>Started</option>
                  <option value="Rigdown" @if ($unit->status=="Rigdown") {{ "selected" }}@endif>Rigdown</option>
                  <option value="Ended" @if ($unit->status=="Ended") {{ "selected" }}@endif>Ended</option>
                </select>
              </div>
              <div class="input-box">
                <span class="details">Job profile</span>
                <select name="jobProfile" id="">
                  <option value="Normale" @if ($unit->type=="Normale") {{ "selected" }}@endif>Normale</option>
                  <option value="Blackbox" @if ($unit->type=="Blackbox") {{ "selected" }}@endif>Blackbox</option>
                  <option value="WITSML" @if ($unit->type=="WITSML") {{ "selected" }}@endif>WITSML</option>
                  <option value="Trial" @if ($unit->type=="Trial") {{ "selected"}}@endif>Trial</option>
                </select>
              </div>
            </div>
            
            <div class="button">
              <input type="submit" value="Update">
            </div>
          </form>
        </div>
      </div>    
</main>
@endsection