@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-19/s150x150/118602155_129295715197702_2732493355555099320_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_ohc=0QYeM7wRSJsAX-d_CQW&_nc_tp=25&oh=b1d274f2a02f78898e2c196682276e40&oe=5FDCED5C">

        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->name}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>6</strong> posts</div>
                <div class="pr-5"><strong>154</strong> followers</div>
                <div class="pr-5"><strong>347</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">PuchkiiGuide.com</div>
            <div>Soon to be CEH(certified ethical hacker)</div>
            <div><a href="#">www.puchkiiguide.com</a> </div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100" src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s750x750/93598301_221195455880189_4270396071621020373_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=105&_nc_ohc=3TqCCRBB9HUAX_4SCCd&_nc_tp=24&oh=98643ed1782b39a1fad05e704df1982c&oe=5FDD72B6">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/e35/45544726_353246298763401_2801513195881589172_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=109&_nc_ohc=1ehHaMCUefUAX8PrrW-&tp=18&oh=2b4146017e358dca39a54b9721581360&oe=5FDC0EE1">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-ams4-1.cdninstagram.com/v/t51.2885-15/e35/71198050_2404109149624415_1960679727985073945_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com&_nc_cat=111&_nc_ohc=wVnKnk1_0bYAX80cWum&tp=18&oh=c348faa5bcbe4081b17d42d1bde0f083&oe=5FDB72EC">
        </div>
    </div>
</div>
@endsection
