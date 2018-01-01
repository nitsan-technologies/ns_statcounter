
.. include:: ../Includes.txt

.. _configuration:

=============
Configuration
=============

Quick & Easy configuration of "StatCounter" into TYPO3
=======================================================


To activate the StatCounter service for your TYPO3 site:
--------------------------------------------------------

.. rst-class:: ol-bignums

#. Sign Up with StatCounter `https://statcounter.com/sign-up/ <https://statcounter.com/sign-up/>`_

#. Add Your Project URL `http://statcounter.com/add-project/ <http://statcounter.com/add-project/>`_

#. Use "Default Installation Instructions" to get all to get Project Id and Security Key.

   .. figure:: Images/TYPO3_www_StatsCounter_com_Add_Project.png
      :alt: Configuration 1


Setup all the configuration of www.StatCounter.com
---------------------------------------------------

.. rst-class:: ol-bignums

#. Switch to the root page of your site.

#. Switch to the **Template module** and select *Constant Editor*.

#. Select Category = PLUGIN.TX_NSSTATUSCOUNTER (4)

#. Please setup all the fields from www.StatCounter.com, Checkout following screenshot.

   .. figure:: Images/TYPO3_StatsCounter_Extension_NITSAN_Backend_Settings_Configuration.png
      :alt: Configuration 2
      :width: 1100px

.. _Clearing-the-cache:

Clearing the cache
==================

Please use the buttons 'Flush frontend caches' and 'Flush general caches'
from the top panel. The 'Clear cache' function of the install tool will also
work perfectly.
