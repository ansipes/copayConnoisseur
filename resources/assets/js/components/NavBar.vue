<template>

  <div>




  <div uk-sticky>
    <nav class="uk-navbar-container" uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <li class="uk-margin-left"><a href="">Copay Connoisseur</a></li>
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
                <a href="https://ansipes.gitbooks.io/simplyhealth-api/content/" target="_blank" ><span uk-icon="icon: album; ratio: 1.5"></span></a>
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
</div>

</template>

<script>


</script>

<style>

  .uk-offcanvas-bar {
    width: 150px;
  }

</style>
