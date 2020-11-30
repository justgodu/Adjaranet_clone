@section('search')
    <div class="search-bar-container">
<div class="search-bar-inner">
    <form class="search-bar-input-container d-flex" action="{{url('movies', ['filter' => 'search'])}}" method="GET">
        <div class="w-100">
            <input id="search" name="query" class="search-bar" placeholder="ძიება..." onkeyup="getInfo(this.value)">
        </div>
        <label for="search" aria-label="ძიება"
               class="sc-1x419r9-11 lSYIm">
            <svg fill="none" viewBox="0 0 20 20" width="20" class="svg-icon svg-icon--search">
                <path fill="#C4C4C4"
                      d="M18.293 19.707l-5.387-5.387A7.92268 7.92268 0 0 1 8 16a8.00035 8.00035 0 0 1-4.44456-1.3482 8.00036 8.00036 0 0 1-2.94647-3.5903A8 8 0 0 1 11.0615.60897a8.00036 8.00036 0 0 1 3.5903 2.94647A8.00035 8.00035 0 0 1 16 8a7.92184 7.92184 0 0 1-1.68 4.906l5.387 5.386-1.414 1.414v.001zM8 2a6.00002 6.00002 0 0 0-5.88471 7.17055 5.99996 5.99996 0 0 0 1.64207 3.07205 5.99939 5.99939 0 0 0 3.0721 1.6421 6.00028 6.00028 0 0 0 3.46664-.3414 5.99968 5.99968 0 0 0 2.6927-2.2099A5.99986 5.99986 0 0 0 14 8c-.0018-1.59073-.6346-3.11577-1.7594-4.24059C11.1158 2.63459 9.59073 2.00186 8 2z"></path>
            </svg>
        </label>
    </form>
    <div  class="position-absolute top-150 d-block d-none">
        <div id="lifeSearchContainer" class="row">

        </div>
    </div>
</div>

    <script>
        function getInfo(value) {

            $.ajax({
                type:'POST',
                url:'{{url('livesearch')}}',
                data:{"_token": "{{csrf_token()}}",
                    "query": value
                },
                success:function(data) {
                    if(typeof data === "undefined"){
                        return 0;
                    }
                    var html = ""
                    $.each(data, function (k,v){
                        html+="<div class=\"single-movie-card\">" +
                            "                    <a href=\"/movie/" + v.id + "\">" +
                            "                        <img src=\"" + v.poster_url + "\" alt=\"" + v.name + "\">" +
                            "                    </a>" +
                            "                </div>"
                    })
                    $("#lifeSearchContainer").html(html)
                    // $("#lifeSearchContainer").removeClass("d-none")
                    // $("#lifeSearchContainer").addClass("d-block")
                    console.log(data)
                }
            });
        }
    </script>
</div>
@endsection
