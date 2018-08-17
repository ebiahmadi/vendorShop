@extends('../app')
@section('title')
    {{ $product[0]->name  }}
@stop
@section('links')
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/productPage/tabs.css" />
    <link rel="stylesheet" type="text/css" href="../css/productPage/tabstyles.css" />
    <script src="../js/productPage/modernizr.custom.js"></script>
@stop
@section('content')

    <section>
        <div class="tabs tabs-style-bar">
            <nav>
                <ul>
                    <li><a href="#pictures"><span>تصاویر</span></a></li>
                    <li><a href="#describtion"><span>توضیحات</span></a></li>
                    <li><a href="#section-bar-3"><span>نظر کاربران</span></a></li>
                </ul>
            </nav>
            <div class="content-wrap">
                <section id="pictures">
                    <h1>PITURES</h1>
                </section>
                <section id="describtion">
                    {{  $product[0]->describtion  }}
                </section>
                <section id="comments">
                    <h1>COMMENTS</h1>
                </section>
            </div><!-- /content -->
        </div><!-- /tabs -->
    </section>

    <script src="../js/productPage/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });

        })();
    </script>
@stop