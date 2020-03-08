<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article - Knowledge Base HTML Template</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
</head>

<body>

    <nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-background-primary uk-light uk-margin-remove-bottom">
        <div class="uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo uk-text-uppercase" href="index.html"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> Knowledge</a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-text-uppercase uk-visible@m uk-margin-medium-left">
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="article.html">Article</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="article.html">Scrollspy</a></li>
                                    <li><a href="article-narrow.html">Narrow</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="components.html">Components</a></li>
                    </ul>
                    <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" uk-navbar-toggle-icon uk-toggle></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="uk-section section-sub-nav uk-padding-remove">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-2-3@m">
                    <ul class="uk-breadcrumb uk-visible@m">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="category.html">Administration</a></li>
                        <li><span>How to setup payment gateways</span></li>
                    </ul>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-margin">
                        <form class="uk-search uk-search-default">
                            <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                            <input id="autocomplete" class="uk-search-input" type="search" autocomplete="off" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="border-top"></div>
        </div>
    </div>

    <div class="uk-section uk-section-small uk-padding-remove-bottom section-content">
        <div class="uk-container uk-position-relative">
            <div uk-grid>
                <div class="uk-width-3-4@m">
                    <article class="uk-article">
                        <header>
                            <h1 class="uk-article-title uk-margin-bottom">How to setup payment gateways</h1>
                            <div class="author-box uk-card">
                                <div class="uk-card-header uk-padding-remove">
                                    <div class="uk-grid-small uk-flex-middle  uk-position-relative" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-border-circle" width="40" height="40" src="assets/img/joshua.jpg">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h5 class="uk-card-title">Joshua Birdman</h5>
                                            <p class="uk-article-meta uk-margin-remove-top">Created: Sep 06, 2016 - Updated: Apr 26, 2017</p>
                                        </div>
                                        <a href="#" class="uk-button uk-button-outline-primary uk-button-small uk-visible@m">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="entry-content uk-margin-medium-top">
                            <p class="uk-text-lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat occaecat cupidatat culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h2 id="animation-repeat">Instalation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h2 id="animation-delay">Quick Setup</h2>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillriatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h4>Change your password</h4>
                            <ol class="ol-pretty uk-list-large">
                                <li>Click your team name to open the Team Menu.</li>
                                <li>Select Profile & account. This will open your profile on the right side of your screen.</li>
                                <li>Under your name, click Account Settings. This will open your Account settings.</li>
                                <li>By Password, click expand.</li>
                                <li>Enter your Current Password, and then a New Password.</li>
                                <li>Click Save Password.</li>
                            </ol>
                            <h2 id="animation-fade">Advanced Options</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h2 id="animation-scale-up">Content Import</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="uk-alert-primary" uk-alert>
                                <p>If you've followed the steps above, but have yet to receive a password reset email, please check all tabs, folders, and spam filters in your inbox.</p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="article-votes uk-text-center uk-margin-medium-top uk-padding uk-padding-remove-horizontal border-bottom border-top">
                            <h3>Was this article helpful?</h3>
                            <a href="#" class="vote uk-button uk-button-outline-primary"><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 0.8"></span>Yes</a>
                            <a href="#" class="vote uk-button uk-button-outline-primary uk-margin-small-left"><span class="uk-margin-small-right uk-inline" uk-icon="icon: close; ratio: 0.8"></span>No</a>
                            <p class="vote-thanks uk-margin-remove">Thanks so much for your feedback!</p>
                            <p class="vote-question text-dark">Have more questions? <a href="#">Submit a request</a></p>
                        </div>
                        <div class="uk-child-width-1-2@s text-dark article-related uk-margin-medium-top" uk-grid>
                            <div>
                                <h3>Recently Viewed Articles</h3>
                                <ul class="uk-list uk-list-large">
                                    <li><a href="#">Sed ut perspiciatis unde omnis iste laudantium, totam rem aperiam</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, elabore et dolore magna aliqua</a></li>
                                    <li><a href="#">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3>Related Articles</h3>
                                <ul class="uk-list uk-list-large">
                                    <li><a href="#">Apsum dolor sit amet, consectet tempor incididunt ut dolore magna aliqua</a></li>
                                    <li><a href="#">Hadem sit amet, consectetur adipiscing elit, sed do eiusmod</a></li>
                                    <li><a href="#">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-margin-medium-top border-top padding-top">
                            <h3 class="uk-margin-medium-bottom">Comments</h3>
                            <ul class="uk-comment-list">
                                <li>
                                    <article class="uk-comment uk-visible-toggle">
                                        <header class="uk-comment-header uk-position-relative">
                                            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-comment-avatar uk-border-circle" src="assets/img/ashley.jpg" width="70" height="70" alt="">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Ashley Winslow</a></h4>
                                                    <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                </div>
                                            </div>
                                            <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                                        </header>
                                        <div class="uk-comment-body">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                                                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </article>
                                    <ul>
                                        <li>
                                            <article class="uk-comment uk-comment-primary uk-visible-toggle">
                                                <header class="uk-comment-header uk-position-relative">
                                                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <img class="uk-comment-avatar uk-border-circle" src="assets/img/joshua.jpg" width="70" height="70" alt="">
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Joshua Birdman</a></h4>
                                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                                                </header>
                                                <div class="uk-comment-body">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                                                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="uk-comment uk-visible-toggle">
                                                <header class="uk-comment-header uk-position-relative">
                                                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <img class="uk-comment-avatar uk-border-circle" src="assets/img/ashley.jpg" width="70" height="70" alt="">
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Ashley Winslow</a></h4>
                                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                                                </header>
                                                <div class="uk-comment-body">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                                                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="reply uk-margin-medium-top border-top padding-top">
                            <h3 class="uk-margin-medium-bottom">Leave a Comment</h3>
                            <form class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-2@s">
                                    <input class="uk-input" type="text" placeholder="Name">
                                </div>
                                <div class="uk-width-1-2@s">
                                    <input class="uk-input" type="email" placeholder="Email">
                                </div>
                                <div class="uk-width-1-1">
                                    <textarea class="uk-textarea" rows="5" placeholder="Comment"></textarea>
                                </div>
                                <div class="uk-width-1-1">
                                    <button class="uk-button uk-button-primary uk-width-1-1 uk-width-auto@s">Submit</button>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
                <div class="uk-width-1-4@m">
                    <div uk-sticky="offset: 100" class="scrollspy uk-sticky uk-active uk-card uk-card-small uk-card-body uk-padding-remove-top uk-visible@m">
                        <h3 class="uk-card-title">Table of Contents</h3>
                        <ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true; offset: 30">
                            <li><a href="#animation-repeat">Instalation</a></li>
                            <li><a href="#animation-delay">Quick Setup</a></li>
                            <li><a href="#animation-fade">Advanced Options</a></li>
                            <li><a href="#animation-scale-up">Content Import</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="uk-section uk-margin-large-top uk-section-xsmall uk-text-small uk-text-muted border-top">
        <div class="uk-container">
            <div class="uk-child-width-1-2@m uk-text-center" uk-grid>
                <div class="uk-text-right@m">
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: facebook"></a>
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: google"></a>
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: vimeo"></a>
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: instagram"></a>
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: twitter"></a>
                    <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: youtube"></a>
                </div>
                <div class="uk-flex-first@m uk-text-left@m">
                    <p class="uk-text-small">Copyright 2017 Powered by Code Love</p>
                </div>
            </div>
        </div>
    </footer>

    <div id="offcanvas" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">
            <a class="uk-margin-small-bottom uk-logo uk-text-uppercase" href="index.html"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> Knowledge</a>
            <ul class="uk-nav uk-nav-default uk-text-uppercase">
                <li><a href="index.html">Home</a></li>
                <li class="uk-parent">
                    <a href="article.html">Article</a>
                    <ul class="uk-nav-sub">
                        <li><a href="article.html">Scrollspy</a></li>
                        <li><a href="article-narrow.html">Narrow</a></li>
                    </ul>
                </li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="components.html">Components</a></li>
            </ul>
            <a href="contact.html" class="uk-button uk-button-small uk-button-default uk-width-1-1 uk-margin">Support</a>
            <div class="uk-width-auto uk-text-center">
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: facebook"></a>
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: google"></a>
                <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="icon: twitter"></a>
            </div>            
        </div>
    </div>

</body>

</html>