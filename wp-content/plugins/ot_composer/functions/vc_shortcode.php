<?php 
//Custom Heading
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Heading", 'otvcp-i10n'),
   "base"      => "heading",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type"      => "textarea",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text", 'otvcp-i10n'),
         "param_name"=> "text",
         "value"     => "",
         "description" => esc_html__("Add Text", 'otvcp-i10n')
      ),
      array(
        "type" => "dropdown",
        "holder"    => "div",
        "class"     => "",
        "edit_field_class" => "vc_col-sm-6",
        "heading" => esc_html__('Element Tag', 'otvcp-i10n'),
        "param_name" => "tag",
        "value" => array(
                     esc_html__('Select Tag', 'otvcp-i10n') => '',
                     esc_html__('h1', 'otvcp-i10n') => 'h1',
                     esc_html__('h2', 'otvcp-i10n') => 'h2',
                     esc_html__('h3', 'otvcp-i10n') => 'h3',  
                     esc_html__('h4', 'otvcp-i10n') => 'h4',
                     esc_html__('h5', 'otvcp-i10n') => 'h5',
                     esc_html__('h6', 'otvcp-i10n') => 'h6',  
                     esc_html__('p', 'otvcp-i10n')  => 'p',
                     esc_html__('div', 'otvcp-i10n') => 'div',
                    ),
        "description" => esc_html__("Section Element Tag", 'otvcp-i10n'),      
      ),
      array(
        "type" => "dropdown",
        "holder"    => "div",
        "class"     => "",
        "edit_field_class" => "vc_col-sm-6",
        "heading" => esc_html__('Text Align', 'otvcp-i10n'),
        "param_name" => "align",
        "value" => array( 
                     esc_html__('Select Align', 'otvcp-i10n') => '',  
                     esc_html__('left', 'otvcp-i10n') => 'left',
                     esc_html__('right', 'otvcp-i10n') => 'right',  
                     esc_html__('center', 'otvcp-i10n') => 'center',
                     esc_html__('justify', 'otvcp-i10n') => 'justify',   
                    ),
        "description" => esc_html__("Section Overlay", 'otvcp-i10n'),      
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading"   => esc_html__("Font Size", 'otvcp-i10n'),
         "param_name"=> "size",
         "value"     => "",
         "description" => esc_html__("Font Size", 'otvcp-i10n')
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading"   => esc_html__("Color", 'otvcp-i10n'),
         "param_name"=> "color",
         "value"     => "",
         "description" => esc_html__("Color", 'otvcp-i10n')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Class Extra", 'otvcp-i10n'),
         "param_name"=> "class",
         "value"     => "",
         "description" => esc_html__("Class extra for style", 'otvcp-i10n')
      ),
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'otvcp-i10n' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'otvcp-i10n' ),
         'group' => __( 'Design Options', 'otvcp-i10n' )
      ), 
    )));
}

// Buttons
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Button", 'otvcp-i10n'),
   "base" => "button",
   "class" => "",
   "category" => 'Borrow Element',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Add text for button", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Link", 'otvcp-i10n'),
         "param_name" => "btnlink",
         "value" => '',
         "description" => esc_html__("Add link for button", 'otvcp-i10n')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button type", 'otvcp-i10n'),
         "param_name" => "type",
         "value" => array( 
                     esc_html__('Default', 'otvcp-i10n') => 'default', 
                     esc_html__('Outline Default', 'otvcp-i10n') => 'outline-default', 
                     esc_html__('Primary', 'otvcp-i10n') => 'primary',
                     esc_html__('Outline Primary', 'otvcp-i10n') => 'outline-primary', 
                     esc_html__('Secondary', 'otvcp-i10n') => 'secondary',
                     ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),

      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Size", 'otvcp-i10n'),
         "param_name" => "size",
         "value" => array( 
                     esc_html__('Medium', 'otvcp-i10n') => 'medium', 
                     esc_html__('Large', 'otvcp-i10n') => 'large',
                     esc_html__('Small', 'otvcp-i10n') => 'small',
                     esc_html__('Very Small', 'otvcp-i10n') => 'xs',
                    ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Class", 'otvcp-i10n'),
         "param_name" => "class",
         "value" => "",
         "description" => esc_html__("Add class for button", 'otvcp-i10n')
      ),
    )
    ));

}

// Home Slider
if(function_exists('vc_map')){
   vc_map(array(
         "name"      => __("OT Home Slider 1", 'otvcp-i10n'),
         "base"      => "sliderh",
         "class"     => "",
         "icon" => "icon-st",
         "category"  => 'Borrow Element',
         "params"    => array(             
            // params group
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'body',
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                       "type" => "dropdown",
                       "holder" => "div",
                       "class" => "",
                       "heading" => esc_html__("Column Width", 'otvcp-i10n'),
                       "param_name" => "column1",
                       'default' => '6',
                       "value" => array(
                                   esc_html__('1 Column', 'otvcp-i10n') => '1', 
                                   esc_html__('2 Column', 'otvcp-i10n') => '2',       
                                   esc_html__('3 Column', 'otvcp-i10n') => '3',       
                                   esc_html__('4 Column', 'otvcp-i10n') => '4',        
                                   esc_html__('5 Column', 'otvcp-i10n') => '5',        
                                   esc_html__('6 Column', 'otvcp-i10n') => '6',        
                                   esc_html__('7 Column', 'otvcp-i10n') => '7',        
                                   esc_html__('8 Column', 'otvcp-i10n') => '8',        
                                   esc_html__('9 Column', 'otvcp-i10n') => '9',        
                                   esc_html__('10 Column', 'otvcp-i10n') => '10',        
                                   esc_html__('11 Column', 'otvcp-i10n') => '11',        
                                   esc_html__('12 Column', 'otvcp-i10n') => '12',                   
                       ),
                       "description" => esc_html__("", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Title',
                        'param_name' => 'title',
                        "value" => "",
                        "description" => __("Add text", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'attach_image',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Image',
                        'param_name' => 'image',
                        "value" => "",
                        "description" => __("Upload image", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textarea',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Content',
                        'param_name' => 'desc',
                        "value" => "",
                        "description" => __("Add Content Text", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Button Text',
                        'param_name' => 'btntext',
                        "value" => "",
                        "description" => __("Add text", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Button link',
                        'param_name' => 'link',
                        "value" => "",
                        "description" => __("Add link", 'otvcp-i10n')
                    ),
                )                
            ),
            array(
                  'type' => 'textfield',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Slide Auto Play',
                  'param_name' => 'auto',
                  "value" => "",
                  "description" => __("Ex: true, false, 3000, 5000, ..", 'otvcp-i10n')
            ),
            array(
                  'type' => 'textfield',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Slide Speed',
                  'param_name' => 'speed',
                  "value" => "",
                  "description" => __("Ex: 3000, 5000, 300, 500..", 'otvcp-i10n')
            ),
            array(
                  'type' => 'checkbox',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Hide Pagination?',
                  'param_name' => 'pagination',
                  "value" => "",
                  "description" => __("If checked, Hide pagination slider.", 'otvcp-i10n')
            ),
            array(
                  'type' => 'textfield',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Pagination Speed',
                  'param_name' => 'paginationSpeed',
                  "value" => "",
                  "description" => __("Ex: 3000, 5000, 300, 500..", 'otvcp-i10n')
            ),
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => esc_html__("Transition Style", 'otvcp-i10n'),
               "param_name" => "transition",
               "value" => array(
                           esc_html__('Select', 'otvcp-i10n') => 'no', 
                           esc_html__('Slide', 'otvcp-i10n') => 'slide',       
                           esc_html__('Fade', 'otvcp-i10n') => 'fade',                   
               ),
               "description" => esc_html__("", 'otvcp-i10n')
            ),
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => esc_html__("Background Overlay", 'otvcp-i10n'),
               "param_name" => "bg_overlay",
               "value" => array(
                        esc_html__('Overlay', 'otvcp-i10n') => 'overlay',
                        esc_html__('Transparent', 'otvcp-i10n') => 'transparent',                               
                        esc_html__('Gradient', 'otvcp-i10n') => 'gradient',                   
               ),
            ),
        )
    )
);
}

