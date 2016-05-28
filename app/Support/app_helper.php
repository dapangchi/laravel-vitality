<?php 

use App\Models\Setting;
use App\Libraries\MyCart;
                               
if ( ! function_exists('force_redirect'))
{
    function force_redirect($uri = '', $method = 'location', $http_response_code = 302)
    {
        if ( ! preg_match('#^https?://#i', $uri))
        {
            $uri = url($uri);
        }

        switch($method)
        {
            case 'refresh': 
                header("Refresh:0;url=".$uri);
                break;
            default: 
                header("Location: ".$uri, TRUE, $http_response_code);
                break;
        }
        exit;
    }
}

if(!function_exists('mkpath')) 
{
    function mkpath($path)
    {
        if(@cmkdir($path) or file_exists($path)) return true;
        return (mkpath(dirname($path)) and cmkdir($path));
    }
    function cmkdir($path)
    {
        $result = mkdir($path);
        if($result)
        {
            if(!file_exists($path . '/index.html')) 
            {
                $str = '<html><head><title>403 Forbidden</title></head><body><p>Directory access is forbidden.</p></body></html>';

                $file = fopen($path . '/index.html', 'w');
                fwrite($file, $str);
                fclose($file);
            }
        }

        return $result;
    }
}

if(!function_exists('the_content')) 
{
    function the_content($str='')
    {
        return nl2br($str);
    }
}

if(!function_exists('array_convert2to1')) 
{
    function array_convert2to1($array, $key, $value)
    {
        $result = array();
        foreach($array as $arr)
        {
            $result[$arr[$key]] = $arr[$value];
        }
        
        return $result;
    }
}

if ( !function_exists('resize_image') )  
{
    function resize_image($path, $width=0, $height=0, $mode='real')
    {
        $image = 'frontend/img/placeholder.jpg';
        if(file_exists($path))
        {
            $image = $path;            
        }
        
        if($mode == 'real')
        {
            return asset( $image );
        }
        else
        {
            return asset(ImageManager::getImagePath( $image, $width, $height, $mode ));
        }
    }
}

////////////////////////////////////////////////////////////////////
//sortable table
////////////////////////////////////////////////////////////////////
{
    if(!function_exists('sort_th')) 
    {
        function sort_th($base_uri, $col_label, $order_field, $text_align='center')
        {
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            $class = 'sorting';
            if($order_field == $order)
            {
                if($order_by == 'asc') 
                {
                    $class = 'sorting_asc';
                }
                else 
                {
                    $class = 'sorting_desc';
                }
            }
            
            $link = url($base_uri . sort_link($order_field)); 
            $result = "<th class='sort_th text-$text_align $class' data-href='$link'>$col_label</th>";
            return $result;        
        } 
    }

    if(!function_exists('sort_th_with_route')) 
    {
        function sort_th_with_route($route, $col_label, $order_field, $text_align='center')
        {
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            $class = 'sorting';
            if($order_field == $order)
            {
                if($order_by == 'asc') 
                {
                    $class = 'sorting_asc';
                }
                else 
                {
                    $class = 'sorting_desc';
                }
            }
            
            $link = URL::route($route, sort_link_with_route($order_field)); 
            $result = "<th class='sort_th text-$text_align $class' data-href='$link'>$col_label</th>";
            return $result;        
        } 
    }

    if ( !function_exists('sort_link') )
    {
        function sort_link($order_field='')
        {     
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            $stack = array();
            $stack[] = "order=" . $order_field;  
            if($order == $order_field) $stack[] = 'orderby=' . ($order_by == 'asc' ? 'desc' : 'asc');         
            else $stack[] = 'orderby=asc';
            
            $query = '';
            if(!empty($stack))
            {
                $query .= '?' . join('&', $stack);
            }
            
            return $query;
        }
    }

    if ( !function_exists('sort_link_with_route') )
    {
        function sort_link_with_route($order_field='')
        {     
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            $stack = array();
            $stack[] = "order=" . $order_field;  
            if($order == $order_field) $stack[] = 'orderby=' . ($order_by == 'asc' ? 'desc' : 'asc');         
            else $stack[] = 'orderby=asc';
            
            $query = '';
            if(!empty($stack))
            {
                $query .= join('&', $stack);
            }
            
            return $query;
        }
    }

    if ( !function_exists('paginate_links') )
    {
        function paginate_links($rows)
        {
            if(empty($rows)) return '';
            
            $order = Request::input('order');
            $order_by = Request::input('orderby');
            
            if($order != '' && $order_by != '')
            {
                $rows->appends(['order' => $order])
                    ->appends(['orderby' => $order_by]);
            }
            
            return $rows->render();    
        }
    }

    if ( !function_exists('paginate_links_with_params') )
    {
        function paginate_links_with_params($rows)
        {
            if(empty($rows)) return '';
            
            foreach(Request::all() as $key => $value)
            {
                $rows->appends([$key => $value]);
            }
            
            return $rows->render(new App\Libraries\Pagination($rows));    
        }
    }
}