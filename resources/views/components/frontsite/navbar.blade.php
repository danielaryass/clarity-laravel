     <nav class="fh5co-nav" role="navigation">
         <div class="container">
             <div class="row">
                 <div class="col-md-3 col-xs-2">
                     <div id="fh5co-logo"><a href="/">CLARITY.</a></div>
                 </div>
                 <div class="col-md-6 col-xs-6 text-center menu-1">
                     <ul>
                         <li class="has-dropdown">
                             <a href="{{ route('shop') }}">Produk</a>
                         </li>
                         <li><a href="{{ route('about') }}">About</a></li>
                         <li class="has-dropdown">
                             <a href="#">Store</a>
                             <ul class="dropdown">
                                 <li><a href="{{ route('storeonline') }}">Online</a></li>
                                 <li><a href="{{ route('storeoffline') }}"">Offline</a></li>


                             </ul>
                         </li>
                         <li><a href="{{ route('support') }}">Suport</a></li>
                     </ul>
                 </div>
                 <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                     <ul>
                         <li class="search">
                             <div class="input-group">
                                 <input type="text" placeholder="Search..">
                                 <span class="input-group-btn">
                                     <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
                                 </span>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>

         </div>
     </nav>
