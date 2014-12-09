<?php

namespace KryuuSimpleMessage;

/**
 * @encoding UTF-8
 * @note *
 * @todo *
 * @package PackageName
 * @author Anders Blenstrup-Pedersen - KatsuoRyuu <anders-github@drake-development.org>
 * @license *
 * The Ryuu Technology License
 *
 * Copyright 2014 Ryuu Technology by 
 * KatsuoRyuu <anders-github@drake-development.org>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * Ryuu Technology shall be visible and readable to anyone using the software 
 * and shall be written in one of the following ways: Ryuu Technology 
 * or by using the company logo.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @version 20140730 
 * @link https://github.com/KatsuoRyuu/
 */

return array(
    __NAMESPACE__ => array(
    ),
    'view_manager' => array(
        'template_map' => array(
            'partial/messages/view'				=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/view.phtml',
			
            'partial/messages/error/head'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/error/head.phtml',
            'partial/messages/error/message'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/error/message.phtml',
            'partial/messages/error/foot'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/error/foot.phtml',
			            
			'partial/messages/warning/head'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/warning/head.phtml',
            'partial/messages/warning/message'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/warning/message.phtml',
            'partial/messages/warning/foot'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/warning/foot.phtml',
			            
			'partial/messages/success/head'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/success/head.phtml',
            'partial/messages/success/message'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/success/message.phtml',
            'partial/messages/success/foot'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/success/foot.phtml',
			            
			'partial/messages/info/head'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/info/head.phtml',
            'partial/messages/info/message'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/info/message.phtml',
            'partial/messages/info/foot'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/info/foot.phtml',
			            
			'partial/messages/default/head'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/default/head.phtml',
            'partial/messages/default/message'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/default/message.phtml',
            'partial/messages/default/foot'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/default/foot.phtml',
			            
			'partial/messages/all/head'         => __DIR__ . '/../view/kryuu-simple-message/partial/messages/all/head.phtml',
            'partial/messages/all/message'      => __DIR__ . '/../view/kryuu-simple-message/partial/messages/all/message.phtml',
            'partial/messages/all/foot'         => __DIR__ . '/../view/kryuu-simple-message/partial/messages/all/foot.phtml',
			            
			'partial/messages/namespace/head'   => __DIR__ . '/../view/kryuu-simple-message/partial/messages/namespace/head.phtml',
            'partial/messages/namespace/message'=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/namespace/message.phtml',
            'partial/messages/namespace/foot'   => __DIR__ . '/../view/kryuu-simple-message/partial/messages/namespace/foot.phtml',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'messenger'				=> 'KryuuSimpleMessage\View\Helper\FlashMessengerHelper',
            //'viewAllBlogPosts'  => 'KryuuSimpleMessage\View\Helper\ViewAllPostsHelper',
        ),
    ),
);