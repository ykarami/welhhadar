@extends('layouts.master')

@section('main')

<main class="unit-main">
  
    <div class="unit-container">  
        <div class="title">New Unit</div>
        <div class="content">
          <form action="{{url('unit')}}" method="post">
            {{csrf_field()}}
            <div class="unit-details">
              <div class="input-box @if($errors->get('unitName')) has-error @endif">
                <span class="details">Unit name</span>
                <input type="text" name="unitName" value="{{old('unitName')}}">
                  @if ($errors->get('unitName'))
                    @foreach ($errors->get('unitName') as $message)
                      <ul>
                        <li>{{$message}}</li>
                      </ul>
                    @endforeach
                  @endif
              </div>"
              <div class="input-box @if($errors->get('company')) has-error @endif">
                <span class="details">Company</span>
                <input type="text" name="company" value="{{old('company')}}">
                  @if ($errors->get('company'))
                      @foreach ($errors->get('company') as $message)
                        <ul>
                          <li>{{$message}}</li>
                        </ul>
                      @endforeach
                  @endif
              </div>
              <div class="input-box @if($errors->get('country')) has-error @endif">
                <span class="details">Country</span>
                <input type="text" name="country" value="{{old('country')}}">
                  @if ($errors->get('country'))
                      @foreach ($errors->get('country') as $message)
                        <ul>
                          <li>{{$message}}</li>
                        </ul>
                      @endforeach
                  @endif
              </div>
              <div class="input-box @if($errors->get('well')) has-error @endif">
                <span class="details">Well</span>
                <input type="text" name="well" value="{{old('well')}}">
                  @if ($errors->get('well'))
                      @foreach ($errors->get('well') as $message)
                        <ul>
                          <li>{{$message}}</li>
                        </ul>
                      @endforeach
                  @endif
              </div>
              <div class="input-box @if($errors->get('haspId')) has-error @endif">
                <span class="details">Hasp ID</span>
                <input type="text" name="haspId" value="{{old('haspId')}}">
                  @if ($errors->get('haspId'))
                      @foreach ($errors->get('haspId') as $message)
                        <ul>
                          <li>{{$message}}</li>
                        </ul>
                      @endforeach
                  @endif
              </div>
              <div class="input-box @if($errors->get('destination')) has-error @endif">
                <span class="details">Destination</span>
                <select name="destination" >
                  <option value="" >Select destination</option>
                  <option value="EUR-01" >EUR-01</option>
                  <option value="EUR-02">EUR-02</option>
                  <option value="AFR-01">AFR-01</option>
                  <option value="SAM-01">SAM-01</option>
                  <option value="ASI-01">ASI-01</option>
                  <option value="CHEVRON-01">CHEVRON-01</option>
                  <option value="ENI-01<">ENI-01</option>
                </select>
                @if ($errors->get('destination'))
                      @foreach ($errors->get('destination') as $message)
                        <ul>
                          <li>{{$message}}</li>
                        </ul>
                      @endforeach
                  @endif
              </div>
              <div class="input-box @if($errors->get('status')) has-error @endif">
                <span class="details">status</span>
                <select name="status" >
                  <option value="">Select status</option>
                  <option value="Started">Started</option>
                  <option value="Rigdown">Rigdown</option>
                  <option value="Ended">Ended</option>
                </select>
                @if ($errors->get('status'))
                      @foreach ($errors->get('status') as $message)
                        <ul>
                          <li>{{$message}}</li>
                        </ul>
                      @endforeach
                  @endif
              </div>
              <div class="input-box @if($errors->get('jobProfile')) has-error @endif">
                <span class="details">Job profile</span>
                <select name="jobProfile" id="">
                  <option value="">Select Job </option>
                  <option value="Normale">Normale</option>
                  <option value="Blackbox">Blackbox</option>
                  <option value="WITSML">WITSML</option>
                  <option value="Trial">Trial</option>
                </select>
                @if ($errors->get('jobProfile'))
                      @foreach ($errors->get('jobProfile') as $message)
                        <ul>
                          <li>{{$message}}</li>
                        </ul>
                      @endforeach
                  @endif
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