// Home Slider 2
if(function_exists('vc_map')){
   vc_map(array(
         "name"      => __("OT Home Slider 2", 'otvcp-i10n'),
         "base"      => "home_slider2",
         "class"     => "",
         "icon" => "icon-st",
         "category"  => 'Borrow Element',
         "params"    => array(             
            // params group
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'body',
                // Note params is mapped inside param-group:
                'params' => array(                    
                    array(
                        'type' => 'attach_image',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Image',
                        'param_name' => 'image',
                        "value" => "",
                        "description" => __("Upload image", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Title',
                        'param_name' => 'title',
                        "value" => "",
                        "description" => __("Add Title", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textarea',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Content',
                        'param_name' => 'desc',
                        "value" => "",
                        "description" => __("Add Content", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Rate Badge',
                        'param_name' => 'rate_badge',
                        "value" => "",
                        "description" => __("Add Rate Badge", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Button Text',
                        'param_name' => 'btntext',
                        "value" => "",
                        "description" => __("Add botton text", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Button link',
                        'param_name' => 'link',
                        "value" => "",
                        "description" => __("Add button link", 'otvcp-i10n')
                    ),
                )                
            ),
            array(
                  'type' => 'textfield',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Slide Auto Play',
                  'param_name' => 'auto',
                  "value" => "",
                  "description" => __("Ex: true, false, 3000, 5000, ..", 'otvcp-i10n')
            ),
            array(
                  'type' => 'textfield',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Slide Speed',
                  'param_name' => 'speed',
                  "value" => "",
                  "description" => __("Ex: 3000, 5000, 300, 500..", 'otvcp-i10n')
            ),
            array(
                  'type' => 'textfield',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Pagination Speed',
                  'param_name' => 'paginationSpeed',
                  "value" => "",
                  "description" => __("Ex: 3000, 5000, 300, 500..", 'otvcp-i10n')
            ),
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => esc_html__("Transition Style", 'otvcp-i10n'),
               "param_name" => "transition",
               "value" => array(
                           esc_html__('Select', 'otvcp-i10n') => 'no', 
                           esc_html__('Slide', 'otvcp-i10n') => 'slide',       
                           esc_html__('Fade', 'otvcp-i10n') => 'fade',                   
               ),
               "description" => esc_html__("", 'otvcp-i10n')
            ),
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => esc_html__("Background Overlay", 'otvcp-i10n'),
               "param_name" => "bg_overlay",
               "value" => array(
                        esc_html__('Overlay', 'otvcp-i10n') => 'overlay',
                        esc_html__('Transparent', 'otvcp-i10n') => 'transparent',                               
                        esc_html__('Gradient', 'otvcp-i10n') => 'gradient',                   
               ),
            ),
        )
    )
);
}

//Rate Counter
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Rate Counter", 'otvcp-i10n'),
   "base"      => "rate",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Rate",
         "param_name" => "rate",
         "value" => "",
         "description" => esc_html__("Enter the rate. Ex 16.77%", 'otvcp-i10n')
      ), 
    )));
}

//Loan Block
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Loan Block", 'otvcp-i10n'),
   "base"      => "loanblock",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
    )));
}

//Counter
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Counter", 'otvcp-i10n'),
   "base"      => "counter",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Counter",
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number.", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Small",
         "param_name" => "small",
         "value" => "",
         "description" => esc_html__("Enter the small text in back the number coount.", 'otvcp-i10n')
      ), 
    )));
}

//Price Rate
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Price Rate", 'otvcp-i10n'),
   "base"      => "price_rate",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "New Price",
         "param_name" => "new_price",
         "value" => "",
         "description" => esc_html__("Enter the new price price. Ex: 8.70%", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "New Title",
         "param_name" => "new_title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Old Price",
         "param_name" => "old_price",
         "value" => "",
         "description" => esc_html__("Enter the old price rate. Ex 9.70%", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Old Title",
         "param_name" => "Old_title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
    )));
}

//Review
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Review", 'otvcp-i10n'),
   "base"      => "review",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Default', 'otvcp-i10n') => 'style1', 
                     esc_html__('rating', 'otvcp-i10n') => 'style2',       
                     esc_html__('Customer Review', 'otvcp-i10n') => 'style3',    
                     esc_html__('Rating Yellow', 'otvcp-i10n') => 'style4',      
                     esc_html__('Customer Review Align Left', 'otvcp-i10n') => 'style5',                 
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Fontello", 'otvcp-i10n'),
         "param_name" => "icon",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1','style2' ) ),
         "value" => "",
         "description" => __("Add code icon. Ex: icon-command. <a href='http://demo.oceanthemes.net/borrow/fontello/' target='_blank'>view more</a>", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number", 'otvcp-i10n'),
         "param_name" => "number",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "value" => "",
         "description" => esc_html__("Enter the number", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Rating", 'otvcp-i10n'),
         "param_name" => "numrat",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2','style3','style4','style5' ) ),
         "value" => array(
                     esc_html__('1 star', 'otvcp-i10n') => '1', 
                     esc_html__('2 star', 'otvcp-i10n') => '2',      
                     esc_html__('3 star', 'otvcp-i10n') => '3',      
                     esc_html__('4 star', 'otvcp-i10n') => '4',      
                     esc_html__('5 star', 'otvcp-i10n') => '5',                    
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         'dependency'  => array( 'element' => 'style', 'value' => array('style3','style5' ) ),
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
    )));
}

