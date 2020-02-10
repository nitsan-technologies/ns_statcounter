<?php
namespace Nitsan\NsStatcounter\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Page\PageRenderer;

/***
 *
 * This file is part of the "Nitsan" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * StatcounterController
 */
class StatcounterController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $settings = $this->settings;
        $project = $settings['sc_project'];
        $secret = $settings['sc_security'];
        $position = $settings['position'];
        $visiblity = $settings['visiblity'];
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);

        if($position==1) {

            $pageRenderer->addHeaderData('
            <script type="text/javascript">
            var sc_project='.$project.'; 
            var sc_invisible='.$visiblity.'; 
            var sc_security="'.$secret.'"; 
            var scJsHost = (("https:" == document.location.protocol) ?
            "https://secure." : "http://www.");
            document.write("<sc"+"ript type=text/javascript src=" +
            scJsHost+
            "statcounter.com/counter/counter.js></"+"script>");
            </script>
            <noscript>
                <div class="statcounter">
                    <a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/12185928/0/1b89833e/0/" alt="WebAnalytics">
                    </a>
                </div>
            </noscript>
            ');

        } else {
            

           $pageRenderer->addFooterData('
            <script type="text/javascript">
            var sc_project='.$project.'; 
            var sc_invisible='.$visiblity.'; 
            var sc_security="'.$secret.'"; 
            var scJsHost = (("https:" == document.location.protocol) ?
            "https://secure." : "http://www.");
            document.write("<sc"+"ript type=text/javascript src=" +
            scJsHost+
            "statcounter.com/counter/counter.js></"+"script>");
            </script>
            <noscript>
                <div class="statcounter">
                    <a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/12185928/0/1b89833e/0/" alt="WebAnalytics">
                    </a>
                </div>
            </noscript>
            ');
        }
    }
}
