
    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
          </li>

       
          <li class="nav-item"><a href="#"><i class="icon-folder"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Blog Mgmt</span></a>
            <ul class="menu-content">
              <li><a href="<?php echo base_url('admin/blog');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Blog</a>
              </li> 
              <li><a href="<?php echo base_url('admin/blog_list');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">All Added Blog</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="icon-folder"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Property Mgmt</span></a>
            <ul class="menu-content">
              <li><a href="<?php echo base_url('admin/property');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Property</a>
              </li> 
              <li><a href="<?php echo base_url('admin/property_list');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">All Added Properties</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="icon-folder"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Testimonial Mgmt</span></a>
            <ul class="menu-content">
              <li><a href="<?php echo base_url('admin/testimonial');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Testimonial</a>
              </li> 
              <li><a href="<?php echo base_url('admin/testimonial_list');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">All Added Testimonial</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="icon-folder"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Gallery Mgmt</span></a>
            <ul class="menu-content">
              <li><a href="<?php echo base_url('admin/image');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Image</a>
              </li> 
              <li><a href="<?php echo base_url('admin/image_list');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">All Added Image</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="icon-folder"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Media Mgmt</span></a>
            <ul class="menu-content">
              <li><a href="<?php echo base_url('admin/media');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Image</a>
              </li> 
              <li><a href="<?php echo base_url('admin/media_list');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">All Added Media</a></li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url('admin/enquiry');?>"><i class="icon-phone"></i><span data-i18n="nav.dash.main" class="menu-title">Enquiry</span></a>
          </li>
           <li class="nav-item"><a href="#"><i class="icon-folder"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Master</span></a>
            <ul class="menu-content">
              <li><a href="<?php echo base_url('admin/plot_category');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Plot Category</a>
              </li> 
              <li><a href="<?php echo base_url('admin/interest');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Interest (%)</a></li>
               <li><a href="<?php echo base_url('admin/tds');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">TDS Master</a></li>
                 <li><a href="<?php echo base_url('admin/area');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Area</a></li>
                   <li><a href="<?php echo base_url('admin/plc');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add PLC</a></li>
                     <li><a href="<?php echo base_url('admin/basic_price');?>" data-i18n="nav.page_layouts.1_column" class="menu-item">Add Basic Price</a></li>
                     <li><a href="#" data-i18n="nav.page_layouts.1_column" class="menu-item">EMI Calculator</a></li>
                     <li><a href="#" data-i18n="nav.page_layouts.1_column" class="menu-item">Bonanza Master</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