//OT Loan 1
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Loan 1", 'otvcp-i10n'),
   "base"      => "services",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number show", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number show", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Slide Style', 'otvcp-i10n') => 'style1', 
                     esc_html__('Grid Style with Featured Image', 'otvcp-i10n') => 'style2',    
                     esc_html__('Grid Style with Icon Image', 'otvcp-i10n') => 'style3',                   
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Border", 'otvcp-i10n'),
         "param_name" => "outline",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "value" => "",
         "description" => esc_html__("Select yes or no. Default: No.", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Show Subtitle", 'otvcp-i10n'),
         "param_name" => "show_sub",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "value" => "",
         "description" => esc_html__("Select yes or no. Default: No.", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Show Button", 'otvcp-i10n'),
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "param_name" => "show_bt",
         "value" => "",
         "description" => esc_html__("Select yes or no. Default: No.", 'otvcp-i10n')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Padding Content", 'otvcp-i10n'),
         "param_name" => "padd",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "value" => array(
                     esc_html__('Select', 'otvcp-i10n') => 'no', 
                     esc_html__('Padding 10', 'otvcp-i10n') => '10',   
                     esc_html__('Padding 20', 'otvcp-i10n') => '20',   
                     esc_html__('Padding 30', 'otvcp-i10n') => '30',                    
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter the button text", 'otvcp-i10n')
      ), 
    )));
}

//OT Loan 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Loan 2", 'otvcp-i10n'),
   "base"      => "ot_loan2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number show", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number show", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter the button text", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Grid elements per row", 'otvcp-i10n'),
         "param_name" => "grid_columns",
         "value" => array(
                     esc_html__('4', 'otvcp-i10n') => 4, 
                     esc_html__('2', 'otvcp-i10n') => 2, 
                     esc_html__('3', 'otvcp-i10n') => 3,                      
                     esc_html__('6', 'otvcp-i10n') => 6,                    
         ),
         "description" => esc_html__("Select number of single grid elements per row.", 'otvcp-i10n')
      ),
    )));
}

//OT Loan Offers
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Loan Offers", 'otvcp-i10n'),
   "base"      => "ot_loanoffers",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number show", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number show", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter the button text", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Grid elements per row", 'otvcp-i10n'),
         "param_name" => "grid_columns",
         "value" => array(
                     esc_html__('4', 'otvcp-i10n') => 4, 
                     esc_html__('2', 'otvcp-i10n') => 2, 
                     esc_html__('3', 'otvcp-i10n') => 3,                      
                     esc_html__('6', 'otvcp-i10n') => 6,                    
         ),
         "description" => esc_html__("Select number of single grid elements per row.", 'otvcp-i10n')
      ),
    )));
}

//Blog
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Latest New", 'otvcp-i10n'),
   "base"      => "blog",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Default', 'otvcp-i10n') => 'style1', 
                     esc_html__('No content', 'otvcp-i10n') => 'style2',  
                     esc_html__('Image & Title', 'otvcp-i10n') => 'style3',                    
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number show", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number show", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excerpt Length", 'otvcp-i10n'),
         "param_name" => "excerpt",
         "value" => "",
         "description" => esc_html__("Enter the excerpt length content", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image show", 'otvcp-i10n'),
         "param_name" => "image",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "value" => array(
                     esc_html__('Feature Image', 'otvcp-i10n') => 'img1', 
                     esc_html__('Image 2', 'otvcp-i10n') => 'img2',                    
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(         
           "type" => "textfield",         
           "holder" => "div",         
           "class" => "",         
           "heading" => "Order by :",         
           "param_name" => "orderby",         
           "value" => "",         
           "description" => __("Enter Order by. Example: title, date, rand ", 'otvcp-i10n' )      
        ),  
        array(         
           "type" => "textfield",         
           "holder" => "div",         
           "class" => "",         
           "heading" => "Order : ",         
           "param_name" => "order",         
           "value" => "",         
           "description" => __("Enter Order. Example: DESC, ASC ", 'otvcp-i10n' )      
        ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter the button text", 'otvcp-i10n')
      ), 
    )));
}

//Blog 2 (update May 2020)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Latest New Style 2", 'otvcp-i10n'),
   "base"      => "blog2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number show", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number show", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excerpt Length", 'otvcp-i10n'),
         "param_name" => "excerpt",
         "value" => "",
         "description" => esc_html__("Enter the excerpt length content", 'otvcp-i10n')
      ), 
      array(         
           "type" => "textfield",         
           "holder" => "div",         
           "class" => "",         
           "heading" => "Order by :",         
           "param_name" => "orderby",         
           "value" => "",         
           "description" => __("Enter Order by. Example: title, date, rand ", 'otvcp-i10n' )      
        ),  
        array(         
           "type" => "textfield",         
           "holder" => "div",         
           "class" => "",         
           "heading" => "Order : ",         
           "param_name" => "order",         
           "value" => "",         
           "description" => __("Enter Order. Example: DESC, ASC ", 'otvcp-i10n' )      
        ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter the button text", 'otvcp-i10n')
      ), 
    )));
}

//Lastest News Slider 
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Lastest New Slider", 'otvcp-i10n'),
   "base"      => "blogslide",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number show", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number show", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excerpt Length", 'otvcp-i10n'),
         "param_name" => "excerpt",
         "value" => "",
         "description" => esc_html__("Enter the excerpt length content", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image show", 'otvcp-i10n'),
         "param_name" => "image",
         "value" => array(
                     esc_html__('Feature Image', 'otvcp-i10n') => 'img1', 
                     esc_html__('Image 2', 'otvcp-i10n') => 'img2',                    
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button Text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter the button text", 'otvcp-i10n')
      ), 
    )));
}

//Team
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Team", 'otvcp-i10n'),
   "base"      => "team",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number show", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number show", 'otvcp-i10n')
      ), 
    )));
}

//Filter Gallery
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Filter Gallery", 'otvcp-i10n'),
   "base"      => "filgl",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number show", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number show", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Text show all", 'otvcp-i10n'),
         "param_name" => "all",
         "value" => "",
         "description" => esc_html__("Enter the text", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Column", 'otvcp-i10n'),
         "param_name" => "column",
         "value" => array(
                     esc_html__('Select', 'otvcp-i10n') => 'no', 
                     esc_html__('2 Columns', 'otvcp-i10n') => '2',   
                     esc_html__('3 Columns', 'otvcp-i10n') => '3',                   
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
    )));
}

//OT Process 1
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Process 1", 'otvcp-i10n'),
   "base"      => "process",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Box Outline', 'otvcp-i10n') => 'style1', 
                     esc_html__('Image', 'otvcp-i10n') => 'style2',       
                     esc_html__('Pink Cricle', 'otvcp-i10n') => 'style3',               
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Box Shadow", 'otvcp-i10n'),
         "param_name" => "shadow",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "value" => "",
         "description" => esc_html__("Select yes or no. Default: No.", 'otvcp-i10n')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image", 'otvcp-i10n'),
         "param_name" => "image",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "value" => "",
         "description" => esc_html__("Upload Image", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Process", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number. Ex: 1, 2...", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
    )));
}

//OT Process 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Process 2", 'otvcp-i10n'),
   "base"      => "process2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Process", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number. Ex: 1, 2...", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
        'type' => 'vc_link',
         "heading" => __("Link Banner Box", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => __("Add link to process box.", 'otvcp-i10n')
      ), 
    )));
}

