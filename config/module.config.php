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
        'messenger'         => 'flashmessenger',
        'partialSetup' => array
        (
            
            'errorMessage'      => 'partial/messages/error/message',
            'errorHeader'       => 'partial/messages/error/header',
            'errorFooter'       => 'partial/messages/error/footer',
            
            'warningMessage'    => 'partial/messages/warning/message',
            'warningHeader'     => 'partial/messages/warning/header',
            'warningFooter'     => 'partial/messages/warning/footer',
            
            'successMessage'    => 'partial/messages/success/message',
            'successHeader'     => 'partial/messages/success/header',
            'successFooter'     => 'partial/messages/default/footer',
            
            'infoMessage'       => 'partial/messages/info/message',
            'infoHeader'        => 'partial/messages/info/header',
            'infoFooter'        => 'partial/messages/info/footer',
            
            'defaultMessage'    => 'partial/messages/default/message',
            'defaultHeader'     => 'partial/messages/default/header',
            'defaultFooter'     => 'partial/messages/default/footer',
            
            'allMessage'        => 'partial/messages/all/message',
            'allHeader'         => 'partial/messages/all/header',
            'allFooter'         => 'partial/messages/all/footer',
            
            'namespaceMessage'  => 'partial/messages/namespace/message',
            'namespaceHeader'   => 'partial/messages/namespace/header',
            'namespaceFooter'   => 'partial/messages/namespace/footer',
            
            
        )
        
    ),
    'view_manager' => array(
        'template_map' => array(
            'partial/messages/view'				=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/view.phtml',
			
            'partial/messages/error/header'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/error/header.phtml',
            'partial/messages/error/message'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/error/message.phtml',
            'partial/messages/error/footer'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/error/footer.phtml',
			            
			'partial/messages/warning/header'   => __DIR__ . '/../view/kryuu-simple-message/partial/messages/warning/header.phtml',
            'partial/messages/warning/message'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/warning/message.phtml',
            'partial/messages/warning/footer'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/warning/footer.phtml',
			            
			'partial/messages/success/header'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/success/header.phtml',
            'partial/messages/success/message'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/success/message.phtml',
            'partial/messages/success/footer'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/success/footer.phtml',
			            
			'partial/messages/info/header'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/info/header.phtml',
            'partial/messages/info/message'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/info/message.phtml',
            'partial/messages/info/footer'		=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/info/footer.phtml',
			            
			'partial/messages/default/header'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/default/header.phtml',
            'partial/messages/default/message'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/default/message.phtml',
            'partial/messages/default/footer'	=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/default/footer.phtml',
			            
			'partial/messages/all/header'       => __DIR__ . '/../view/kryuu-simple-message/partial/messages/all/header.phtml',
            'partial/messages/all/message'      => __DIR__ . '/../view/kryuu-simple-message/partial/messages/all/message.phtml',
            'partial/messages/all/footer'       => __DIR__ . '/../view/kryuu-simple-message/partial/messages/all/footer.phtml',
			            
			'partial/messages/namespace/header' => __DIR__ . '/../view/kryuu-simple-message/partial/messages/namespace/header.phtml',
            'partial/messages/namespace/message'=> __DIR__ . '/../view/kryuu-simple-message/partial/messages/namespace/message.phtml',
            'partial/messages/namespace/footer' => __DIR__ . '/../view/kryuu-simple-message/partial/messages/namespace/footer.phtml',
        ),
    ),
);