@extends('top')
@section('hero')
<div class="section-hero uk-background-blend-color-burn uk-background-top-center uk-background-cover uk-section-large1 cta" style="background-image: url(assets/img/city.jpg)" >
    <nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-light">
@endsection


@section('corpo')
    
<div class="uk-container hero">
    <h1 class="uk-heading-primary uk-text-center uk-margin-large-top uk-light">Create a Knowledge Base with Ease</h1>
    <p class="uk-text-lead uk-text-center uk-light">Lead volutpat nibh ligula gravida. Magna auctor eget venenatis phasellus luctus sodales pulvinar</p>
    <div class="uk-flex uk-flex-center uk-inliner">
        <form class="uk-margin-medium-top uk-margin-xlarge-bottom uk-search uk-search-default">
            <a href="" class="uk-search-icon-flip" uk-search-icon></a>
            <input id="autocomplete" class="uk-search-input uk-form-large" type="search" autocomplete="off" name="s" placeholder="Enter search term here">
        </form>
    </div>
</div>
</div>

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-3@s uk-grid-match uk-grid-medium uk-text-center" uk-grid>
            @section('Modulos')
            
            @show
        </div>
    </div>
</div>

<div class="uk-section uk-padding-remove-top uk-padding-remove-bottom">
    <div class="uk-container">
        <hr>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s text-dark" uk-grid>
            <div>
                <h3>Popular Articles</h3>
                <ul class="uk-list uk-list-large uk-list-divider link-icon-right">
                    @section('articlespop')
                    
                    @show
                </ul>
            </div>
            <div>
                <h3>Recent Articles</h3>
                <ul class="uk-list uk-list-large uk-list-divider link-icon-right">
                    @section('articlesnew')               
                    @show
                </ul>
            </div>
        </div>
    </div>
    </div>
    

</body>

</html>
@endsection