//OT Process 3
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Process 3", 'otvcp-i10n'),
   "base"      => "process3",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Style 1', 'otvcp-i10n') => 'style1', 
                     esc_html__('Style 2', 'otvcp-i10n') => 'style2',                    
         ),
         "description" => esc_html__("Select Style", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Process", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Enter the number. Ex: 1, 2...", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
        'type' => 'vc_link',
         "heading" => __("Link", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "description" => __("Add link to process box.", 'otvcp-i10n')
      ), 
    )));
}

//OT Process Image (update May 2020)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Process Image Box", 'otvcp-i10n'),
   "base"      => "processimg",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image", 'otvcp-i10n'),
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload Image", 'otvcp-i10n')
      ), 
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "",
         "description" => esc_html__("Select icon", 'otvcp-i10n')
      ), 
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Arrow", 'otvcp-i10n'),
         "param_name" => "arr",
         "value" => "",
         "description" => esc_html__("If checked, Show arrow", 'otvcp-i10n')
      ), 
    )));
}

//OT Credit Card Feature (update May 2020)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Credit Card Feature", 'otvcp-i10n'),
   "base"      => "ccfeature",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Subtitle", 'otvcp-i10n'),
         "param_name" => "stitle",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "vc_link",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Add button", 'otvcp-i10n'),
         "param_name" => "linkbox",
         "value" => "",
         "description" => esc_html__("Add Button text % link", 'otvcp-i10n')
      ), 
    )));
}

//OT Simple Box (update May 2020)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Simple Box", 'otvcp-i10n'),
   "base"      => "mmbox",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Style 1', 'otvcp-i10n') => 'style1', 
                     esc_html__('Style 2', 'otvcp-i10n') => 'style2',   
                     esc_html__('Image Left', 'otvcp-i10n') => 'style3',                   
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image", 'otvcp-i10n'),
         "param_name" => "image",
         "value" => "",
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         "type" => "vc_link",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Add button", 'otvcp-i10n'),
         "param_name" => "linkbox",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "value" => "",
         "description" => esc_html__("Add Button text % link", 'otvcp-i10n')
      ), 
    )));
}

//Question Box
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Question Box", 'otvcp-i10n'),
   "base"      => "question",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Fontello", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Add code icon. Ex: icon-command. <a href='http://demo.oceanthemes.net/borrow/fontello/' target='_blank'>view more</a>", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         "type" => "vc_link",
         "heading" => esc_html__("Button link", 'otvcp-i10n'),
         "param_name" => "linkbox",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "description" => esc_html__("Add link", 'otvcp-i10n')
      ),
    )));
}

//Miscellaneous
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Miscellaneous", 'otvcp-i10n'),
   "base"      => "miscell",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Default', 'otvcp-i10n') => 'style1', 
                     esc_html__('No button', 'otvcp-i10n') => 'style2',                    
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Fontello", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Add code icon. Ex: icon-command. <a href='http://demo.oceanthemes.net/borrow/fontello/' target='_blank'>view more</a>", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         "type" => "vc_link",
         "heading" => esc_html__("Button link", 'otvcp-i10n'),
         "param_name" => "linkbox",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "description" => esc_html__("Add link", 'otvcp-i10n')
      ),
    )));
}

//About Popup Video Box
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT About Popup Video Box", 'otvcp-i10n'),
   "base"      => "about_popup_video",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(  
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Background Image", 'otvcp-i10n'),
         "param_name" => "bgimage",
         "value" => "",
         "description" => esc_html__("Upload background image", 'otvcp-i10n')
      ),          
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Play", 'otvcp-i10n'),
         "param_name" => "iconplay",
         "value" => "",
         "description" => __("Add your icon play button image, recommended image size: 82x82", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Video Link", 'otvcp-i10n'),
         "param_name" => "videolink",
         "value" => "",
         "description" => esc_html__("Enter Video URL, Ex: http://www.youtube.com/watch?v=0O2aH4XLbto or https://vimeo.com/45830194", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Play Location", 'otvcp-i10n'),
         "param_name" => "location",
         "value" => array(
                     esc_html__('Left', 'otvcp-i10n') => 'left', 
                     esc_html__('Right', 'otvcp-i10n') => 'right',
                     esc_html__('Center', 'otvcp-i10n') => 'center',                    
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ), 
    )));
}

//OT Icon Box
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Icon box", 'otvcp-i10n'),
   "base"      => "iconbox",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "",
         "description" => esc_html__("Select icon", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                  esc_html__('Default', 'otvcp-i10n') => '1',
                  esc_html__('Icon Left', 'otvcp-i10n') => '2',                               
                  esc_html__('ICon Block', 'otvcp-i10n') => '3',                   
         ),
         "description" => esc_html__("Select section", 'otvcp-i10n')
      ),
    )));
}

//OT Feature Box 1
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Feature box 1", 'otvcp-i10n'),
   "base"      => "features",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('style 1', 'otvcp-i10n') => 'style1', 
                     esc_html__('style 2', 'otvcp-i10n') => 'style2',   
                     esc_html__('style 3', 'otvcp-i10n') => 'style3',   
                     esc_html__('style 4', 'otvcp-i10n') => 'style4',                  
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Fontello", 'otvcp-i10n'),
         "param_name" => "icon",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1','style3','style4' ) ),
         "value" => "",
         "description" => __("Add code icon. Ex: icon-command. <a href='http://demo.oceanthemes.net/borrow/fontello/' target='_blank'>view more</a>", 'otvcp-i10n')
      ), 
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "icon2",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "value" => "",
         "description" => esc_html__("select icon", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
    )));
}

//OT Feature Box 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Feature box 2", 'otvcp-i10n'),
   "base"      => "features2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(      
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "icon",
         "value" => "fa fa-heart",
         "description" => esc_html__("select icon", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'otvcp-i10n' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'otvcp-i10n' ),
         'group' => __( 'Design Options', 'otvcp-i10n' )
      ), 
    )));
}

//OT Feature Box 3
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Feature box 3", 'otvcp-i10n'),
   "base"      => "features3",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(      
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "icon",
         "value" => "fa fa-heart",
         "description" => esc_html__("select icon", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'otvcp-i10n' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'otvcp-i10n' ),
         'group' => __( 'Design Options', 'otvcp-i10n' )
      ), 
    )));
}

//OT Feature Box 4
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Feature box 4", 'otvcp-i10n'),
   "base"      => "features4",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(      
      array(
         "type" => "iconpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "icon",
         "value" => "fa fa-heart",
         "description" => esc_html__("select icon", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'otvcp-i10n' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'otvcp-i10n' ),
         'group' => __( 'Design Options', 'otvcp-i10n' )
      ), 
    )));
}

//OT Feature Box 5
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Feature box 5", 'otvcp-i10n'),
   "base"      => "features5",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Flaticon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Add icon class name. Ex: flaticon-time-is-money , <a href='http://oceanthemes.net/font-icons/borrow/flaticon/' target='_blank'>view more</a>", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'otvcp-i10n' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'otvcp-i10n' ),
         'group' => __( 'Design Options', 'otvcp-i10n' )
      ), 
    )));
}

