<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/css/uikit.min.css" />

        <title>Style Guide</title>

        <style>
          .lead {
            font-weight: 600;
          }
          .light {
            font-weight: 100;
          }
          select {
            width: 100%
          }
          input {
            width: 100%;
            border-radius: 10px;
          }
          textarea {
            width: 100%;
            height: 200px;
            border-radius: 10px;
          }
        </style>
    </head>
    <body>

        <div uk-sticky>
          <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
              <ul class="uk-navbar-nav">
                <li class="uk-margin-left"><a href="/">Copay Connoisseur</a></li>
              </ul>
            </div>
            <div class="uk-navbar-right">
              <ul class="uk-navbar-nav">
                <li class="uk-margin-right"><a href="" uk-icon="icon: menu" uk-toggle="target: #offcanvas-nav-primary"></a></li>
              </ul>
            </div>
          </nav>

          <div class="uk-offcanvas-content">
            <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
              <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                  <li class="">
                    <div title="Add" uk-tooltip>
                      <a uk-toggle="target: #my-id" href="/" ><span uk-icon="icon: plus-circle; ratio: 1.5"></span></a>
                    </div>
                    <br />
                    <br />
                    <br />
                  </li>
                  <li class="">
                    <div title="GitHub" uk-tooltip>
                      <a href="https://github.com/ansipes/copayConnoisseur" target="_blank"><span uk-icon="icon: github; ratio: 1.5"></span></a>
                    </div>
                    <br />
                    <br />
                    <br />
                  </li>
                  <li class="">
                    <div title="GitBook" uk-tooltip>
                      <a href="https://ansipes.gitbooks.io/simplyhealth-api/content/" target="_blank"><span uk-icon="icon: album; ratio: 1.5"></span></a>
                    </div>
                    <br />
                    <br />
                    <br />
                  </li>
                  <li class="">
                    <div title="Style" uk-tooltip>
                      <a href="/style" ><span uk-icon="icon: paint-bucket; ratio: 1.5"></span></a>
                    </div>
                    <br />
                    <br />
                    <br />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


