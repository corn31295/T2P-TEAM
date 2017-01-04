<div id="categorymenu">
      <nav class="subnav">
        <ul class="nav-pills categorymenu">
          <li><a href="{{ url('/')}}">Trang chủ</a>
          <?php 
            $menu_cap_1 = DB::table('danh_mucs')->where('parent_id', 0)->get();
          ?>
          @foreach($menu_cap_1 as $item_cap_1)
          <li><a  href="{!! URL('loai-san-pham', [$item_cap_1->id, $item_cap_1->alias]) !!}">{!! $item_cap_1->name !!}</a>
            <div>
              <ul>
                <?php 
                  $menu_cap_2 = DB::table('danh_mucs')->where('parent_id', $item_cap_1->id)->get();
                ?>
                @foreach($menu_cap_2 as $item_cap_2)
                <li><a href="{!! URL('loai-san-pham', [$item_cap_2->id, $item_cap_2->alias]) !!}">{!! $item_cap_2->name !!}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </li>
          @endforeach
          <li><a href="{{url('lien-he')}}">Liên hệ</a>    
        </ul>
      </nav>
    </div>