//OT Feature Box 6
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Feature box 6", 'otvcp-i10n'),
   "base"      => "features6",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Flaticon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Add icon class name. Ex: flaticon-time-is-money , <a href='http://oceanthemes.net/font-icons/borrow/flaticon/' target='_blank'>view more</a>", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'otvcp-i10n' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'otvcp-i10n' ),
         'group' => __( 'Design Options', 'otvcp-i10n' )
      ), 
    )));
}

//Bank Account Feature
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Bank Account Box", 'otvcp-i10n'),
   "base"      => "featuresba",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         "type" => "vc_link",
         "heading" => esc_html__("Button link", 'otvcp-i10n'),
         "param_name" => "linkbox",
         "description" => esc_html__("Add link", 'otvcp-i10n')
      ),
    )));
}

//Share
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Share", 'otvcp-i10n'),
   "base"      => "share",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Facebook", 'otvcp-i10n'),
         "param_name" => "faceb",
         "value" => "",
         "description" => esc_html__("Select yes or no. Default: No.", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Twitter", 'otvcp-i10n'),
         "param_name" => "twitter",
         "value" => "",
         "description" => esc_html__("Select yes or no. Default: No.", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Google", 'otvcp-i10n'),
         "param_name" => "google",
         "value" => "",
         "description" => esc_html__("Select yes or no. Default: No.", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Linkedin", 'otvcp-i10n'),
         "param_name" => "linkedin",
         "value" => "",
         "description" => esc_html__("Select yes or no. Default: No.", 'otvcp-i10n')
      ),
    )));
}

// Compare Feature (update May 2020)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Compare Feature", 'otvcp-i10n'),
   "base"      => "comparefea",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('style 1', 'otvcp-i10n') => 'style1', 
                     esc_html__('style 2', 'otvcp-i10n') => 'style2',                 
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Backgroung Color Image",
         "param_name" => "bg",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "value" => "",
         "description" => esc_html__("Select color", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link",
         "param_name" => "link",
         "value" => "",
         "description" => esc_html__("Enter the link", 'otvcp-i10n')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Size", 'otvcp-i10n'),
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
         "param_name" => "bsize",
         "value" => array(
                     esc_html__('Small', 'otvcp-i10n') => 'small', 
                     esc_html__('Medium', 'otvcp-i10n') => 'medium',                 
         ),
         "description" => esc_html__("Select size", 'otvcp-i10n')
      ),
    )));
}

// Avatar Box (update May 2020)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Avatar Box", 'otvcp-i10n'),
   "base"      => "avtbox",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
    )));
}

// Card Rate Box (update May 2020)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Card Rate Box", 'otvcp-i10n'),
   "base"      => "cardrate",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Badge",
         "param_name" => "badge",
         "value" => "",
         "description" => esc_html__("Enter the badge", 'otvcp-i10n')
      ), 
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the Content", 'otvcp-i10n')
      ), 
    )));
}

// Review Box 2 (update May 2020)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Review Box 2", 'otvcp-i10n'),
   "base"      => "reviewbimg",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Review Image",
         "param_name" => "rimg",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the Content", 'otvcp-i10n')
      ), 
    )));
}

// OT Forex
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Forex", 'otvcp-i10n'),
   "base"      => "ot_forex",
   'admin_enqueue_js'  => OTVCP_DIR . 'assets/javascripts/select2.min.js',
   'admin_enqueue_css' => OTVCP_DIR . 'assets/stylesheets/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
          "type"      => "select_category_creditcard",
          "holder"    => "div",
          "class"     => "",
          "heading"   => esc_html__("Categories List", 'otvcp-i10n'),
          "param_name"=> "idcate",
          "value"     => "",
          "description" => esc_html__("If you want to display by categories. You need select categories name. If you don't select categories. Credit Card will display latest new Credit Cards.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Total items", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Set max limit for items in grid or enter -1 to display all (limited to 1000).", 'otvcp-i10n')
      ), 
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__('Columns', 'otvcp-i10n'),
          "param_name" => "col",
          "value" => array(
              esc_html__('3 Columns', 'otvcp-i10n')     => '3',
              esc_html__('4 Columns', 'otvcp-i10n')     => '4',
              esc_html__('2 Columns', 'otvcp-i10n')     => '2',
          ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter button text, default: read more.", 'otvcp-i10n')
      ), 
    )));
}

// OT Credit Card Grid
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Credit Card Grid", 'otvcp-i10n'),
   "base"      => "ot_creditcard",
   'admin_enqueue_js'  => OTVCP_DIR . 'assets/javascripts/select2.min.js',
   'admin_enqueue_css' => OTVCP_DIR . 'assets/stylesheets/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('style 1', 'otvcp-i10n') => 'style1', 
                     esc_html__('style 2', 'otvcp-i10n') => 'style2',                 
         ),
         "description" => esc_html__("Select style", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
          "type"      => "select_category_creditcard",
          "holder"    => "div",
          "class"     => "",
          "heading"   => esc_html__("Categories List", 'otvcp-i10n'),
          "param_name"=> "idcate",
          "value"     => "",
          "description" => esc_html__("If you want to display by categories. You need select categories name. If you don't select categories. Credit Card will display latest new Credit Cards.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Total items", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Set max limit for items in grid or enter -1 to display all (limited to 1000).", 'otvcp-i10n')
      ), 
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__('Columns', 'otvcp-i10n'),
          "param_name" => "col",
          "value" => array(
              esc_html__('3 Columns', 'otvcp-i10n')     => '3',
              esc_html__('4 Columns', 'otvcp-i10n')     => '4',
              esc_html__('2 Columns', 'otvcp-i10n')     => '2',
          ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter button text, default: read more.", 'otvcp-i10n')
      ), 
    )));
}

// OT Credit Card Compare
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Credit Card Compare", 'otvcp-i10n'),
   "base"      => "ot_creditcardcp",
   "class"     => "",
   'admin_enqueue_js'  => OTVCP_DIR . 'assets/javascripts/select2.min.js',
   'admin_enqueue_css' => OTVCP_DIR . 'assets/stylesheets/select2.css',
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
          "type"      => "select_category_creditcard",
          "holder"    => "div",
          "class"     => "",
          "heading"   => esc_html__("Categories List", 'otvcp-i10n'),
          "param_name"=> "idcate",
          "value"     => "",
          "description" => esc_html__("If you want to display by categories. You need select categories name. If you don't select categories. Credit Card will display latest new Credit Cards", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Total items", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Set max limit for items in grid or enter -1 to display all (limited to 1000).", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter button text, default: read more.", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Small text", 'otvcp-i10n'),
         "param_name" => "small_text",
         "value" => "",
         "description" => esc_html__("Enter small text.", 'otvcp-i10n')
      ), 
        array(
              'type' => 'checkbox',
              "holder" => "div",
              "class" => "",
              'heading' => 'Disable Expand Details',
              'param_name' => 'disable_expand',
              "value" => "",
              "description" => __("If checked, Hide Expand Datails", 'otvcp-i10n')
        ),
    )));
}

