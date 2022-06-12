@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-heading">
            <h2 class="text-center">Multi dropdown select Search</h2>
        </div>
        <div class="card-body">
            <div class="col-md-3 mb-3">
                <select name="country" id="country" class="form-control">
                    <option selected="false">Country</option>
                    @foreach ($countries as $country)
                      <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <select name="state" id="state" class="form-control">
                    <option selected="false">State</option>
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" id="search" name="search" class="btn btn-primary rounded">Search</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
    //__js for drop down dependent select__//
        jQuery(document).ready(function() {
            jQuery('select[name="country"]').on('change', function() {
                var countryID = jQuery(this).val();
                if(countryID){
                    jQuery.ajax({
                        url: '/getStates/' +countryID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            jQuery('select[name="state"]').empty(); //remove last selected items
                            jQuery.each(data, function(key, value) {
                                $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option');
                            });
                        }
                    });
                }
                else{
                    $('select[name="state"]').empty();
                }
            });
        });
    </script>

    <script type="text/javascript">
     //__js for search result__//
     $("#search").on("click", function() {
        var link = document.getElementById("state").value;
        $.ajax({
            url: window.location.href="getData/"+ link
        });
     });
    </script>
@endsection
