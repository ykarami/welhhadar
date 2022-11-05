@extends('layouts.master')

@section('main')

<main class="unit-main">
    <div class="unit-container">
        <div class="title">Liste Unit</div>
        <div class="addUnit"><a href=""><span class="material-symbols-sharp">add</span> Add unit </a></div>
            <div class="content">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th><th>Unit name</th><th>Company</th><th>Counthy</th><th>Destination</th><th>Active Well</th><th>HaspId</th><th>Status</th><th>Type</th><th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($units as $unit)
                        <tr>
                            <td>{{$unit->id}}</td>
                            <td>{{$unit->nomUnit}}</td>
                            <td>{{$unit->company}}</td>
                            <td>{{$unit->country}}</td>
                            <td>{{$unit->destination}}</td>
                            <td>{{$unit->activeWell}}</td>
                            <td>{{$unit->haspId}}</td>
                            <td>{{$unit->status}}</td>
                            <td>{{$unit->type}}</td>
                            <td>
                                <a href="" ><span class="material-symbols-sharp edit">edit_note</span></a>
                                <a href=""><span class="material-symbols-sharp delete">delete</span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>          
    </div>    
</main>
@endsection