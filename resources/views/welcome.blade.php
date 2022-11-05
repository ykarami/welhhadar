@extends('layouts.master')


@section('main')

<main>
    <h1>Dashboard</h1>
    <div>
        <input type="date" class="date">
    </div>
    <div class="insights">
        <div class="newjob">
            <span class="material-icons-sharp">switch_access_shortcut_add</span>
            <div class="middle">
                <div class="left">                   
                    <h2>New Job</h2>
                </div>
                <div class="progress">                     
                    <div class="number">
                        <h1>13</h1>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
        </div>

        <div class="jobrestart">
            <span class="material-icons-sharp">restart_alt</span>
            <div class="middle">
                <div class="left">
                    <h2>Job Restart</h2>
                </div>
                <div class="progress">
                    <div class="number">
                        <h1>10</h1>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
        </div>

        <div class="newwell">
            <span class="material-icons-sharp">add_location</span>
            <div class="middle">
                <div class="left">
                    <h2>New Well</h2>
                </div>
                <div class="progress">
                    <div class="number">
                        <h1>9</h1>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
        </div>

        <div class="rigdown">
            <span class="material-icons-sharp">trending_down</span>
            <div class="middle">
                <div class="left">
                    <h2>Rig Down</h2>
                </div>
                <div class="progress">
                    <div class="number">
                        <h1>6</h1>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
        </div>
    </div>
    
</main>
    
@endsection