@layout('main')

@section('title')
    Documentation Laravel 4 beta - Laravel France
@endsection

@section('content')
    <div id="docs">
      <div class="row">
        <div class="span3">

            @include('docs::guide.selector')

          <div class="well">
            <h3>Laravel 4 beta</h3>
            <strong>Work in progress</strong>
          </div>
        </div>
        <div class="span9">
            <ul class="breadcrumb">
                <li><a title="Retour à la page d'accueil" href="/"><i class="icon-home"></i></a> <span class="divider">/</a></li>
                <li>Documentation & guides</li>
            </ul>

            <div class="well">
                <h2>La documentation</h2>

                <p>
                    <em>Laravel v4 est actuellement en beta, et la documentation évolue énormement. Cependant, nous avons commencé les travaux de traduction et tentons de garder les parties traduites autant à jour que possible.</em>
                </p>

                <p>
                    Une véritable mine d'information, elle contient tout ce qu'il vous faut pour démarrer avec le Framework Laravel. Vous y trouverez toutes les explications nécéssaires, ainsi que des exemples pratiques.
                </p>
            
                <p class="clearfix">
                    <a href="/docs/v4/doc" class="btn btn-primary btn-large pull-right">
                        Accéder à la doc
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection