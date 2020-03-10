<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frequently Asked Questions - Knowledge Base HTML Template</title>
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
                        <li><span href="">Frequently Asked Questions</span></li>
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
        <div class="uk-container">
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-1-4@m uk-visible@m text-dark sidebar">
                    <div uk-sticky="offset: 50">
                        <h3>Table of Contents</h3>
                        <ul class="uk-list uk-list-large">
                            <li><a href="#target1" uk-scroll="offset: 50">General Options</a></li>
                            <li><a href="#target2" uk-scroll="offset: 50">User Account</a></li>
                            <li><a href="#target3" uk-scroll="offset: 50">Shipping Methods</a></li>
                            <li><a href="#target4" uk-scroll="offset: 50">Troubleshooting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-3-4@m">
                    <h1>Frequently Asked Questions</h1>
                    <p class="uk-text-lead uk-margin-large-bottom">Here are answers to most common questions. Can't find an answer? Call us!</p>

                    <h2 id="target1">General Options</h2>
                    <ul class="list-faq" uk-accordion="multiple: true">
                        <li>
                            <h3 class="uk-accordion-title">Transfer account ownership</h3>
                            <div class="uk-accordion-content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure eprehenderit in voluptate velit esse cillum dolore dolor reprehenderit.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Shipping options page settings</h3>
                            <div class="uk-accordion-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eeprehenderit in voluptate velit esse cillum doloreu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Setting up product attributes</h3>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor eprehenderit in voluptate velit esse cillum dolore incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Downloadable product</h3>
                            <div class="uk-accordion-content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure eprehenderit in voluptate velit esse cillum dolore dolor reprehenderit.</p>
                            </div>
                        </li>
                    </ul>

                    <h2 id="target2">User Account</h2>
                    <ul class="list-faq" uk-accordion="multiple: true">
                        <li>
                            <h3 class="uk-accordion-title">Manage payment settings and invoices</h3>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor eprehenderit in voluptate velit esse cillum dolore incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Pricing and plans guide</h3>
                            <div class="uk-accordion-content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure eprehenderit in voluptate velit esse cillum dolore dolor reprehenderit.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Setting your company office hours</h3>
                            <div class="uk-accordion-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eeprehenderit in voluptate velit esse cillum doloreu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                        </li>
                    </ul>

                    <h2 id="target3">Shipping Methods</h2>
                    <ul class="list-faq" uk-accordion="multiple: true">
                        <li>
                            <h3 class="uk-accordion-title">Shipping components</h3>
                            <div class="uk-accordion-content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure eprehenderit in voluptate velit esse cillum dolore dolor reprehenderit.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Shipping options page settings</h3>
                            <div class="uk-accordion-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eeprehenderit in voluptate velit esse cillum doloreu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Customizing Forms</h3>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor eprehenderit in voluptate velit esse cillum dolore incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Increasing server memory</h3>
                            <div class="uk-accordion-content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure eprehenderit in voluptate velit esse cillum dolore dolor reprehenderit.</p>
                            </div>
                        </li>
                    </ul>

                    <h2 id="target4">Troubleshooting</h2>
                    <ul class="list-faq" uk-accordion="multiple: true">
                        <li>
                            <h3 class="uk-accordion-title">Manage user comments</h3>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor eprehenderit in voluptate velit esse cillum dolore incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Multiple installs on one domain</h3>
                            <div class="uk-accordion-content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure eprehenderit in voluptate velit esse cillum dolore dolor reprehenderit.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">Fully Responsive Design</h3>
                            <div class="uk-accordion-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eeprehenderit in voluptate velit esse cillum doloreu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                        </li>
                    </ul>

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