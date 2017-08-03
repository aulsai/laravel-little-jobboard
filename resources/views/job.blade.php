@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Job List</div>

                <div class="panel-body">
                  <a class="btn btn-primary pull-right" href="{{ route('job.new') }}">New Job</a>
                </div>
                  
                  <table class="table table-hover">
                    <thead>
                      <th>
                        #
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Created Date
                      </th>
                    </thead>
                    <tbody>
                      @foreach($jobs as $job)
                      <tr>
                        <td>
                          {{ $loop->index + 1 }}
                        </td>
                        <td>
                          {{ $job->title }}
                        </td>
                        <td>
                          {{ $job->description }}
                        </td>
                        <td>
                          {{ $job->created_at->format('H:i m/d/Y') }}
                        </td>
                      </tr>
                      @endforeach 
                    </tbody>
                    
                  </table>


                
            </div>
        </div>
    </div>
</div>
@endsection