if ( ! function_exists( 'is_plugin_active' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
  if ( function_exists( 'vc_add_shortcode_param' ) ) {
     vc_add_shortcode_param( 'select_category_creditcard', 'select_param_creditcard', OTVCP_DIR . 'assets/javascripts/select-field-creditcard.js' );
  } elseif ( function_exists( 'add_shortcode_param' ) ) {
     add_shortcode_param( 'select_category_creditcard', 'select_param_creditcard', OTVCP_DIR . 'assets/javascripts/select-field-creditcard.js' );
  }
}   

function select_param_creditcard( $settings, $value ) {  
  $creditcard_cat = get_terms( 'creditcard_cat' );
  $cat_creditcard = array();
  foreach( $creditcard_cat as $category ) {
     if( $category ) {
        $cat_creditcard[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }

  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-creditcard_cat wpb_vc_param_value wpb-textinput %s %s_field">
     <select class="select-creditcard_cat-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     implode( '', $cat_creditcard )
  );
}


// OT Lender Grid
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Lender", 'otvcp-i10n'),
   "base"      => "ot_lendergrid",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Lender Grid', 'otvcp-i10n') => 'style1', 
                     esc_html__('Single Logo', 'otvcp-i10n') => 'style2',                       
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Total items", 'otvcp-i10n'),
         "param_name" => "number",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1','style2' ) ),
         "value" => "",
         "description" => esc_html__("Set max limit for items in grid or enter -1 to display all (limited to 1000).", 'otvcp-i10n')
      ), 
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__('Columns', 'otvcp-i10n'),
          "param_name" => "col",
          "value" => array(
              esc_html__('3 Columns', 'otvcp-i10n')     => '3',
              esc_html__('4 Columns', 'otvcp-i10n')     => '4',
              esc_html__('2 Columns', 'otvcp-i10n')     => '2',
          ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button text", 'otvcp-i10n'),
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter button text, default: read more.", 'otvcp-i10n')
      ), 
    )));
}

// Nwesletter (Update May 2020)
if(function_exists('vc_map')){
    vc_map( array(
        "name" => esc_html__("OT Newsletter", 'otvcp-i10n'),
        "base" => "newslet",
        "class" => "",
        "category" => 'Quanto Element',
        "icon" => "icon-st",
        "params" => array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__('Title', 'otvcp-i10n'),
                "param_name" => "title",
                "value" => "",
                "description" => esc_html__("Enter the title", 'otvcp-i10n')
            ),
            array(
                "type" => "iconpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__("Icon", 'otvcp-i10n'),
                "param_name" => "icon",
                "value" => "",
                "description" => esc_html__("select icon", 'otvcp-i10n')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__("text placeholder", 'otvcp-i10n'),
                "param_name" => "plh",
                "value" => "",
                "description" => esc_html__("Add placeholder", 'otvcp-i10n')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__("Button text", 'otvcp-i10n'),
                "param_name" => "btn",
                "value" => "",
                "description" => esc_html__("Add text button", 'otvcp-i10n')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__("Extra Class", 'otvcp-i10n'),
                "param_name" => "iclass",
                "value" => "",
                "description" => esc_html__("Add class if you want to custom style", 'otvcp-i10n')
            ),
        )));
}

// OT Lender Compare
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Lender Compare", 'otvcp-i10n'),
   "base"      => "ot_lendercp",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array( 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Compare the Best Personal Loan Companies', 'otvcp-i10n') => 'style1', 
                     esc_html__('Compare the Best Student Loan Refinance Rates', 'otvcp-i10n') => 'style2',                       
         ),
         "description" => esc_html__("Select Style", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Total items", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Set max limit for items in grid or enter -1 to display all (limited to 1000).", 'otvcp-i10n')
      ), 
      array(
            'type' => 'checkbox',
            "holder" => "div",
            "class" => "",
            'heading' => 'Disable Expand Details',
            'param_name' => 'disable_expand',
            "value" => "",
            "description" => __("If checked, Hide Expand Datails", 'otvcp-i10n')
      ),
    )));
}

// OT Bank Account List
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Bank Account List", 'otvcp-i10n'),
   "base"      => "ot_bankaccount",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Total items", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Set max limit for items in grid or enter -1 to display all (limited to 1000).", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Button text", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Enter button text, default: View Details.", 'otvcp-i10n')
      ), 
    )));
}

//Compare Box
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Compare box", 'otvcp-i10n'),
   "base"      => "compares",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ),  
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image", 'otvcp-i10n'),
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Rate Number", 'otvcp-i10n'),
         "param_name" => "rate_number",
         "value" => "",
         "description" => esc_html__("Enter the rate. Ex: 3.52%.", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Rate Text", 'otvcp-i10n'),
         "param_name" => "rate",
         "value" => "",
         "description" => esc_html__("Enter the text.", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Fees Number", 'otvcp-i10n'),
         "param_name" => "fees_number",
         "value" => "",
         "description" => esc_html__("Enter the fees. Ex: $120.", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Fees Text", 'otvcp-i10n'),
         "param_name" => "fees",
         "value" => "",
         "description" => esc_html__("Enter the fees text.", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Compare rate", 'otvcp-i10n'),
         "param_name" => "compare_number",
         "value" => "",
         "description" => esc_html__("Enter the rate. Ex: 5.54%.", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Compare Rate Text", 'otvcp-i10n'),
         "param_name" => "compare",
         "value" => "",
         "description" => esc_html__("Enter the compare rate text.", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Repayment", 'otvcp-i10n'),
         "param_name" => "repayment_number",
         "value" => "",
         "description" => esc_html__("Enter the repayment. Ex: $200.", 'otvcp-i10n')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Repayment Text", 'otvcp-i10n'),
         "param_name" => "repayment",
         "value" => "",
         "description" => esc_html__("Enter the repayment text.", 'otvcp-i10n')
      ),  
      array(
         "type" => "vc_link",
         "heading" => esc_html__("Button link", 'otvcp-i10n'),
         "param_name" => "linkbox",
         "description" => esc_html__("Add link", 'otvcp-i10n')
      ),
    )));
}

//Contact info
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Contact Info", 'otvcp-i10n'),
   "base"      => "conin",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Fontello", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Add code icon. Ex: icon-command. <a href='http://demo.oceanthemes.net/borrow/fontello/' target='_blank'>view more</a>", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Subtitle", 'otvcp-i10n'),
         "param_name" => "stitle",
         "value" => "",
         "description" => esc_html__("Enter the subtitle", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Content", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
      array(
         "type" => "vc_link",
         "heading" => esc_html__("Button link", 'otvcp-i10n'),
         "param_name" => "linkbox",
         "description" => esc_html__("Add link", 'otvcp-i10n')
      ),
    )));
}

