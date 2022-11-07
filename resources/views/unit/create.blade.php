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
          <form action="{{url('unit')}}" method="post">
            {{csrf_field()}}
            <div class="unit-details">
              <div class="input-box">
                <span class="details">Unit name</span>
                <input type="text" name="unitName" value="{{old('unitName')}}">
              </div>"
              <div class="input-box">
                <span class="details">Company</span>
                <input type="text" name="company" value="{{old('company')}}">
              </div>
              <div class="input-box">
                <span class="details">Country</span>
                <input type="text" name="country" value="{{old('country')}}">
              </div>
              <div class="input-box">
                <span class="details">Well</span>
                <input type="text" name="well" value="{{old('well')}}">
              </div>
              <div class="input-box">
                <span class="details">Hasp ID</span>
                <input type="text" name="haspId" value="{{old('haspId')}}">
              </div>
              <div class="input-box">
                <span class="details">Destination</span>
                <select name="destination" >
                  <option value="EUR-01">EUR-01</option>
                  <option value="EUR-02<">EUR-02</option>
                  <option value="AFR-01">AFR-01</option>
                  <option value="SAM-01">SAM-01</option>
                  <option value="ASI-01">ASI-01</option>
                  <option value="CHEVRON-01">CHEVRON-01</option>
                  <option value="ENI-01<">ENI-01</option>
                </select>
              </div>
              <div class="input-box">
                <span class="details">status</span>
                <select name="status" >
                  <option value="Started">Started</option>
                  <option value="Rigdown">Rigdown</option>
                  <option value="Ended">Ended</option>
                </select>
              </div>
              <div class="input-box">
                <span class="details">Job profile</span>
                <select name="jobProfile" id="">
                  <option value="Normale">Normale</option>
                  <option value="Blackbox">Blackbox</option>
                  <option value="WITSML">WITSML</option>
                  <option value="Trial">Trial</option>
                </select>
              </div>
            </div>
            
            <div class="button">
              <input type="submit" value="Save">
            </div>
          </form>
        </div>
      </div>    
</main>
@endsection