<div class="uk-container" style="background-color: #a9cef4">

  <div class="uk-grid uk-grid-match">

    <div class="uk-width-1-3@m uk-margin-top uk-margin-bottom">
      <div class="uk-card uk-card-default uk-card-hover" style="border-radius: 25px;">
        <div class="uk-card-header">
          <div class="uk-grid-small uk-flex-middle uk-grid uk-padding-collapse">
            <h3 class="uk-card-title uk-margin-remove-bottom">Color</h3>
          </div>
        </div>
        <div class="uk-card-body ">
          <div class="uk-grid">
                    <div class="uk-width-1-2">
                      <div title="#fde787" uk-tooltip>
                      <div style="margin: 15px; width: 100px; height: 100px;	background: #fde787; -moz-border-radius: 50px; -webkit-border-radius: 50px; border-radius: 50px;  border:1px solid #555B6E;"></div>
                      </div>
                    </div>

                    <div class="uk-width-1-2">
                      <div title="#f6a79d" uk-tooltip>
                      <div style="margin: 15px; width: 100px; height: 100px;	background: #f6a79d; -moz-border-radius: 50px; -webkit-border-radius: 50px; border-radius: 50px; border:1px solid #555B6E;"></div>
                    </div>
                    </div>

                    <div class="uk-width-1-2">
                      <div title="#0676bc" uk-tooltip>
                      <div style="margin: 15px; width: 100px; height: 100px;	background: #0676bc; -moz-border-radius: 50px; -webkit-border-radius: 50px; border-radius: 50px; border:1px solid #555B6E;"></div>
                    </div>
                    </div>

                    <div class="uk-width-1-2">
                      <div title="#a9cef4" uk-tooltip>
                      <div style="margin: 15px; width: 100px; height: 100px;	background: #a9cef4; -moz-border-radius: 50px; -webkit-border-radius: 50px; border-radius: 50px; border:1px solid #555B6E;"></div>
                    </div>
                    </div>

                    <div class="uk-width-1-2">
                      <div title="#f8f8f8" uk-tooltip>
                      <div style="margin: 15px; width: 100px; height: 100px;	background: #f8f8f8; -moz-border-radius: 50px; -webkit-border-radius: 50px; border-radius: 50px; border:1px solid #555B6E;"></div>
                    </div>
                    </div>

                    <div class="uk-width-1-2">
                      <div title="#ffffff" uk-tooltip>
                      <div style="margin: 15px; width: 100px; height: 100px;	background: #ffffff; -moz-border-radius: 50px; -webkit-border-radius: 50px; border-radius: 50px; border:1px solid #555B6E;"></div>
                    </div>
                    </div>
            </div>
        </div>
      </div>
    </div>

    <div class="uk-width-1-3@m uk-margin-top uk-margin-bottom">
      <div class="uk-card uk-card-default uk-card-hover" style="border-radius: 25px; background: #fde787;">
        <div class="uk-card-header">
          <div class="uk-grid-small uk-flex-middle uk-grid uk-padding-collapse">
            <h3 class="uk-card-title uk-margin-remove-bottom">Headers</h3>
          </div>
        </div>
        <div class="uk-card-body" >
          <h1>Heading One</h1>
          <h2>Heading Two</h2>
          <h3>Heading Three</h3>
          <h4>Heading Four</h4>
          <h5>Heading Five</h5>
          <h6>Heading Six</h6>
        </div>
      </div>
    </div>

    <div class="uk-width-1-3@m uk-margin-top uk-margin-bottom">
      <div class="uk-card uk-card-default uk-card-hover" style="border-radius: 25px;">
        <div class="uk-card-header">
          <div class="uk-grid-small uk-flex-middle uk-grid uk-padding-collapse">
            <h3 class="uk-card-title uk-margin-remove-bottom">Paragraphs</h3>
          </div>
        </div>
        <div class="uk-card-body ">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>


    <div class="uk-width-1-3@m uk-margin-top uk-margin-bottom">
      <div class="uk-card uk-card-default uk-card-hover" style="border-radius: 25px; background: #0676bc;">
        <div class="uk-card-header">
          <div class="uk-grid-small uk-flex-middle uk-grid uk-padding-collapse">
            <h3 class="uk-card-title uk-margin-remove-bottom">Input</h3>
          </div>
        </div>
        <div class="uk-card-body ">

            <select>
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
            <br />
            <br />
            <input type="text"/>
            <br />
            <br />
            <textarea></textarea>

        </div>
      </div>
    </div>

    <div class="uk-width-1-3@m uk-margin-top uk-margin-bottom">
      <div class="uk-card uk-card-default uk-card-hover" style="border-radius: 25px;">
        <div class="uk-card-header">
          <div class="uk-grid-small uk-flex-middle uk-grid uk-padding-collapse">
            <h3 class="uk-card-title uk-margin-remove-bottom">Buttons</h3>
          </div>
        </div>
        <div class="uk-card-body">
          <a class="uk-button uk-button-danger uk-button-large uk-align-center">Button</a><br />
          <a class="uk-button uk-button-primary uk-button-medium uk-align-center" >Button</a><br />
          <a class="uk-button uk-button-secondary uk-button-small uk-align-center">Button</a>
        </div>
      </div>
    </div>

    <div class="uk-width-1-3@m uk-margin-top uk-margin-bottom">
      <div class="uk-card uk-card-default uk-card-hover" style="border-radius: 25px; background: #f6a79d;">
        <div class="uk-card-header">
          <div class="uk-grid-small uk-flex-middle uk-grid uk-padding-collapse">
            <h3 class="uk-card-title uk-margin-remove-bottom">Paragraphs</h3>
          </div>
        </div>
        <div class="uk-card-body ">

          <ol>
            <li>Item One</li>
            <li>Item Two</li>
            <li>Item Three</li>
          </ol>
          <br />
          <ul>
            <li>Item One</li>
            <li>Item Two</li>
            <li>Item Three</li>
          </ul>

          </div>
      </div>
    </div>


  </div>

</div>



        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="js/bcmath-min.js" type="text/javascript"></script>
        <script src="js/pdf417-min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit-icons.min.js"></script>

    </body>
</html>
