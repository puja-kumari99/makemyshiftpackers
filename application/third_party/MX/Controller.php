<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
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
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 7209532593';
        $this->comp['phonehtml'] = 'tel:+917209532593';
        $this->comp['phone1'] = '+91 8298181018';
        $this->comp['phonehtml1'] = 'tel:+918298181018';
        $this->comp['phone2'] = '+91 9363639191';
        $this->comp['phonehtml2'] = 'tel:+919363639191';
       
        $this->comp['supportmail'] = 'support@makemyshiftpackers.com';
        $this->comp['replyToMail'] = 'makemyshiftmovers@gmail.com';
        $this->comp['mail'] = 'makemyshiftmovers@gmail.com';
        $this->comp['mailhtml'] = "mailto:makemyshiftmovers@gmail.com";
        $this->comp['company3'] = 'Make My Shift';
        $this->comp['companydomain'] = 'makemyshift.in';

        $this->comp['facebookhtml'] = "https://facebook.com";
        $this->comp['youtubehtml'] = "https://youtube.com";
        $this->comp['instagramhtml'] = "https://instagram.com";
        $this->comp['twitterhtml'] = "https://twitter.com";
        $this->comp['linkedinhtml'] = "https://linkedin.com";
        $this->comp['whatsapphtml'] = "https://wa.me/918298181018";
        $this->comp['whatsapphtml1'] = "https://wa.me/918298181018";
        $this->comp['whatsapphtml2'] = "https://wa.me/919363639191";

        $this->comp['address'] = "C/o ASHA DEVI, BHAGALPUR (M CORP.),TOLA JYOTI VIHAR COLONY, JAGDISHPUR BHAGLPUR Bhagalpur Bihar - 813210";
        $this->comp['address1'] = "C/o ASHA DEVI, BHAGALPUR (M CORP.),TOLA JYOTI VIHAR COLONY";
        $this->comp['address2'] = "JAGDISHPUR BHAGLPUR Bhagalpur Bihar - 813210";
        $this->comp['addressRegion'] = "JAGDISHPUR BHAGLPUR";
        $this->comp['postalCode'] = "813210";

        $this->comp['corporate_address'] = "C/O Dr B.P Singh, Rani Chandrawati Hata Adampur, Chowk, In front Of - Dr. R Bakhla Building, Swami Vivekanand Path Adampur Chowk Bhagalpur, Bihar Pin 812001";
        $this->comp['corporate_address1'] = "C/O Dr B.P Singh, Rani Chandrawati Hata Adampur, Chowk";
        $this->comp['corporate_address2'] = "Bhagalpur, Bihar Pin 812001";
        $this->comp['corporate_addressRegion'] = "Bhagalpur";
        $this->comp['corporate_postalCode'] = "812001";
        $this->comp['corporate_state'] = "Bihar";

        $this->comp['companystate'] = "Bihar";
        $this->comp['themeColor'] = "#0f3d7e";

        $this->comp['experience'] = "9+";
        $this->comp['startYear'] = "2017";

        $this->comp['happyClients'] = "39,850+";
        $this->comp['secureShifting'] = "Safe & Secure";
        $this->comp['statesCovered'] = "20+";

        $this->comp['sku'] = "MMS28957";
        $this->comp['mpn'] = "SMMS28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Shift Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
