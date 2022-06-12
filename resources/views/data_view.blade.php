@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-heading">
            <h6>
                Search Result is :
                <a href="{{ route('home') }}" class="float-end">Searh Another</a>
            </h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th>State</th>
                </thead>
                <tbody>
                    @foreach ($companyInfos as $companyInfo)
                    <tr>
                        <td>{{ $companyInfo->name }}</td>
                        <td>{{ $companyInfo->email }}</td>
                        <td>{{ $companyInfo->address }}</td>
                        <td>{{ $companyInfo->state->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
