<?php

/**
 * From RGB color return contrast color black/white
 * @author vEnCa-X <venca-x@seznam.cz>
 * @version 0.1
 */
class ContrastYIQ
{
    /**
     * From RGB color return contrast color black/white
     * @param string $color Color ( #123456 || 123456 )
     * @return string
     */
    public function getContrastYIQ( $color )
    {
        //remove # if exist
        $hexcolor = str_replace('#', '', $color);
        
        //color components
        $r = hexdec( substr( $hexcolor, 0, 2 ) );
        $g = hexdec( substr( $hexcolor, 2, 2 ) );
        $b = hexdec( substr( $hexcolor, 4, 2 ) );
        
        $yiq = (($r * 299) + ($g * 587) + ($b * 114)) / 1000;
        
        return ($yiq >= 128) ? "black" : "white";
    }

}
