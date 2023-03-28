@extends('layouts.customer')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route ('userhome.index')}}" style="text-decoration: None;">FunOlympic</a></li>
                <li class="breadcrumb-item active" aria-current="page">Live / Video</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">


                <h6><b>Video</b></h6>
                <iframe width="700" height="400" src="https://www.youtube.com/embed/{{ $live->video_url }}"
                    frameborder="0" allowfullscreen>
                </iframe>
                <br>
                <h3><b>{{ $live->title }}</b></h3>

                <h6>{{ $live->description }}</h6>

                <hr>
                <br>


                <form class="my-4">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter your comment">
                    </div>
                    <button type="submit" class="btn btn-primary">Comment submit</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
