
<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('backend.includes.header')

    @include('backend.includes.css')


   
  </head>

  <body>

    @include('backend.includes.menu')

    @include('backend.includes.topbar')

    @include('backend.includes.rightPanel')

 <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <!--- Body Content --->

      @yield('body')

      </div><!-- br-pagebody -->

      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->


     @include('backend.includes.script')

  </body>
</html>
