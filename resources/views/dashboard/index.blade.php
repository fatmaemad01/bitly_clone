@extends('layouts.layout')
@section('title' ,'Your History')

@section ('content')

<div class="row">
    @foreach($urls as $url)
    <div class="col-6">
        <div class="card m-3 p-3">
            <div class="card-body">
                <h5 class="mb-3">{{$url->title}} </h5>
                <p class="card-text">{{$url->basic_url}}</p>
                <h6 style="color: #ff5622;" class="mb-3">Copy Your Short Link </h6>
                <input class="form-control mb-2" value="{{ route('dashboard.redirect', $url->short_url) }}" readonly style="border-radius:10px; background-color:#fff">
                <div class="d-grid gap-2 d-md-flex d-md-flex justify-content-md-between ">
                    <div class="view btn d-flex d-md-flex justify-content-md-end mt-2">
                        <p><span id="count">0</span><i class="fas fa-eye p-2"></i></p>
                    </div>
                    <div class="btn d-md-flex justify-content-md-start">
                        <a href="{{ route('dashboard.redirect', $url->short_url) }}" target="_blank" class="btn btn-primary m-2 border-0" id="incrementButton" style="background-color: #0056b3;">Open Link</a>
                        <form action="{{route('dashboard.destroy', $url->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn  m-2 " style=" color:#fff; background-color: #ff5622;" type="submit"> Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<script>
    const incrementButton = document.getElementById('incrementButton');
    const countElement = document.getElementById('count');
    let count = localStorage.getItem('count') ? parseInt(localStorage.getItem('count')) : 0;
    countElement.textContent = count;
    incrementButton.addEventListener('click', () => {
        count++;
        countElement.textContent = count;
        localStorage.setItem('count', count);
    });
</script>

@endSection