//Loan Calculator
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Loan Calculator", 'otvcp-i10n'),
   "base"      => "calculator",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title 1",
         "param_name" => "amount_tx",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Loan Amount is", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Amount",
         "param_name" => "amount",
         "value" => "",
         "description" => esc_html__("Enter the amount", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Range Amount",
         "param_name" => "range_amount",
         "value" => "",
         "description" => esc_html__("Enter the range amount", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title 2",
         "param_name" => "month_tx",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: No. of Month is", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Month",
         "param_name" => "month",
         "value" => "",
         "description" => esc_html__("Enter the month", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Range Month",
         "param_name" => "range_month",
         "value" => "",
         "description" => esc_html__("Enter the range month", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title 3",
         "param_name" => "rate_tx",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Rate of Interest [ROI] is", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Rate",
         "param_name" => "rate",
         "value" => "",
         "description" => esc_html__("Enter the rate", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Range Rate",
         "param_name" => "range_rate",
         "value" => "",
         "description" => esc_html__("Enter the range rate", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title right 1",
         "param_name" => "edm_m",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Monthly EMI", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title right 2",
         "param_name" => "interest",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Total Interest", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title right 3",
         "param_name" => "payable",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Payable Amount", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title right 4",
         "param_name" => "percentage",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Interest Percentage", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "vc_link",
         "heading" => esc_html__("Button link", 'otvcp-i10n'),
         "param_name" => "linkbox",
         "description" => esc_html__("Add link", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Currency Unit",
         "param_name" => "currentcy",
         "value" => "",
         "description" => esc_html__("Enter the currency, Ex: $ , find more currency html code: https://www.toptal.com/designers/htmlarrows/currency/", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Thousand separator",
         "param_name" => "thousand_separator",
         "value" => "",
         "description" => esc_html__("This sets the thousand separator of displayed prices, default is comma.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Decimal separator",
         "param_name" => "decimal_separator",
         "value" => "",
         "description" => esc_html__("This sets the decimal separator of displayed prices, default is dots.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number of decimals",
         "param_name" => "number_of_decimals",
         "value" => "",
         "description" => esc_html__("This sets the number of decimal points shown in displayed prices, default is 0.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ), 
    )));
}

//Loan Calculator 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Loan Calculator 2", 'otvcp-i10n'),
   "base"      => "calculator2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Enter the title.", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title Amount",
         "param_name" => "amount_tx",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Loan Amount is", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Min Amount",
         "param_name" => "min_amount",
         "value" => "",
         "description" => esc_html__("Enter the min amount", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Max Amount",
         "param_name" => "max_amount",
         "value" => "",
         "description" => esc_html__("Enter the max amount", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Step Amount",
         "param_name" => "step_amount",
         "value" => "",
         "description" => esc_html__("Enter the step amount", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Value Amount",
         "param_name" => "value_amount",
         "value" => "",
         "description" => esc_html__("Enter the value amount", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Month title",
         "param_name" => "month_tx",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: No. of Month is", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Min Month",
         "param_name" => "min_month",
         "value" => "",
         "description" => esc_html__("Enter the month", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Max Month",
         "param_name" => "max_month",
         "value" => "",
         "description" => esc_html__("Enter the max month", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Step Month",
         "param_name" => "step_month",
         "value" => "",
         "description" => esc_html__("Enter the step month", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Value Month",
         "param_name" => "value_month",
         "value" => "",
         "description" => esc_html__("Enter the value month", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Rate Title",
         "param_name" => "rate_tx",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Rate of Interest [ROI] is", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Min Rate",
         "param_name" => "min_rate",
         "value" => "",
         "description" => esc_html__("Enter the rate", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Max Rate",
         "param_name" => "max_rate",
         "value" => "",
         "description" => esc_html__("Enter the max rate", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Step Rate",
         "param_name" => "step_rate",
         "value" => "",
         "description" => esc_html__("Enter the step rate", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Value Rate",
         "param_name" => "value_rate",
         "value" => "",
         "description" => esc_html__("Enter the value rate", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Loan IDM Field",
         "param_name" => "edm_m",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Monthly EMI", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Interest Field",
         "param_name" => "interest",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Total Interest", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Payment Field",
         "param_name" => "payable",
         "value" => "",
         "description" => esc_html__("Enter the title. Ex: Payable Amount", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ), 
      array(
         "type" => "vc_link",
         "heading" => esc_html__("Button link", 'otvcp-i10n'),
         "param_name" => "linkbox",
         "description" => esc_html__("Add link", 'otvcp-i10n'),
         "group" => esc_html__("General", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Currency Unit",
         "param_name" => "currentcy",
         "value" => "",
         "description" => esc_html__("Enter the currency, Ex: $ , find more currency html code: https://www.toptal.com/designers/htmlarrows/currency/", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Thousand separator",
         "param_name" => "thousand_separator",
         "value" => "",
         "description" => esc_html__("This sets the thousand separator of displayed prices, default is comma.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Decimal separator",
         "param_name" => "decimal_separator",
         "value" => "",
         "description" => esc_html__("This sets the decimal separator of displayed prices, default is dots.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number of decimals",
         "param_name" => "number_of_decimals",
         "value" => "",
         "description" => esc_html__("This sets the number of decimal points shown in displayed prices, default is 0.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ), 
    )));
}

//Loan Eligibility
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Loan Eligibility", 'otvcp-i10n'),
   "base"      => "eligibility",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => "Title Box 1",
        "param_name" => "title1",
        "value" => "",
        "description" => esc_html__("Enter the title, Ex: Check Your eligibility for loans.", 'otvcp-i10n')
      ), 
      array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => "Title Box 2",
        "param_name" => "title2",
        "value" => "",
        "description" => esc_html__("Enter the title, Ex: How much loan you are eligible for?", 'otvcp-i10n')
      ),      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Label input 1",
         "param_name" => "text_label_input1",
         "value" => "",
         "description" => esc_html__("Ex: Home Loan Required:", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Placeholder input 1",
         "param_name" => "text_placeholder1",
         "value" => "",
         "description" => esc_html__("Ex: Enter Loan Amount", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Label input 2",
         "param_name" => "text_label_input2",
         "value" => "",
         "description" => esc_html__("Ex: Net income per month", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Placeholder input 2",
         "param_name" => "text_placeholder2",
         "value" => "",
         "description" => esc_html__("Ex: Excluding LTA and Medical allowances", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Label input 3",
         "param_name" => "text_label_input3",
         "value" => "",
         "description" => esc_html__("Ex: Existing loan commitments", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Placeholder input 3",
         "param_name" => "text_placeholder3",
         "value" => "",
         "description" => esc_html__("Ex: (per month)", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Label input 4",
         "param_name" => "text_label_input4",
         "value" => "",
         "description" => esc_html__("Ex: Loan Tenure", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Placeholder input 4",
         "param_name" => "text_placeholder4",
         "value" => "",
         "description" => esc_html__("Ex: (in years)", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Label input 5",
         "param_name" => "text_label_input5",
         "value" => "",
         "description" => esc_html__("Ex: Rate of Interest", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Placeholder input 5",
         "param_name" => "text_placeholder5",
         "value" => "",
         "description" => esc_html__("Ex: 9.5", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button Text 1",
         "param_name" => "btn_text1",
         "value" => "",
         "description" => esc_html__("Ex: Check Eligibility", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button Text 2",
         "param_name" => "btn_text2",
         "value" => "",
         "description" => esc_html__("Ex: Reset All", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Currency Unit",
         "param_name" => "currentcy",
         "value" => "",
         "description" => esc_html__("Enter the currency, Ex: $ , find more currency html code: https://www.toptal.com/designers/htmlarrows/currency/", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Thousand separator",
         "param_name" => "thousand_separator",
         "value" => "",
         "description" => esc_html__("This sets the thousand separator of displayed prices, default is comma.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Decimal separator",
         "param_name" => "decimal_separator",
         "value" => "",
         "description" => esc_html__("This sets the decimal separator of displayed prices, default is dots.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number of decimals",
         "param_name" => "number_of_decimals",
         "value" => "",
         "description" => esc_html__("This sets the number of decimal points shown in displayed prices, default is 0.", 'otvcp-i10n'),
         "group" => esc_html__("Currency Options", 'otvcp-i10n'),
      ),           
    )));
}

//Table
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Table", 'otvcp-i10n'),
   "base" => "table",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Borrow Element',
   "params" => array(
      array(
        "type"        => 'textarea',
        "holder"      => 'div',
        "heading"     => esc_html__('Titles','otvcp-i10n'),
        "param_name"  => 'titles',
        "value"       => '',
        "description" => esc_html__("Enter titles for element (Note: divide columns with '|').",'otvcp-i10n')
      ),
      array(
        "type"        => 'textarea_html',
        "holder"      => 'div',
        "heading"     => esc_html__('Content','otvcp-i10n'),
        "param_name"  => 'content',
        'value'       => '',
        "description" => esc_html__("Enter the content ( Note: divide columns with '|' and devide rows with linebreaks (Enter)).",'otvcp-i10n')
      ),
      array(
        'type'        => 'textfield',
        'holder'      => 'div',
        'heading'     => esc_html__( 'Extra class name', 'otvcp-i10n' ),
        'param_name'  => 'class_name',
        'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'otvcp-i10n' ),
      ),
    )));
}

//Gallery (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Gallery", 'otvcp-i10n'),
   "base"      => "gallerypup",
   "class"     => "",
   "icon" => "icon-st",
   "category" => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "gallery",
         "value" => "",
      ), 
    )));
}

//Gallery Masonry (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Gallery Masonry", 'otvcp-i10n'),
   "base"      => "gallerymason",
   "class"     => "",
   "icon" => "icon-st",
   "category" => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "gallery",
         "value" => "",
      ), 
    )));
}

//Clients Logo (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Client Logos", 'otvcp-i10n'),
   "base"      => "logos",
   "class"     => "",
   "icon" => "icon-st",
   "category" => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Logo Client",
         "param_name" => "gallery",
         "value" => "",
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Select Columns", 'otvcp-i10n'),
         "param_name" => "columns",
         "value" => array(
            esc_html__('6 Columns', 'otvcp-i10n') => 6,
            esc_html__('4 Columns', 'otvcp-i10n') => 4,
            esc_html__('3 Columns', 'otvcp-i10n') => 3,                                      
         ),
      ),
    )));
}

// Testimonial Slider
if(function_exists('vc_map')){
   vc_map(array(
         "name"      => __("OT Testimonial Slider", 'otvcp-i10n'),
         "base"      => "testislide",
         "class"     => "",
         "icon" => "icon-st",
         "category"  => 'Borrow Element',
         "params"    => array( 
            // params group
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'body',
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                        'type' => 'attach_image',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Image',
                        'param_name' => 'image',
                        "value" => "",
                        "description" => __("Upload image", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Name',
                        'param_name' => 'name',
                        "value" => "",
                        "description" => __("Add text", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textarea',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Content',
                        'param_name' => 'desc',
                        "value" => "",
                        "description" => __("Add Content Text", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Loan',
                        'param_name' => 'loan',
                        "value" => "",
                        "description" => __("Add text", 'otvcp-i10n')
                    ),
                )                
            )
        )
    )
);
}

// Testimonial
if(function_exists('vc_map')){
   vc_map(array(
         "name"      => __("OT Testimonial", 'otvcp-i10n'),
         "base"      => "testimonial",
         "class"     => "",
         "icon" => "icon-st",
         "category"  => 'Borrow Element',
         "params"    => array( 
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => esc_html__("Style", 'otvcp-i10n'),
               "param_name" => "style",
               "value" => array(
                           esc_html__('style 1', 'otvcp-i10n') => 'style1', 
                           esc_html__('style 2', 'otvcp-i10n') => 'style2',  
                           esc_html__('style 3', 'otvcp-i10n') => 'style3',                   
               ),
               "description" => esc_html__("", 'otvcp-i10n')
            ),
            // params group
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'body',
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                        'type' => 'attach_image',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Image',
                        'param_name' => 'image',
                        "value" => "",
                        "description" => __("Upload image", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Name',
                        'param_name' => 'name',
                        "value" => "",
                        "description" => __("Add text", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textarea',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Content',
                        'param_name' => 'desc',
                        "value" => "",
                        "description" => __("Add Content Text", 'otvcp-i10n')
                    ),
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Job',
                        'param_name' => 'loan',
                        "value" => "",
                        "description" => __("Add job", 'otvcp-i10n')
                    ),
                )                
            )
        )
    )
);
}

//Testimonial 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Testimonial 2", 'otvcp-i10n'),
   "base"      => "testi2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image",
         "value" => "",
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Name",
         "param_name" => "name",
         "value" => "",
         "description" => esc_html__("Enter the name", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Location",
         "param_name" => "loan",
         "value" => "",
         "description" => esc_html__("Enter the location", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
    )));
}

//OT Testimonial 3
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Testimonial 3", 'otvcp-i10n'),
   "base"      => "testi3",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array(
                     esc_html__('Image Version', 'otvcp-i10n') => 'style1', 
                     esc_html__('Quote Icon not image', 'otvcp-i10n') => 'style2',   
                     esc_html__('Simple', 'otvcp-i10n') => 'style3',                  
         ),
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image",
         "value" => "",
         'dependency'  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
         "description" => esc_html__("Upload image", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Name",
         "param_name" => "name",
         "value" => "",
         "description" => esc_html__("Enter the name", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Enter the content", 'otvcp-i10n')
      ), 
    )));
}

//Google Map (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT borrow Maps", 'otvcp-i10n'),
   "base"      => "maps",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Borrow Element',
   "params"    => array(
     array(
         "type"      => "attach_image",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Location Image", 'otvcp-i10n'),
         "param_name"=> "imgmap",
         "value"     => "",
         "description" => esc_html__("Upload Location Image.", 'otvcp-i10n')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Latitude", 'otvcp-i10n'),
         "param_name"=> "latitude",
         "value"     => 23.0203458,
         "description" => __("Find Latitude code: <a href='http://www.latlong.net/' target='_blank'>view more</a>", 'otvcp-i10n')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Longitude", 'otvcp-i10n'),
         "param_name"=> "longitude",
         "value"     => 72.5797426,
         "description" => __("Find Longitude code: <a href='http://www.latlong.net/' target='_blank'>view more</a>", 'otvcp-i10n')
      ),    
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Zoom Map", 'otvcp-i10n'),
         "param_name"=> "zoommap",
         "value"     => 9,
         "description" => esc_html__("Enter number for Zoom Map", 'otvcp-i10n')
      ),
    )));
}
?>